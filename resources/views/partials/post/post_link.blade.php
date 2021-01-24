<a
    itemprop="mainEntityOfPage url"
    href="{{ route("blog.show", ["post" => $post]) }}"
    class="{{ $class ?? 'text-2xl text-gray-700 font-bold hover:underline' }}"
>
    {{ $post->title }}
</a>
