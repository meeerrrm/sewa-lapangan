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
        <header class="w-full h-screen bg-slate-800 pt-42 py-52">
            <div class="max-w-7xl mx-auto">
                <h1 class="text-4xl text-center uppercase font-bold text-white">Payment</h1>
                <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="w-full rounded shadow-lg bg-[#b9f501] p-12 mt-12 grid grid-cols-1 gap-8">
                        <div class="w-full bg-gray-400 rounded-lg">
                            <img src="{{ url('assets/images/'.$trx->place->photo) }}" alt="{{ $trx->place->name }}" class=" max-h-96 mx-auto">
                        </div>
                        <div>
                            <h2 class="text-3xl font-bold uppercase">{{ $trx->place->name }}</h2>
                            <p class="mt-4">{{ $trx->place->address }}</p>
                            <h3 class="text-2xl font-bold uppercase mt-4">Facilities</h3>
                            <div class="grid grid-cols-1">
@foreach(json_decode($trx->place->facilities) as $facilities)
                                <div class="ml-4 font-bold">{{ $facilities }}</div>
@endforeach                                
                            </div>
                        </div>
                    </div>
                    <form method="POST" class="w-full rounded shadow-lg bg-[#b9f501] p-12 mt-12" enctype="multipart/form-data">
                        @csrf
                        
                        <h2 class="text-3xl text-center uppercase font-bold">Order Detail</h2>
                        <div class="mt-2">
                            <label for="">Date</label>
                            <div class="flex">
                                <input type="date" class="block w-full rounded border-none" readonly value="{{ explode(' ',$trx->start)[0] }}">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="mt-2">
                                <label for="">Check-in</label>
                                <input type="time" class="block w-full rounded border-none" readonly value="{{ explode(' ',$trx->start)[1] }}">
                            </div>
                            <div class="mt-2">
                                <label for="">Total Rental Time</label>
                                <input type="number" class="block w-full rounded border-none" readonly value="{{ $trx->qty }}">
                            </div>
                        </div>
                        <div class="mt-4">
                            <label for="">Price / Hour</label>
                            <input type="text" class="block w-full rounded border-none" readonly value="Rp {{ number_format($trx->price) }}">
                        </div>
                        <div class="mt-4">
                            <label for="">Total Price</label>
                            <input type="text" class="block w-full rounded border-none" readonly value="Rp {{ number_format($trx->total) }}">
                        </div>
                        <div class="mt-4">
                            <label for="">Pay to:</label>
                            <input type="text" class="block w-full rounded border-none" readonly value="BCA: 089524863 a/n Lets Sports">
                        </div>
                        <div class="mt-4">
                            <label for="">Proof of Payment</label>
                            <input type="file" name="photo" class="block w-full rounded border-none" required>
                        </div>
                        <div class="mt-4">
                            <x-button color="secondary">Pay</x-button>
                        </div>
                    </form>
                </div>
            </div>
        </header>
    </body>
</html>
