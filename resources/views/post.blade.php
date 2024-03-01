<x-app-layout>
    <x-slot:title>
        {{ $post->title }}
    </x-slot>
    @section('metaAuthor', e($post->user->name))
    @section('metaDescription', e($post->shortBody()))
    <!-- Post Section -->
    <section class="w-full md:w-2/3 flex flex-col items-center px-3">
        <x-post-detail :post="$post" />

        <div class="w-full flex pt-6">
            @if ($prev)
                <a href="{{ route('post', $prev) }}" class="w-1/2 bg-white shadow hover:shadow-md text-left p-6 flex-1">
                    <p class="text-lg text-blue-800 font-bold flex items-center">
                        <i class="fas fa-arrow-left pr-1"></i> Previous
                    </p>
                    <p class="pt-2">{{ $prev->title }}</p>
                </a>
            @endif

            @if ($next)
                <a href="{{ route('post', $next) }}" class="w-1/2 bg-white shadow hover:shadow-md text-right p-6 flex-1">
                    <p class="text-lg text-blue-800 font-bold flex items-center justify-end">
                        Next <i class="fas fa-arrow-right pl-1"></i>
                    </p>
                    <p class="pt-2">{{ $next->title }}</p>
                </a>
            @endif
        </div>

        <div
            class="w-full flex flex-col space-x-4 text-center md:text-left md:flex-row shadow bg-white mt-10 mb-10 p-6">
            <div class="w-full md:w-1/5 flex justify-center md:justify-start pb-4">
                <img src="https://source.unsplash.com/collection/1346951/150x150?sig=1"
                    class="rounded-full shadow h-32 w-32" />
            </div>
            <div class="flex-1 flex flex-col justify-center md:justify-start">
                <p class="font-semibold text-2xl">David</p>
                <p class="pt-2">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Curabitur vel neque non libero suscipit suscipit eu eu urna.
                </p>
                <div class="flex items-center justify-center md:justify-start text-2xl no-underline text-blue-800 pt-4">
                    <a class="" href="#">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a class="pl-4" href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="pl-4" href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="pl-4" href="#">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <x-sidebar />
</x-app-layout>
