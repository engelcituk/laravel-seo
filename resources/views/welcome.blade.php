<x-guest-layout>
    <div class="py-12">
        <div class="px-20 py-6">
            <!-- hero section -->
            <div class="lg:2/6 xl:w-2/4 lg:ml-16 text-left">
                <h1 class="text-5xl font-semibold text-gray-900 leading-none">{{ $title }}</h1>
                <div class="mt-6 text-xl font-light text-true-gray-500 antialiased">{{ $description }}</div>
                <br />
                <div class="flex justify-center pb-3 text-grey-dark text-xl">
                    <div class="text-center mr-3 border-r pr-3">
                        <h2>{{ $posts }}</h2>
                        <span>Posts</span>
                    </div>
                    <div class="text-center mr-3 border-r pr-3">
                        <h2>{{ $authors }}</h2>
                        <span>Autores</span>
                    </div>
                    <div class="text-center mr-3 border-r pr-3">
                        <h2>{{ $comments }}</h2>
                        <span>Comentarios</span>
                    </div>
                    <div class="text-center mr-3 border-r pr-3">
                        <h2>{{ $categories }}</h2>
                        <span>Categorías</span>
                    </div>
                    <div class="text-center">
                        <h2>{{ $tags }}</h2>
                        <span>Etiquetas</span>
                    </div>
                </div>
                <div class="flex justify-center pb-3 text-grey-dark">
                    <a href="{{ route("blog.index") }}" class="mt-10 px-8 py-4 rounded-full font-normal tracking-wide bg-gradient-to-b from-blue-600 to-blue-700 text-white outline-none focus:outline-none hover:shadow-lg hover:from-blue-700 transition duration-200 ease-in-out">
                        Ir al Blog
                    </a>
                </div>
            </div>
            <!-- /hero section -->
        </div>
    </div>
</x-guest-layout>
