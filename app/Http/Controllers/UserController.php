<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

class UserController extends Controller
{
    public function __invoke(User $user)
    {
        $user->loadCount("posts", "comments");
        $tags = Tag::whereHas("posts", function (Builder $builder) use ($user) {
            $builder->where("user_id", $user->id);
        })->distinct()->get();
        return view("blog.user", compact("user", "tags"));
    }
}
