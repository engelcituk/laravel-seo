<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\Opengraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;


class UserController extends Controller
{
    public function __invoke(User $user)
    {
        $user->loadCount("posts", "comments");
        $tags = Tag::whereHas("posts", function (Builder $builder) use ($user) {
            $builder->where("user_id", $user->id);
        })->distinct()->get();

        $title = $user->name." - ".config("app.name");
        $description = "Perfil del autor ".$user->name." en ".config("app.name");

        SEOMeta::setTitle($user->name);
        SEOMeta::setDescription($description);

        Opengraph::setTitle($title)
            ->setDescription($description)
            ->setType("profile")
            ->addImage($user->avatar)
            ->setProfile([
                "username" => $user->name,
            ]);

        SEOTools::twitter()->setTitle($title);
        SEOTools::twitter()->setDescription($description);
        SEOTools::twitter()->setSite("@engelnov");
        SEOTools::twitter()->setImage($user->avatar);
        SEOTools::twitter()->setType("summary_large_image");

        return view("blog.user", compact("user", "tags"));
    }
}
