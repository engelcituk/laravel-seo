<?php

namespace App\Http\Controllers;

use App\Models\Tag;

use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\SEOMeta;

class TagController extends Controller
{
    public function __invoke(Tag $tag)
    {
        $tag->load("posts:id,title,excerpt,slug,user_id,published_at", "posts.categories:id,name,slug", "posts.user:id,name,avatar,slug");
        $posts = $tag->posts()->paginate();

        $title = "Posts para la etiqueta {$tag->name }";
        $description = "Hay {$posts->count()} posts con la etiqueta {$tag->name}: {$posts->implode("title", " - ") }";
        $tagImage = "https://via.placeholder.com/640x300/00638C/FFFFFF/?text=Posts tag " . $tag->name;

        SEOTools::setTitle($title);
        SEOTools::setDescription($description);
        SEOTools::setCanonical( \URL::full() );

        SEOMeta::setRobots("noindex,nofollow");
        
        if($posts->nextPageUrl()){
            SEOMeta::setNext( $posts->nextPageUrl() );
        }
        
        if($posts->previousPageUrl()){
            SEOMeta::setPrev( $posts->previousPageUrl() );
        }

        SEOTools::opengraph()->setUrl(\URL::current());
        SEOTools::opengraph()->setTitle($title);
        SEOTools::opengraph()->setDescription($description);
        SEOTools::opengraph()->addImage($tagImage);
        SEOTools::opengraph()->addProperty("type","articles");

        SEOTools::twitter()->setSite("@engelnov");
        SEOTools::twitter()->setImage($tagImage);
        SEOTools::twitter()->setType("summary_large_image");
        

        return view("blog.tag", compact("tag", "posts"));
    }
}
