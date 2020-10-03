<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admin','middleware'=> ['auth']], function () {
    Route::get('/',[DashboardController::class,'dashboard'])->name('admin.dashboard');
    Route::resource('/categories', CategoryController::class, ['as'=>'admin']);
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    $name = "hello";
    return view("hello", compact('name'));
});

Route::get('/hellos', function () {
    $names = ['a', 'b', 'c'];
    return view("hellos", compact('names'));
});

Route::get('/tasks', function () {
    $tasks = DB::table('tasks')->get();
    return view("tasks.index", compact('tasks'));
});

Route::get('/tasks/{task}', function ($id) {
    $task = DB::table('tasks')->find($id);
    return view("tasks.show", compact('task'));
});

Route::get('/posts', [PostController::class,'index']);
Route::get('/posts/json', [PostController::class,"json"]);
Route::get('/posts/{post}', [PostController::class,"post"]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
