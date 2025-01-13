<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    public function show($slug)
    {
        $news = Article::where('slug', $slug)->firstOrFail();

        return view('news.show', compact('news'));
    }
}
