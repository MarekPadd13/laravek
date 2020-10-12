<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\BlogController;
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
    Route::resource('/articles', ArticleController::class, ['as'=>'admin']);
    Route::group(['prefix'=> 'user_management'], function () {
        Route::resource('/users', \App\Http\Controllers\Admin\UserManagement\UserController::class, ['as'=> 'admin.user_management']);
    });
});

Route::get('/admin/image', [\App\Http\Controllers\Admin\ImageController::class, 'index'])->name('image.index');
Route::post('/admin/image/upload', [\App\Http\Controllers\Admin\ImageController::class, 'upload'])->name('image.upload');

Route::get('/', function () {
    return view('blog.index');
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

Route::get('blog/article/{slug?}', [BlogController::class,'article'])->name('blog.article');
Route::get('blog/category/{slug?}', [BlogController::class,'category'])->name('blog.category');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
