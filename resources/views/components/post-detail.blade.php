<article class="flex flex-col shadow my-4 w-full">
    <!-- Article Image -->
    <a data-lightbox="thumbnail" data-title="{{ $post->title }}" href="{{ $post->getThumbnail() }}"
        class="hover:opacity-75">
        <img src="{{ $post->getThumbnail() }}" />
    </a>
    <div class="bg-white flex flex-col justify-start p-6">
        <div class="flex gap-4">
            @foreach ($post->categories as $category)
                <a href="#" class="text-green-700 text-sm font-bold uppercase pb-4">
                    {{ $category->title }}
                </a>
            @endforeach
        </div>
        <h1 class="text-4xl font-bold mb-5">{{ $post->title }}</h1>
        <p href="#" class="text-sm pb-3">
            By <a href="#" class="font-semibold hover:text-gray-800">{{ $post->user->name }}</a>,
            Published
            on {{ $post->getFormattedDate() }}
        </p>
        <div class="prose">
            {!! $post->body !!}
        </div>
        <div>
            {!! $post->youtube_link !!}
        </div>
    </div>
</article>
