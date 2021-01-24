<div
    class="text-gray-700 font-bold hover:underline"
    itemprop="author"
    itemscope
    itemtype="http://schema.org/Person"
>
    <a href="{{ route("user", ["user" => $user]) }}" itemprop="url" class="flex items-center">
        <div
            itemprop="image"
            itemscope
            itemtype="https://schema.org/ImageObject"
        >
            <img
                src="{{ $user->avatar }}"
                alt="{{ $user->name }}"
                class="mx-4 w-10 h-10 object-cover rounded-full hidden sm:block"
            />
        </div>
        <div itemprop="name" class="{{ $userNameClass }}">{{ $user->name }}</div>
        @if($show_posts_count)
            <span class="text-gray-700 text-sm font-light">({{ $posts_count }})</span>
        @endif
        @if($show_published_at)
            <span class="font-light text-sm text-gray-600" itemprop="datePublished">{{ $published_at }}</span>
        @endif
    </a>
</div>
