<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BlogController extends Controller
{
    public function __construct() {
        $this->middleware("auth")->except("index", "show");
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View {
        $authors = User::select(["slug", "avatar", "name"])
            ->whereHas("posts")
            ->withCount("posts")
            ->latest()
            ->limit(5)
            ->get();
        $categories = Category::select(["name", "slug"])->withCount("posts")->get();
        $featuredPosts = Post::with("categories:id,name,slug", "user:id,name,slug,avatar")->select(["id", "user_id", "title", "image", "slug", "published_at"])->where("featured", true)->get();
        $tags = Tag::select(["name", "slug"])->withCount("posts")->get();
        $posts = Post::with("tags:name,slug", "categories:name,slug", "user:id,name,slug,avatar")->select("id", "user_id", "title", "excerpt", "slug", "published_at")->where("published", true)->paginate(3);

        return view("blog.index", compact("posts", "categories", "authors", "featuredPosts", "tags"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Post $post
     * @return View
     */
    public function show(Post $post): View {
        $post->load("tags:name,slug", "categories:id,name,slug", "user:id,name,slug,avatar", "comments:post_id,content,user_id,published_at")->loadCount("comments")->where("published", true);
        $relatedPosts = Post::with("categories:id,name,slug", "user:id,name,slug,avatar")->whereHas("categories", function (Builder $builder) use ($post) {
            $builder->whereIn("id", $post->categories->pluck("id"));
        })->where('id', "!=", $post->id)->get();
        return view("blog.post", compact("post", "relatedPosts"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
