<?php

namespace App\Http\Controllers;

use App\Models\Category; // Ensure the Category model is imported

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('components.navbar', compact('categories'));
    }

    public function show($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $news = $category->news()->latest()->paginate(10);

        return view('category.show', compact('category', 'news'));
    }
}
