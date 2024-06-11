<x-client-layout>
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
                        <a href="{{ route('order','Basket') }}" class=" transition-all hover:scale-105">
                            <img src="{{ url('assets/images/basket.png') }}" alt="Basket Ball">
                        </a>
                        <a href="{{ route('order','Futsal') }}" class=" transition-all hover:scale-105">
                            <img src="{{ url('assets/images/futsal.png') }}" alt="Basket Ball">
                        </a>
                        <a href="{{ route('order','Badminton') }}" class=" transition-all hover:scale-105">
                            <img src="{{ url('assets/images/badminton.png') }}" alt="Basket Ball">
                        </a>
                    </div>
                </div>
            </section>
        </main>
</x-client-layout>