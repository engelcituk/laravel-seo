<x-guest-layout>
    <div class="overflow-x-hidden">
        <div class="px-6 py-8">
            <div class="flex justify-between container mx-auto">
                <div class="w-full lg:w-8/12">
                    <div class="flex items-center justify-between">
                        <h1 class="text-xl font-bold text-gray-700 md:text-2xl">Blog Posts</h1>
                    </div>

                    <div class="mt-5 mb-5">
                        @forelse($posts as $post)
                            @include("partials.post.single_post")
                        @empty
                            @include("components.alert-component", ["show" => true, "message" => "No hay posts que mostrar"])
                        @endforelse
                    </div>

                    {{-- PAGINATION --}}
                    @if($posts->count())
                        {{ $posts->links() }}
                    @endif
                    {{-- ./PAGINATION --}}
                </div>

                {{-- SIDEBAR --}}
                <div class="-mx-8 mt-3 w-4/12 hidden lg:block">

                    @include("partials.post.authors")

                    @include("partials.post.categories")

                    @include("partials.post.featured_posts")

                    @include("partials.post.tags")
                </div>
                {{-- ./SIDEBAR --}}
            </div>
        </div>
    </div>
</x-guest-layout>
