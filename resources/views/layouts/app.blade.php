
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Sino Home Exercise' }}</title>
    <meta name="author" content="@yield('metaAuthor')">
    <meta name="description" content="@yield('metaDescription')">

    <link href="{{URL::asset('css/filament/filament/app.css')}}" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{URL::asset('images/logo.png')}}">
    
    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
        
        .font-family-karla {
            font-family: karla;
        }
    </style>

    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <!-- Lightbox2 -->
    <link href="{{URL::asset('lightbox2/dist/css/lightbox.min.css')}}" rel="stylesheet"/>
    <script src="{{URL::asset('lightbox2/dist/js/lightbox-plus-jquery.min.js')}}"></script>
</head>
<body class="bg-gray-50 bg-white font-family-karla">
    
        <!-- Topic Nav -->
        <nav class="w-full py-4 bg-white  shadow  text-green-400 flex items-center flex-col sticky top-0 z-10 backdrop-filter backdrop-blur-lg bg-opacity-30 lg:justify-between lg:flex-row" x-data="{ open: false }">
            <div class="hidden lg:block">
                <img src="{{URL::asset('images/logo.png')}}" alt="logo" class="w-24" />
            </div>
            <div class="block sm:hidden">
                <a
                    href="#"
                    class="block md:hidden text-base font-bold uppercase text-center flex justify-center items-center"
                    @click="open = !open"
                >
                    Topics <i :class="open ? 'fa-chevron-down': 'fa-chevron-up'" class="fas ml-2"></i>
                </a>
            </div>
            <div :class="open ? 'block': 'hidden'" class="w-full flex-grow sm:flex sm:items-center sm:w-auto">
                <div class="w-full container ml-auto flex flex-col sm:flex-row  items-center justify-end text-sm font-semibold uppercase mt-0 px-6 py-2">
                    <a href="{{route('home')}}" class=" px-2 text-center hover:bg-green-400 hover:text-white  rounded py-2 ">Home</a>
                    @foreach($categories as $category)
                        <a href="{{route('by-category', $category)}}" class="px-2 text-center hover:bg-green-400 hover:text-white  rounded py-2   ">{{$category->title}}</a>    
                    @endforeach
                    <a href="{{ route('about-us') }}" class="px-2 text-center hover:bg-green-400 hover:text-white  rounded py-2  ">About us</a>
                </div>
            </div>
        </nav>

    <!-- Text Header -->
    <header class="w-full container mx-auto">
        <div class="flex flex-col items-center py-12">
            <a class="text-center font-bold text-gray-800 uppercase hover:text-gray-700 text-5xl" href="/">
                Sino Home Exercise
            </a>
            <p class="text-lg text-gray-600">
                {{ \App\Models\TextWidget::getTitle('header') }}
            </p>
        </div>
    </header>


    <div class="container mx-auto flex flex-wrap py-6">

        {{ $slot }}

    </div>

    <footer class="w-full border-t bg-green-500 text-white">
        <div class="w-full container mx-auto flex flex-col items-center">
            <div class="flex flex-col md:flex-row text-center md:text-left md:justify-between py-6">
                <a href="#" class="uppercase px-3">About Us</a>
                <a href="#" class="uppercase px-3">Privacy Policy</a>
                <a href="#" class="uppercase px-3">Terms & Conditions</a>
                <a href="#" class="uppercase px-3">Contact Us</a>
            </div>
            <div class="uppercase pb-6">&copy; Sino Home Exercise</div>
        </div>
    </footer>

    <script>
        lightbox.option({
            'resizeDuration': 200,
            'disableScrolling': true,
        })
        
    </script>
</body>
</html>