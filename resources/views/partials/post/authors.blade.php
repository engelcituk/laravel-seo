<div class="px-8">
    <h2 class="mb-4 text-xl font-bold text-gray-700">Autores</h2>
    <div class="flex flex-col bg-white max-w-sm px-6 py-4 mx-auto rounded-lg shadow-md">
        <ul class="-mx-4">
            @forelse($authors as $author)
                <li class="flex items-center border-b-2 pb-2">
                    @include("partials.post.user_info", [
                        "user" => $author,
                        "userNameClass" => "text-gray-700 font-bold mx-1 hover:underline",
                        "published_at" => false,
                        "show_posts_count" => true,
                        "posts_count" => $author->posts_count,
                         "show_published_at" => false,
                    ])
                </li>
            @empty
                @include("components.alert-component", ["show" => true, "message" => "No hay autores que mostrar"])
            @endforelse
        </ul>
    </div>
</div>
