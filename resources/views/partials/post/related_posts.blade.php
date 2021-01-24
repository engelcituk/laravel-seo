<div class="mt-10 px-8">
    <h2 class="mb-4 text-xl font-bold text-gray-700">Posts relacionados</h2>
    @forelse($relatedPosts as $relatedPost)
        <div class="flex flex-col bg-white px-8 py-6 max-w-sm mx-auto rounded-lg shadow-md">
            <div class="flex justify-center items-center">
                @foreach($relatedPost->categories as $category)
                    @include("partials.post.category_link", ["category" => $category])
                @endforeach
            </div>
            <div class="mt-4">
                @include("partials.post.post_link", ["post" => $relatedPost, "class" => "text-lg text-gray-700 font-medium hover:underline"])
            </div>
            <div class="flex justify-between items-center mt-4">
                <div class="flex items-center">
                    @include("partials.post.user_info", [
                        "user" => $relatedPost->user,
                        "userNameClass" => "text-gray-700 text-sm font-bold mx-1 hover:underline",
                        "published_at" => false,
                        "show_posts_count" => false,
                        "show_published_at" => true,
                        "published_at" => $relatedPost->published_at
                    ])
                </div>
            </div>
        </div>
    @empty
        @include("components.alert-component", ["show" => true, "message" => "No hay posts relacionados que mostrar"])
    @endforelse
</div>
