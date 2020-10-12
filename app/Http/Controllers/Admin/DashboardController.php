<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\ProccessJob;
use App\Jobs\PublishedJob;
use App\Jobs\TestJob;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //dashboard

    public  function dashboard() {


        try {
            dispatch(new TestJob())->chain([(new ProccessJob('Process')),
                            new PublishedJob('Published ...')]);
        } catch (\DomainException $e) {
            info($e->getMessage());
        }


            //->delay(now()->addMinute(1));
        return view('admin.dashboard', [
            'categories' => Category::lastCategories(5),
            'countCategories' => Category::query()->count(),
            'articles' => Article::lastArticles(5),
            'countArticles' => Article::query()->count(),
        ]);
    }
}
