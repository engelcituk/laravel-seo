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

use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\Opengraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;

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

        $blogPostsImage = "https://via.placeholder.com/649x300/4B5563/FFFFFF/?text=BlogSeo";


        SEOTools::setTitle("Blog posts- Página {$posts->currentPage()} ");
        SEOTools::setDescription("Listado de posts de la pagina {$posts->currentPage()} ");
        SEOTools::setCanonical( \URL::full() );

        if($posts->nextPageUrl()){
            SEOMeta::setNext( $posts->nextPageUrl() );
        }

        if($posts->previousPageUrl()){
            SEOMeta::setPrev( $posts->previousPageUrl() );
        }

        SEOTools::opengraph()->setUrl(\URL::current());
        SEOTools::opengraph()->addImage($blogPostsImage);
        SEOTools::opengraph()->addProperty("type", "articles");


        SEOTools::twitter()->setSite("@engelnov");
        SEOTools::twitter()->setImage($blogPostsImage);
        SEOTools::twitter()->setType("summary_large_image");

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

        SEOTools::setTitle($post->title);
        SEOTools::setDescription( $post->content );
        SEOMeta::addMeta('article:published_time', $post->created_at->toW3cString(), 'property' );

        $title = $post->title." - ".config("app.name");

        Opengraph::setTitle($title);
        Opengraph::setDescription( $post->content );
        Opengraph::setUrl( \URL::current() );
        Opengraph::addProperty('locale', config("app.locale"));
        Opengraph::addImage($post->image,[ 'height'=> 300, 'width'=> 640 ]);

        TwitterCard::setTitle($title);
        TwitterCard::setUrl( \URL::current() );
        TwitterCard::setSite("@engelnov");
        TwitterCard::addImage($post->image);
        TwitterCard::setType("summary_large_image");

        JsonLd::setTitle($title);
        JsonLd::setDescription($post->content );
        JsonLd::setType("Article");
        JsonLd::addImage($post->image);



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
