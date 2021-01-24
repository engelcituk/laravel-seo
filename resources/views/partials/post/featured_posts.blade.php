<div class="mt-10 px-8">
    <h2 class="mb-4 text-xl font-bold text-gray-700">Posts destacados</h2>
    @forelse($featuredPosts as $featuredPost)
        <div class="flex flex-col bg-white px-8 py-6 max-w-sm mx-auto rounded-lg shadow-md border-b-2">
            <div class="flex justify-center items-center">
                @foreach($featuredPost->categories as $category)
                    @include("partials.post.category_link", ["category" => $category])
                @endforeach
            </div>
            <div class="mt-4">
                <h3>
                    @include("partials.post.post_link", ["post" => $featuredPost, "class" => "text-lg text-gray-700 font-bold hover:underline"])
                </h3>
            </div>
            <div class="flex justify-between items-center mt-4">
                <div class="flex items-center">
                    @include("partials.post.user_info", [
                        "user" => $featuredPost->user,
                        "userNameClass" => "text-gray-700 text-sm font-bold mx-1 hover:underline",
                        "published_at" => false,
                        "show_posts_count" => false,
                        "show_published_at" => true,
                        "published_at" => $featuredPost->published_at
                    ])
                </div>
            </div>
        </div>
    @empty
        @include("components.alert-component", ["show" => true, "message" => "No hay posts destacados que mostrar"])
    @endforelse
</div>
