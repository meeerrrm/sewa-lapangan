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
                <a href="#" 
                 class="px-4 text-[#b9f501] after:transition-all after:content-[''] after:block after:my-1 after:bg-[#b9f501] after:w-full after:h-[2px] after:rounded-full after:scale-0 hover:after:scale-75">Home</a>
                <a href="#" 
                 class="px-4 text-[#b9f501] after:transition-all after:content-[''] after:block after:my-1 after:bg-[#b9f501] after:w-full after:h-[2px] after:rounded-full after:scale-0 hover:after:scale-75">About</a>
                <a href="#" 
                 class="px-4 text-[#b9f501] after:transition-all after:content-[''] after:block after:my-1 after:bg-[#b9f501] after:w-full after:h-[2px] after:rounded-full after:scale-0 hover:after:scale-75">Booking</a>
                <a href="#" 
                 class="px-4 text-[#b9f501] after:transition-all after:content-[''] after:block after:my-1 after:bg-[#b9f501] after:w-full after:h-[2px] after:rounded-full after:scale-0 hover:after:scale-75">Contact</a>
                <a href="#" 
                 class="px-4 text-[#b9f501] after:transition-all after:content-[''] after:block after:my-1 after:bg-[#b9f501] after:w-full after:h-[2px] after:rounded-full after:scale-0 hover:after:scale-75">Sign in</a>
                <a href="#" 
                 class="px-4 text-[#b9f501] after:transition-all after:content-[''] after:block after:my-1 after:bg-[#b9f501] after:w-full after:h-[2px] after:rounded-full after:scale-0 hover:after:scale-75">Sign up</a>
            </div>
        </nav>
        <header class="w-full h-[72em] bg-red-400 bg-center bg-no-repeat bg-cover" style="background-image:url('{{ url('assets/images/header-bg.png') }}')">
            <div class="w-full h-full bg-black/50 grid grid-cols-1 text-center content-center">
                <h1 class="font-black text-6xl text-[#b9f501] px-2">DISCOVER YOUR SPORT WITH US</h1>
            </div>
        </header>
        <main>
            <section id="why-us" class="w-full bg-red-400 bg-center bg-no-repeat bg-cover" style="background-image:url('{{ url('assets/images/bg.jpeg') }}')">
                <div class="w-full h-full bg-black/50">
                    <div class="max-w-7xl mx-auto py-24 pb-32">
                        <h2 class="uppercase font-bold text-7xl text-white">why us?</h2>
                        <div class="grid grid-cols-4 gap-4 pt-24">
                            <div class="bg-[#b9f501] relative p-4 rounded-lg hover:scale-105 transition-all">
                                <div class="h-24 -top-16 relative">
                                    <img src="{{ url('assets/images/phone.png') }}" alt="Easy Booking System">
                                </div>
                                <h3 class="font-bold text-4xl">Easy Booking System</h3>
                            </div>
                            <div class="bg-[#b9f501] relative p-4 rounded-lg hover:scale-105 transition-all">
                                <div class="h-24 -top-16 relative">
                                    <img src="{{ url('assets/images/star.png') }}" alt=" Top-notch Facilities">
                                </div>
                                <h3 class="font-bold text-4xl">Top-notch Facilities</h3>
                            </div>
                            <div class="bg-[#b9f501] relative p-4 rounded-lg hover:scale-105 transition-all">
                                <div class="h-24 -top-16 relative">
                                    <img src="{{ url('assets/images/coin.png') }}" alt=" Affordable Pricing">
                                </div>
                                <h3 class="font-bold text-4xl">Affordable Pricing</h3>
                            </div>
                            <div class="bg-[#b9f501] relative p-4 rounded-lg hover:scale-105 transition-all">
                                <div class="h-24 -top-16 relative">
                                    <img src="{{ url('assets/images/gear.png') }}" alt="Diverse Court Options">
                                </div>
                                <h3 class="font-bold text-4xl">Diverse Court Options</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="choose-sports" class=" bg-zinc-950 border-8 border-[#b9f501]">
                <div class="max-w-7xl mx-auto py-24 pb-32">
                    <h2 class="uppercase font-bold text-7xl text-white">Choose Your Sport</h2>
                    <div class="grid grid-cols-3 gap-8 pt-24">
                        <a href="#" class=" transition-all hover:scale-105">
                            <img src="{{ url('assets/images/basket.png') }}" alt="Basket Ball">
                        </a>
                        <a href="#" class=" transition-all hover:scale-105">
                            <img src="{{ url('assets/images/futsal.png') }}" alt="Basket Ball">
                        </a>
                        <a href="#" class=" transition-all hover:scale-105">
                            <img src="{{ url('assets/images/badminton.png') }}" alt="Basket Ball">
                        </a>
                    </div>
                </div>
            </section>
        </main>
        <footer class=" bg-gradient-to-b	from-[#b9f501] to-[#1d2700]">
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
