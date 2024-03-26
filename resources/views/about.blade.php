<x-app-layout>

    <section class="w-full flex flex-col items-center px-3">
        <article class="w-full flex flex-col shadow my-4">
            <!-- Article Image -->
            <a href="#" class="hover:opacity-75">
                <img src="/storage/{{ $widget->image }}" class="w-full" /> 
            </a>
            <div class="bg-white flex flex-col justify-start p-6">
                <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">
                    {{ $widget->title }}
                </a>
                <div>
                    {!! $widget->content !!}
                </div>
                <div class="flex flex-col mx-auto text-center pt-5 gap-3">
                    <h1 class="text-xl font-bold">Cek Sosial Media Kami</h1>
                    <div class="flex justify-between gap-4 mx-auto">
                        <div class="hover:scale-125 transition-transform duration-300">
                            <a href="https://www.instagram.com/sport_is_number_one_2024?igsh=dmZnYjE5cXpiYjkw&utm_source=qr" target="_blank">
                                <img src="{{URL::asset('images/instagram.png')}}" alt="" class="w-10">
                            </a>
                        </div>
                        <div>
                            <a href="http://www.tiktok.com/@sport.is.number.one" target="_blank">
                                <img src="{{URL::asset('images/tik-tok.png')}}" alt="" class="w-10">
                            </a>
                        </div>
                        <div>
                            <a href="https://wa.me/+6283879822568" target="_blank">
                                <img src="{{URL::asset('images/whatsapp.png')}}" alt="" class="w-10">
                            </a>
                        </div>
                        <div>
                            <a href="https://www.youtube.com/@dandielfanni1239" target="_blank">
                                <img src="{{URL::asset('images/youtube.png')}}" alt="" class="w-10">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>


</x-app-layout>