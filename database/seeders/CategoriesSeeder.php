<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            [
                "name" => "PHP",
                "meta_name" => "Tutoriales de PHP",
                "slug" => "php",
                "content" => "PHP y mucho más",
                "image" => "https://via.placeholder.com/640x480/7377AD/FFFFFF/?text=PHP"
            ],
            [
                "name" => "JavaScript",
                "meta_name" => "Tutoriales de JavaScript",
                "slug" => "javascript",
                "content" => "JavaScript y mucho más",
                "image" => "https://via.placeholder.com/640x480/FFF033/000000/?text=JavaScript"
            ],
            [
                "name" => "WordPress",
                "meta_name" => "Tutoriales de WordPress",
                "slug" => "wordpress",
                "content" => "WordPress y mucho más",
                "image" => "https://via.placeholder.com/640x480/00638C/FFFFFF/?text=WordPress"
            ],
            [
                "name" => "Laravel",
                "meta_name" => "Tutoriales de Laravel",
                "slug" => "laravel",
                "content" => "Laravel y mucho más",
                "image" => "https://via.placeholder.com/640x480/FF2D20/FFFFFF/?text=Laravel"
            ],
            [
                "name" => "NodeJS",
                "meta_name" => "Tutoriales de NodeJS",
                "slug" => "nodejs",
                "content" => "NodeJS y mucho más",
                "image" => "https://via.placeholder.com/640x480/559F47/FFFFFF/?text=NodeJS"
            ],
            [
                "name" => "Vue 3",
                "meta_name" => "Tutoriales de Vue 3",
                "slug" => "vue-3",
                "content" => "Vue 3 y mucho más",
                "image" => "https://via.placeholder.com/640x480/4BB483/FFFFFF/?text=Vue 3"
            ],
            [
                "name" => "Quasar Framework",
                "meta_name" => "Tutoriales de Quasar Framework",
                "slug" => "quasar-framework",
                "content" => "Quasar Framework y mucho más",
                "image" => "https://via.placeholder.com/640x480/42A5F5/FFFFFF/?text=Quasar Framework"
            ],
            [
                "name" => "Amplify Framework",
                "meta_name" => "Tutoriales de Amplify Framework",
                "slug" => "amplify-framework",
                "content" => "Amplify Framework y mucho más",
                "image" => "https://via.placeholder.com/640x480/FF9900/FFFFFF/?text=Amplify Framework"
            ]
        ]);
    }
}
