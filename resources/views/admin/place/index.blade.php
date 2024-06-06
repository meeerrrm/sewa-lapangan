<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Place') }}
        </h2>
        <p>Place Management</p>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
@if(Session::has('success'))
            <p
                x-data="{ show: true }"
                x-show="show"
                x-transition
                x-init="setTimeout(() => show = false, 3000)"
                class="bg-lime-500 text-white py-4 px-8 block rounded-lg shadow mb-4"
            >{!! Session::get('success') !!}</p>
@endif
@if(Session::has('error'))
            <p
                x-data="{ show: true }"
                x-show="show"
                x-transition
                x-init="setTimeout(() => show = false, 3000)"
                class="bg-rose-500 text-white py-4 px-8 block rounded-lg shadow mb-4"
            >{!! Session::get('error') !!}</p>
@endif
            <div class="mt-4">
                <div class="shadow bg-white rounded p-4 flex justify-between gap-2">
                    <x-a href="{{ route('admin.place.create') }}" color="primary">Create</x-a>
                </div>
            </div>
            <div class="shadow bg-white rounded p-4 mt-4">
                <div class="relative overflow-x-auto">
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="border uppercase px-4 py-2">Name</th>
                                <th class="border uppercase px-4 py-2">Address</th>
                                <th class="border uppercase px-4 py-2">Rating</th>
                                <th class="border uppercase px-4 py-2">Field Category</th>
                                <th class="border uppercase px-4 py-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
@foreach($places as $place)                            
                            <tr>
                                <td class="border text-center px-4 py-2">{{ $place->name }}</td>
                                <td class="border text-center px-4 py-2">{{ $place->address }} </td>
                                <td class="border text-center px-4 py-2">0</td>
                                <td class="border text-center px-4 py-2">
@foreach($place->field as $field)
                                    {{ $field->field_type }} <br>
@endforeach                                    
                                </td>
                                <td class="border text-center px-4 py-2">
                                    <x-a href="{{ route('admin.place.show',$place->code) }}" color="success">Detail</x-a>
                                </td>
                            </tr>
@endforeach                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
