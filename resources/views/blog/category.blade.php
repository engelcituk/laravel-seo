<x-guest-layout>
    <div class="overflow-x-hidden">
        <div class="px-6 py-8">
            <div class="flex justify-between container mx-auto">
                <div class="w-full lg:w-full">
                    <div class="flex items-center justify-between">
                        <h1 class="text-xl font-bold text-gray-700 md:text-2xl">Posts de la categoría {{ $category->name }}</h1>
                    </div>

                    <div class="mt-5 mb-5">
                        @forelse($category->posts as $post)
                            @include("partials.post.single_post", ["fullWidth" => "max-w-12xl"])
                        @empty
                            @include("components.alert-component", ["show" => true, "message" => "No hay posts que mostrar"])
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
