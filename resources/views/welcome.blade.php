<x-client-layout>
        <header class="w-full h-[72em] bg-red-400 bg-center bg-no-repeat bg-cover" style="background-image:url('{{ url('assets/images/header-bg.png') }}')">
            <div class="w-full h-full bg-black/50 grid grid-cols-1 text-center content-center">
                <h1 class="font-black text-6xl text-[#b9f501] px-2">DISCOVER YOUR SPORT WITH US</h1>
            </div>
        </header>
        <main>
            <section id="about" class="w-full bg-red-400 bg-center bg-no-repeat bg-cover" style="background-image:url('{{ url('assets/images/bg.jpeg') }}')">
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
                        <div class="text-center">
                            <button type="button" class="bg-[#b9f501] relative p-4 rounded-lg hover:scale-105 transition-all font-bold inline-block mt-8 button-popup">HOW TO BOOK</button>
                        </div>
                    </div>
                </div>
            </section>
            <div class="hidden fixed w-full h-screen top-0 left-0 p-8 grid grid-cols-1 content-center shadow bg-black/80 popup">
                <div class="bg-[#b9f501] relative p-4 rounded-lg hover:scale-105 transition-all font-bold w-full max-w-4xl mx-auto text-2xl">
                    <p>1. Website ini hanya memiliki 3 cabang olahraga Futsal, Basket, Dan Badminton.</p>

                    <p>2. Setiap cabang olahraga memiliki 3 opsi GOR.</p>
                        
                    <p>3. Seluruh GOR yang ada di website ini sudah bekerjasama dengan kami.</p>
                        
                    <p>4. Pemesanan lapangan melalui website hanya bisa jam 12 siang - 9 malam, diluar jam tersebut pemesanan hanya bisa dilakukan langsung ke GOR bersangkutan.</p>
                        
                    <p>5. Bila ada keterlambatan waktu chek-in maka jam penyewaan tetap sesuai dengan yang dipesan atau tidak ada penambahan waktu.</p>
                        
                    <p>6. Pembayaran paling lambat kami terima 2 jam sebelum waktu chek-in, bila terlewat batas pembayaran maka pemesanan auto cancel.</p>
                        
                    <p>7. Bila lapangan sudah penuh atau ada kendala lain tim kami akan menghubungi via email.</p>
                        
                    <p>8. Bila terjadi salah pemesanan bisa menghubungi nomer telephone pengelola GOR.</p>
                        
                    <p>9. Saat chek-in harap menunjukan bukti pemesanan yang tertera di halaman OWN BOOK.</p>
                    </p>

                </div>
            </div>
            <section id="booking" class=" bg-zinc-950 border-8 border-[#b9f501]">
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