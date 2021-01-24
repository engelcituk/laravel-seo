<div class="bg-white shadow-2xl rounded-lg mb-6 tracking-wide mt-10">
    <div class="md:flex-shrink-0" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
        <img src="{{ $post->image }}" alt="{{ $post->title }}" class="w-full h-72 rounded-lg rounded-b-none">
    </div>
    <div class="px-4 py-2 mt-2">
        <h1 class="font-bold text-2xl text-gray-800 tracking-normal">{{ $post->title }}</h1>
        <p class="text-md text-gray-700 px-2 mr-1 -ml-2">
            {{ $post->content }}
        </p>
        <div class="flex items-center justify-between mt-2 mx-6">
            <a href="#" class="text-blue-500 text-sm -ml-3">&nbsp;</a>
            <a href="#" class="flex text-gray-700"  itemprop="discussionUrl">
                <svg fill="none" viewBox="0 0 24 24" class="w-6 h-6 text-blue-500" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                </svg>

                <span itemprop="interactionStatistic" itemscope itemtype="https://schema.org/InteractionCounter">
                    <meta itemprop="interactionType" content="https://schema.org/CommentAction">
                    <span itemprop="userInteractionCount">{{ $post->comments_count }}</span>
                </span>
            </a>
        </div>
        <div class="author flex items-center -ml-3 my-3">
            @include("partials.post.user_info", [
                "user" => $post->user,
                "userNameClass" => "text-gray-600 text-sm font-bold mx-1 hover:underline",
                "show_posts_count" => false,
                "show_published_at" => true,
                "published_at" => $post->published_at
            ])
        </div>
    </div>
</div>

<h2 class="text-xl font-bold text-gray-700 md:text-2xl">Comentarios</h2>
@forelse($post->comments as $comment)
    <!--comment-->
    <div
        itemscope
        itemtype="https://schema.org/Comment"
        class="bg-white rounded-lg p-3  flex flex-col justify-center items-center md:items-start shadow-lg mb-4"
    >
        <div class="flex flex-row justify-center mr-2">
            @include("partials.post.user_info", [
                "user" => $comment->user,
                "userNameClass" => "text-gray-600 text-sm font-bold mx-1 hover:underline",
                "show_posts_count" => false,
                "show_published_at" => true,
                "published_at" => $comment->published_at
            ])
        </div>
        <p
            itemprop="text"
            style="width: 90%"
            class="text-gray-600 text-lg mx-5 my-5 text-center md:text-left"
        >
            {{ $comment->content }}
        </p>
    </div>
    <!--comment end-->
@empty
    @include("components.alert-component", ["show" => true, "message" => "No hay comentarios todavía"])
@endforelse
