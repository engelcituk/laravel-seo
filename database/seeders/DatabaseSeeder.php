<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call(TagsSeeder::class);
       $this->call(CategoriesSeeder::class);
       User::factory(10)->create();
       $this->call(PostSeeder::class);
       $this->call(CommentSeeder::class);
    }
}
