<?php

use App\Models\Post;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained()->onDelete("cascade");
            $table->string("image", 120)->unique();
            $table->string("title", 100)->unique();
            $table->string("meta_title", 120)->unique();
            $table->string("slug", 80)->unique();
            $table->text("content");
            $table->string("excerpt");
            $table->boolean("featured")->default(false);
            $table->enum("type", [Post::POST, Post::PAGE])->default(Post::POST);
            $table->boolean("published")->default(true);
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
