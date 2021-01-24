<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = Post::create([
            "user_id" => rand(1, 10),
           "title" => "Novedades en PHP 8",
            "meta_title" => "Novedades en PHP 8",
            "slug" => "novedades-php-8",
            "excerpt" => "PHP fue lanzado hace poco y en este tutorial te quiero explicar las novedades más importantes.",
            "featured" => true,
            "published" => true,
            "published_at" => now(),
            "created_at" => now(),
            "content" => "PHP fue lanzado hace poco y en este tutorial te quiero explicar las novedades más importantes, pero entre ellas, te puedo comentar las siguientes: JIT (Just in time), Named arguments y mucho más.",
            "type" => "post",
            "image" => "https://via.placeholder.com/640x300/7377AD/FFFFFF/?text=Novedades en PHP 8"
        ]);
        $post->categories()->attach(1);
        $post->tags()->attach([1, 2]);

        $post = Post::create([
            "user_id" => rand(1, 10),
            "title" => "Laravel 8 y Jetstream",
            "meta_title" => "Novedades en Laravel 8 y Jetstream",
            "slug" => "laravel-8-y-jetstream",
            "excerpt" => "Laravel 8 fue publicado hace pocos meses y una de sus principales novedades es Jetstream.",
            "featured" => true,
            "published" => true,
            "published_at" => now(),
            "created_at" => now(),
            "content" => "Jetstream viene a ser un poderoso sistema de scaffolding para nuevos proyectos Laravel a partir de la versión 8. Este sistema viene con dos posibles stacks, Inertia y Livewire, ambos tratados en forma de cursos en la plataforma.",
            "type" => "post",
            "image" => "https://via.placeholder.com/640x300/FF2D20/FFFFFF/?text=Laravel 8 y Jetstream"
        ]);
        $post->categories()->attach([1, 4]);
        $post->tags()->attach(6);

        $post = Post::create([
            "user_id" => rand(1, 10),
            "title" => "Aprendiendo WordPress",
            "meta_title" => "Aprendiendo WordPress desde cero",
            "slug" => "aprendiendo-wordpress-desde-cero-para-novatos",
            "excerpt" => "En esta entrada te voy a dar información básica pero que te será muy útil acerca de WordPress.",
            "featured" => false,
            "published" => true,
            "published_at" => now(),
            "created_at" => now(),
            "content" => "WordPress es el CMS (Content Managment System) más utilizado a nivel mundial para el desarrollo de sitios web, entre sus principales virtudes se encuentran: Optimización SEO, Pluggable, Poderosa administración, Gratis.",
            "type" => "post",
            "image" => "https://via.placeholder.com/640x300/00638C/FFFFFF/?text=Aprendiendo WordPress"
        ]);
        $post->categories()->attach([1, 3]);
        $post->tags()->attach(7);

        $post = Post::create([
            "user_id" => rand(1, 10),
            "title" => "Aprendiendo NodeJS",
            "meta_title" => "Aprendiendo NodeJS desde cero",
            "slug" => "aprendiendo-nodejs-desde-cero-para-novatos",
            "excerpt" => "En esta entrada te voy a dar información básica pero que te será muy útil acerca de NodeJS.",
            "featured" => false,
            "published" => true,
            "published_at" => now(),
            "created_at" => now(),
            "content" => "Node.js es un entorno en tiempo de ejecución multiplataforma, de código abierto, para la capa del servidor basado en el lenguaje de programación JavaScript, asíncrono, con E/S de datos en una arquitectura orientada a eventos y basado en el motor V8 de Google.",
            "type" => "post",
            "image" => "https://via.placeholder.com/640x300/559F47/FFFFFF/?text=Aprendiendo NodeJS"
        ]);
        $post->categories()->attach([5]);
        $post->tags()->attach(14);

        $post = Post::create([
            "user_id" => rand(1, 10),
            "title" => "Aprendiendo Vue 3",
            "meta_title" => "Aprendiendo Vue 3 desde cero",
            "slug" => "aprendiendo-vue-3-desde-cero-para-novatos",
            "excerpt" => "En esta entrada te voy a dar información básica pero que te será muy útil acerca de Vue 3.",
            "featured" => false,
            "published" => true,
            "published_at" => now(),
            "created_at" => now(),
            "content" => "Vue 3 es un framework JavaScript del lado del cliente que junto con HTML nos permite desarrollar interfaces de usuario con una UX excelente y poco código.",
            "type" => "post",
            "image" => "https://via.placeholder.com/640x300/4BB483/FFFFFF/?text=Aprendiendo Vue 3"
        ]);
        $post->categories()->attach([6]);
        $post->tags()->attach(15);

        $post = Post::create([
            "user_id" => rand(1, 10),
            "title" => "Crear un sitemap con PHP",
            "meta_title" => "Crear un sitemap con PHP",
            "slug" => "crear-sitemap-php",
            "excerpt" => "En esta entrada vamos a ver lo sencillo que es crear un Sitemap con PHP desde cero.",
            "featured" => false,
            "published" => true,
            "published_at" => now(),
            "created_at" => now(),
            "content" => "Un Sitemap nos permite explicarles a los motores de búsqueda qué contenido tenemos en nuestro sitio y cómo está organizado, posts, categorías, cursos, usuarios.",
            "type" => "post",
            "image" => "https://via.placeholder.com/640x300/7377AD/FFFFFF/?text=Crear un sitemap con PHP"
        ]);
        $post->categories()->attach([1]);
        $post->tags()->attach([1, 2]);

        $post = Post::create([
            "user_id" => rand(1, 10),
            "title" => "Las bases de Laravel",
            "meta_title" => "Aprendiendo las bases de Laravel",
            "slug" => "bases-de-laravel",
            "excerpt" => "En esta entrada vamos a conocer las bases de Laravel par que entiendas cómo funciona realmente.",
            "featured" => false,
            "published" => true,
            "published_at" => now(),
            "created_at" => now(),
            "content" => "Laravel es un framework PHP para el desarrollo de sitios web que utiliza una sintaxis fácil de entender y de escribir con un gran soporte de la comunidad.",
            "type" => "post",
            "image" => "https://via.placeholder.com/640x300/FF2D20/FFFFFF/?text=Las bases de Laravel"
        ]);
        $post->categories()->attach([4]);
        $post->tags()->attach([5]);

        $post = Post::create([
            "user_id" => rand(1, 10),
            "title" => "Blade, el motor de plantillas de Laravel",
            "meta_title" => "Aprende a trabajar con Blade",
            "slug" => "blade-motor-plantillas-laravel",
            "excerpt" => "En esta entrada vamos a aprender a trabajar con Blade, el motor de plantillas de Laravel.",
            "featured" => false,
            "published" => true,
            "published_at" => now(),
            "created_at" => now(),
            "content" => "Blade es el motor de plantillas que Laravel nos ofrece para escribir las interfaces de usuario, aunque tenemos alternativas como Vue. En esta entrada aprenderás todo lo que necesitas saber a través de ejemplos.",
            "type" => "post",
            "image" => "https://via.placeholder.com/640x300/FF2D20/FFFFFF/?text=Aprendiendo Blade"
        ]);
        $post->categories()->attach([4]);
        $post->tags()->attach([8]);
    }
}
