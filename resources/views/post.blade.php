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
                    <p class="text-lg text-green-800 font-bold flex items-center">
                        <i class="fas fa-arrow-left pr-1"></i> Previous
                    </p>
                    <p class="pt-2">{{ $prev->title }}</p>
                </a>
            @endif

            @if ($next)
                <a href="{{ route('post', $next) }}" class="w-1/2 bg-white shadow hover:shadow-md text-right p-6 flex-1">
                    <p class="text-lg text-green-800 font-bold flex items-center justify-end">
                        Next <i class="fas fa-arrow-right pl-1"></i>
                    </p>
                    <p class="pt-2">{{ $next->title }}</p>
                </a>
            @endif
        </div>

    </section>

    <x-sidebar />
</x-app-layout>
