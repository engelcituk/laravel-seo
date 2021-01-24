<div class="mt-10 px-8">
    <h2 class="mb-4 text-xl font-bold text-gray-700">Etiquetas</h2>
    <div class="flex flex-col bg-white px-4 py-6 max-w-sm mx-auto rounded-lg shadow-md">
        <ul itemprop="keywords">
            @forelse($tags as $tag)
                <li>
                    <a href="{{ route("posts_tag", ["tag" => $tag]) }}" class="text-gray-700 font-bold mx-1 hover:text-gray-600 hover:underline">
                        - {{ $tag->name }}
                        <span class="text-gray-700 text-sm font-light">
                            ({{ $tag->posts_count }})
                        </span>
                    </a>
                </li>
            @empty
                @include("components.alert-component", ["show" => true, "message" => "No hay etiquetas que mostrar"])
            @endforelse
        </ul>
    </div>
</div>
