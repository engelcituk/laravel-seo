<x-guest-layout>
    <div class="overflow-x-hidden">
        <div class="px-6 py-8">
            <div class="flex justify-between container mx-auto">
                <div class="w-full lg:w-8/12">
                    @include("partials.post.show_post")
                </div>

                {{-- SIDEBAR --}}
                <div class="-mx-8 w-4/12 hidden lg:block">
                    @include("partials.post.related_posts")
                </div>
                {{-- ./SIDEBAR --}}
            </div>
        </div>
    </div>
</x-guest-layout>
