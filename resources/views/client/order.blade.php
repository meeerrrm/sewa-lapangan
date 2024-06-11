<x-client-layout>
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
</x-client-layout>
