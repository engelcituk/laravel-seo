<div class="mt-6" itemscope itemtype="https://schema.org/BlogPosting">
    <div class="{{ $fullWidth ?? "max-w-4xl" }} px-10 py-6 bg-white rounded-lg shadow-md">
        <div class="flex justify-between items-center">
            <span class="font-light text-gray-600" itemprop="datePublished">
                {{ $post->published_at }}
            </span>
            <div class="items-end">
                @foreach($post->categories as $category)
                    @include("partials.post.category_link", ["category" => $category])
                @endforeach
            </div>
        </div>
        <div class="mt-2">
            <h2 itemprop="name headline" class="mb-4">
                @include("partials.post.post_link", ["post" => $post, "class" => "text-2xl text-gray-700 font-bold hover:underline"])
            </h2>
            <p class="mt-2 text-gray-600">
                {{ $post->excerpt }}
            </p>
        </div>
        <div class="flex justify-between items-center mt-4">
            &nbsp;
            @include("partials.post.user_info", [
                "user" => $post->user,
                "userNameClass" => "text-gray-700 font-bold hover:underline",
                "show_published_at" => false,
                "show_posts_count" => false,
            ])
        </div>
    </div>
</div>
