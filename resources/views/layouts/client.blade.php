<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-Ubuntu antialiased ">
        <nav class="w-full bg-black px-8 py-4 flex justify-around fixed z-50">
            <div class=" text-white">
                <div class="p-2 px-8 bg-[#b9f501] rounded-full font-bold text-xl">
                    <h1>Lets <span class=" text-black uppercase">Sports</span></h1>
                </div>
            </div>
            <div class="p-2 px-8 relative flex text-white text-lg">
                <a href="{{ url('/') }}#" 
                class="px-4 text-[#b9f501] after:transition-all after:content-[''] after:block after:my-1 after:bg-[#b9f501] after:w-full after:h-[2px] after:rounded-full after:scale-0 hover:after:scale-75">Home</a>
               <a href="{{ url('/') }}#about" 
                class="px-4 text-[#b9f501] after:transition-all after:content-[''] after:block after:my-1 after:bg-[#b9f501] after:w-full after:h-[2px] after:rounded-full after:scale-0 hover:after:scale-75">About</a>
               <a href="{{ url('/') }}#booking" 
                class="px-4 text-[#b9f501] after:transition-all after:content-[''] after:block after:my-1 after:bg-[#b9f501] after:w-full after:h-[2px] after:rounded-full after:scale-0 hover:after:scale-75">Booking</a>
               <a href="{{ url('/') }}#contact" 
                class="px-4 text-[#b9f501] after:transition-all after:content-[''] after:block after:my-1 after:bg-[#b9f501] after:w-full after:h-[2px] after:rounded-full after:scale-0 hover:after:scale-75">Contact</a>  
@if(Auth::check())
    @if(Auth::user()->role == "Client")
                <a href="{{ route('trx') }}" 
                 class="px-4 text-[#b9f501] after:transition-all after:content-[''] after:block after:my-1 after:bg-[#b9f501] after:w-full after:h-[2px] after:rounded-full after:scale-0 hover:after:scale-75">Own Book</a>
                <form class="p-0 h-0" method="POST" action="{{ route('logout') }}">@csrf
                <a href="{{ route('logout') }}" 
                 class="px-4 text-[#b9f501] after:transition-all after:content-[''] after:block after:my-1 after:bg-[#b9f501] after:w-full after:h-[2px] after:rounded-full after:scale-0 hover:after:scale-75"
                 onclick="event.preventDefault();
                 this.closest('form').submit();">Logout</a>
                </form>
    @elseif(Auth::user()->role == "Admin")
                <a href="{{ route('dashboard') }}" 
                 class="px-4 text-[#b9f501] after:transition-all after:content-[''] after:block after:my-1 after:bg-[#b9f501] after:w-full after:h-[2px] after:rounded-full after:scale-0 hover:after:scale-75">Dashboard</a>
    @endif
@else
                <a href="{{ route('login') }}" 
                 class="px-4 text-[#b9f501] after:transition-all after:content-[''] after:block after:my-1 after:bg-[#b9f501] after:w-full after:h-[2px] after:rounded-full after:scale-0 hover:after:scale-75">Sign in</a>
                <a href="{{ route('register') }}" 
                 class="px-4 text-[#b9f501] after:transition-all after:content-[''] after:block after:my-1 after:bg-[#b9f501] after:w-full after:h-[2px] after:rounded-full after:scale-0 hover:after:scale-75">Sign up</a>    
@endif                
            </div>
        </nav>
        {{ $slot }}
        <footer id="contact" class=" bg-gradient-to-b from-[#b9f501] to-[#1d2700]">
            <div class="max-w-7xl mx-auto py-12 pb-24">
                <div class="grid grid-cols-3 gap-8">
                    <div>
                        <h3 class="text-4xl font-bold">Lets SPORTS</h3>
                        <p class="text-lg">adalah platform digital untuk melakukan proses penyewaan lapangan secara daring.</p>
                        <div class="text-2xl mt-8">
                            <a class="mr-2 hover:text-blue-400" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-2 hover:text-blue-400" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="mx-2 hover:text-blue-400" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="mx-2 hover:text-blue-400" href="#"><i class="fab fa-github"></i></a>
                            <a class="ml-2 hover:text-blue-400" href="#"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="text-center">
                        <h3 class="text-4xl font-bold">Company</h3>
                        <div>
                        <a href="#" 
                        class="block hover:text-blue-600 mt-4">Home</a>
                        <a href="#" 
                        class="block hover:text-blue-600 mt-2">About</a>
                        <a href="#" 
                        class="block hover:text-blue-600 mt-2">Booking</a>
                        <a href="#" 
                        class="block hover:text-blue-600 mt-2">Contact</a>
                        <a href="#" 
                        class="block hover:text-blue-600 mt-2">Sign in</a>
                        <a href="#" 
                        class="block hover:text-blue-600 mt-2">Sign up</a>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="#" class="p-4 px-8 bg-black text-[#b9f501] mt-4 ">Booking Now</a>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
