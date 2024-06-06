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
        <header class="w-full bg-slate-800 pt-42 py-52">
            <div class="max-w-7xl mx-auto">
                <h1 class="text-4xl text-center uppercase font-bold text-white">Choice Place!</h1>
                <div class="mt-12">
@foreach($fields as $field)
                    <div class="w-full rounded-2xl shadow-lg bg-[#b9f501] p-12 py-16 mt-12 grid grid-cols-1 sm:grid-cols-2 gap-8">
                        <div class="w-full bg-gray-400 rounded-lg">
                            <img src="{{ url('assets/images/'.$field->place->photo) }}" alt="{{ $field->place->name }}" class=" max-h-96 mx-auto">
                        </div>
                        <div>
                            <h2 class="text-3xl font-bold uppercase">{{ $field->place->name }}</h2>
                            <p class="mt-4">{{ $field->place->address }}</p>
                            <h3 class="text-2xl font-bold uppercase mt-4">Facilities</h3>
                            <div class="grid grid-cols-1">
@foreach(json_decode($field->place->facilities) as $facilities)
                                <div class="ml-4 font-bold">{{ $facilities }}</div>
@endforeach                                
                            </div>
                            <h3 class="mt-4 text-4xl font-bold">Rp {{ number_format($field->price_on_hour)}} / Hour</h3>
                            <x-a color="primary" href="{{ route('confirm',[$field->field_type,$field->id]) }}" class="mt-4">BOOK NOW</x-a>
                        </div>
                    </div>
@endforeach                
                </div>
            </div>
        </header>
        <main>
        </main>
    </body>
</html>
