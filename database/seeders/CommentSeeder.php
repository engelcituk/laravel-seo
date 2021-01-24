<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::create([
            "user_id" => rand(1, 10),
            "post_id" => rand(1, 4),
            "content" => "¡Muy bueno!",
            "published" => true,
            "published_at" => now(),
            "created_at" => now(),
        ]);

        Comment::create([
            "user_id" => rand(1, 10),
            "post_id" => rand(1, 4),
            "content" => "¡Excelente, me sirvió!",
            "published" => true,
            "published_at" => now(),
            "created_at" => now(),
        ]);

        Comment::create([
            "user_id" => rand(1, 10),
            "post_id" => rand(1, 4),
            "content" => "¿Se podría actualizar a la última versión? ¡Gracias!",
            "published" => true,
            "published_at" => now(),
            "created_at" => now(),
        ]);

        Comment::create([
            "user_id" => rand(1, 10),
            "post_id" => rand(1, 4),
            "content" => "No era lo que esperaba",
            "published" => true,
            "published_at" => now(),
            "created_at" => now(),
        ]);

        Comment::create([
            "user_id" => rand(1, 10),
            "post_id" => rand(1, 4),
            "content" => "¡Gracias!",
            "published" => true,
            "published_at" => now(),
            "created_at" => now(),
        ]);

        Comment::create([
            "user_id" => rand(1, 10),
            "post_id" => rand(1, 4),
            "content" => "¡¡Súper!!",
            "published" => true,
            "published_at" => now(),
            "created_at" => now(),
        ]);

        Comment::create([
            "user_id" => rand(1, 10),
            "post_id" => rand(1, 4),
            "content" => "Bastante aburrido y falto de información...",
            "published" => true,
            "published_at" => now(),
            "created_at" => now(),
        ]);

        Comment::create([
            "user_id" => rand(1, 10),
            "post_id" => rand(1, 4),
            "content" => "¡Tengo que hacer un nuevo proyecto y me viene genial!",
            "published" => true,
            "published_at" => now(),
            "created_at" => now(),
        ]);

        Comment::create([
            "user_id" => rand(1, 10),
            "post_id" => rand(1, 4),
            "content" => "Muchas gracias por tu dedicación :)",
            "published" => true,
            "published_at" => now(),
            "created_at" => now(),
        ]);
    }
}
