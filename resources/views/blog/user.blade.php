<x-guest-layout>
    <div
        class="bg-white my-12 pb-6 w-full justify-center items-center overflow-hidden md:max-w-lg rounded-lg shadow-sm mx-auto"
        itemprop="author"
        itemscope
        itemtype="https://schema.org/Person"
    >
        <div class="relative h-40">
            <img
                class="absolute h-full w-full object-cover"
                src="https://images.unsplash.com/photo-1448932133140-b4045783ed9e?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80"
            />
        </div>
        <div
            class="relative shadow mx-auto h-24 w-24 -my-12 border-white rounded-full overflow-hidden border-4"
            itemprop="image"
            itemscope
            itemtype="https://schema.org/ImageObject"

        >
            <img
                alt="{{ $user->name }}"
                class="object-cover w-full h-full"
                src="{{ $user->avatar }}"
            />
        </div>
        <div class="mt-16">
            <h1 
                itemprop="name"
                class="text-lg text-center font-semibold">
                {{ $user->name }}
            </h1>
            <h2 class="text-sm text-gray-600 text-center">
                Posts publicados: {{ $user->posts_count }}
            </h2>
            <h2 class="text-sm text-gray-600 text-center">
                Comentarios publicados: {{ $user->comments_count }}
            </h2>
        </div>
        <div
            class="mt-6 pt-3 flex flex-wrap mx-6 border-t"
            itemprop="keywords"
        >

            @forelse($tags as $tag)
                <div class="text-xs mr-2 my-1 uppercase tracking-wider border px-2 text-indigo-600 border-indigo-600 hover:bg-indigo-600 hover:text-indigo-100 cursor-default">
                    <a href="{{ route("posts_tag", ["tag" => $tag]) }}">
                        {{ $tag->name }}
                    </a>
                </div>
            @empty
                vacio
            @endforelse
        </div>
    </div>
</x-guest-layout>
