<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Category;

class CategoriesController extends Controller
{
    public function show($category_id) {
    	$categories = Category::all();
    	$category = $categories->find($category_id);
    	$posts = $category->posts;
    	return view('categories/show', compact('categories', 'category', 'posts'));
    }
}
