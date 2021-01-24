<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Spatie\Sitemap\Tags\SitemapGenerator;


class SiteMapController extends Controller
{
    public function manually()
    {
        $sitemap =  Sitemap::create()
            ->add(Url::create("/"))
            ->add(Url::create("/login"))
            ->add(Url::create("/register"));

        Post::where("published", true)->get()->each( function (Post $post) use ($sitemap) {
            $sitemap->add(Url::create("/{$post->slug}"));
        });

        Category::all()->each( function (Category $category) use ($sitemap) {
            $sitemap->add(Url::create("/category/{$category->slug}"));
        });

        User::all()->each( function (User $user) use ($sitemap) {
            $sitemap->add(Url::create("/user/{$user->slug}"));
        });

        $sitemap->writeToFile( public_path("sitemap.xml"));

    }

    public function automatic()
    {
        SitemapGenerator::create("https://tusitio.com")
            ->writeToFile( public_path("sitemapgenerator.xml"));
    }
}
