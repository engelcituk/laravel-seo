<?php

namespace App\Http\Controllers;

use App\Models\Tag;

class TagController extends Controller
{
    public function __invoke(Tag $tag)
    {
        $tag->load("posts:id,title,excerpt,slug,user_id,published_at", "posts.categories:id,name,slug", "posts.user:id,name,avatar,slug");
        $posts = $tag->posts()->paginate();
        return view("blog.tag", compact("tag", "posts"));
    }
}
