<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Article;

class FrontPageController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $latestNews = Article::latest()->take(10)->get();
        $popularNews = Article::orderBy('id', 'desc')->take(5)->get();

        return view('pages.frontpage', compact('categories', 'latestNews', 'popularNews'));
    }
}
