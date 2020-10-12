<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function all(Request $request) {
        $page = $request->get('page');
        $rowsPerPage = $request->get('perPage') ?? 2;
        $skip = ($page - 1) * $rowsPerPage;
        $articles = Article::query()->select(['title','description'])->offset($skip)->take($rowsPerPage)->get();

        $articlesCount = Article::all()->count();

        return response()->json([
            "articles" => $articles,
            "totalItems" => $articlesCount
        ], 200);
    }


    public function index () {
        return view('blog.index');
    }

    public function category ($slug) {
        $category = Category::query()->where('slug', $slug)->first();
        return view('blog.category', ['category' => $category, 'articles' => $category->articles()->paginate(2)]);
    }

    public function article ($slug) {
        $article = Article::query()->where('slug', $slug)->first();
        return view('blog.article', ['article' => $article]);
    }
}
