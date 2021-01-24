<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function __invoke(Category $category)
    {
         $category->load("posts:user_id,title,excerpt,slug,published_at", "posts.user:id,name,avatar,slug");
         return view("blog.category", compact("category"));
    }
}
