<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::insert([
            ["name" => "aprender php", "slug" => "aprender-php", "created_at" => now()],
            ["name" => "novedades php", "slug" => "novedades-php", "created_at" => now()],
            ["name" => "cursos de desarrollo web", "slug" => "cursos-desarrollo-web", "created_at" => now()],
            ["name" => "cursos de desarrollo móvil", "slug" => "cursos-desarrollo-movil", "created_at" => now()],
            ["name" => "laravel desde cero", "slug" => "laravel-desde-cero", "created_at" => now()],
            ["name" => "laravel jetstream", "slug" => "laravel-jetstream", "created_at" => now()],
            ["name" => "wordpress desde cero", "slug" => "wordpress-desde-cero", "created_at" => now()],
            ["name" => "plantillas blade", "slug" => "plantillas-blade", "created_at" => now()],
            ["name" => "javascript para noobs", "slug" => "javascript-para-noobs", "created_at" => now()],
            ["name" => "typescript from scratch", "slug" => "typescript-from-scratch", "created_at" => now()],
            ["name" => "dockerizar entornos", "slug" => "dockerizar-entornos", "created_at" => now()],
            ["name" => "gestionar servidores", "slug" => "gestionar-servidores", "created_at" => now()],
            ["name" => "migraciones de base de datos", "slug" => "migraciones-base-de-datos", "created_at" => now()],
            ["name" => "nodejs desde cero", "slug" => "nodejs-desde-cero", "created_at" => now()],
            ["name" => "vue 3 desde cero", "slug" => "vue-3-cero", "created_at" => now()],
        ]);
    }
}
