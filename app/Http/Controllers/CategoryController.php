<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\SEOMeta;

class CategoryController extends Controller
{
    public function __invoke(Category $category)
    {
        $category->load("posts:user_id,title,excerpt,slug,published_at", "posts.user:id,name,avatar,slug");
        $posts = $category->posts()->paginate();

        $title = "Posts de la categoría {$category->name } - Página {$posts->currentPage() }";
        $description = "Listado de posts para la categoría {$category->name} en la página {$posts->currentPage()}";

        SEOTools::setTitle($title);
        SEOTools::setDescription($description);
        SEOTools::setCanonical( \URL::full() );

        if($posts->nextPageUrl()){
            SEOMeta::setNext( $posts->nextPageUrl() );
        }

        if($posts->previousPageUrl()){
            SEOMeta::setPrev( $posts->previousPageUrl() );
        }

        SEOTools::opengraph()->setUrl(\URL::current());
        SEOTools::opengraph()->setTitle($title);
        SEOTools::opengraph()->setDescription($description);
        SEOTools::opengraph()->addImage($category->image,["height"=>300, "width"=>640]);
        SEOTools::opengraph()->addProperty("type","articles");

        SEOTools::twitter()->setTitle($title);
        SEOTools::twitter()->setDescription($description);
        SEOTools::twitter()->setSite("@engelnov");
        SEOTools::twitter()->setImage($category->image);
        SEOTools::twitter()->setType("summary_large_image");




         return view("blog.category", compact("category"));
    }
}
