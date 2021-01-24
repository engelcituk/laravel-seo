<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        $posts = Post::count();
        $categories = Category::count();
        $tags = Tag::count();
        $comments = Comment::count();
        $authors = User::whereHas("posts")->count();
        $title = "Un blog de tecnología y programación a la última";
        $description = __("En :app estarás informado de todo lo relacionado con la tecnología, lenguajes de programación y muchos más temas interesantes.", ["app" => config("app.name")]);
        return view("welcome", compact("title", "description", "posts", "categories", "tags", "comments", "authors"));
    }
}
