<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $place->name }}
        </h1>
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
            <div class="shadow bg-white rounded p-4 pb-8 mt-4">
                <img src="{{ url('assets/images/'.$place->photo) }}" alt="Image - {{ $place->name }}" class="mx-auto h-72">
                <div class="grid sm:grid-cols-2 grid-cols-1 gap-4">
                    <div class="mt-4">
                        <x-input-label class="uppercase" for="name">Name <span class="text-rose-800">*</span></x-input-label>
                        <x-text-input type="text" name="name" class="w-full" value="{{ $place->name}}" readonly/>
                    </div>
                    <div class="mt-4">
                        <x-input-label class="uppercase" for="maps">Maps (google maps link) <span class="text-rose-800">*</span></x-input-label>
                        <x-text-input type="text" name="maps" class="w-full" value="{{ $place->maps}}" readonly/>
                    </div>
                    <div class="mt-4">
                        <x-input-label class="uppercase" for="phone_number">Phone Number <span class="text-rose-800">*</span></x-input-label>
                        <x-text-input type="text" name="phone_number" class="w-full" value="{{ $place->phone_number}}" readonly/>
                    </div>
                    <div class="mt-4">
                        <x-input-label class="uppercase" for="address">Full Address <span class="text-rose-800">*</span></x-input-label>
                        <x-text-input type="text" name="address" class="w-full" value="{{ $place->address}}" readonly/>
                    </div>
                </div>
            </div>
            <div class="grid sm:grid-cols-3 gap-4">
                <div class="sm:col-span-2 shadow bg-white rounded p-4 pb-8 mt-4">
                    <h2 class="text-xl font-bold">Field</h2>
                    <div class="relative overflow-x-auto mt-4">
                        <table class="table-auto w-full">
                            <thead>
                                <tr>
                                    <th class="border p-2">Type</th>
                                    <th class="border p-2">Price / Hour</th>
                                    <th class="border p-2">Total Field</th>
                                    <th class="border p-2"></th>
                                </tr>
                            </thead>
                            <tbody>
@foreach($place->field as $field)
                                <tr>
                                    <td class="border p-2 text-center">{{ $field->field_type }}</td>
                                    <td class="border p-2 text-center">Rp {{ number_format($field->price_on_hour) }}</td>
                                    <td class="border p-2 text-center">
                                        
                                        <x-a href="{{ route('admin.place.field.total_action',[$place->code,$field->id,'min']) }}" color="warning" class="has-tooltip scale-90 mt-2 mx-4">-
                                            <span class='tooltip rounded shadow-lg p-1 px-2 bg-slate-700 -mt-24'>Decrease</span>
                                        </x-a>
                                        {{ $field->field_number }}
                                        <x-a href="{{ route('admin.place.field.total_action',[$place->code,$field->id,'plus']) }}" color="primary" class="has-tooltip scale-90 mt-2 mx-4">+
                                            <span class='tooltip rounded shadow-lg p-1 px-2 bg-slate-700 -mt-24'>Increase</span>
                                        </x-a>
                                    </td>
                                    <td class="border p-2 text-center">
    @if($field->deleted_at != NULL)
                                        <x-a href="#" color="success" class="has-tooltip mt-2">✓
                                            <span class='tooltip rounded shadow-lg p-1 px-2 bg-slate-700 -mt-24'>Reactive Field</span>
                                        </x-a>
    @else
                                        <x-a href="{{ route('admin.place.field.update',[$place->code,$field->id]) }}" color="danger" class="has-tooltip mt-2">✎
                                            <span class='tooltip rounded shadow-lg p-1 px-2 bg-slate-700 -mt-24'>Update Field</span>
                                        </x-a>
    @endif
                                    </td>
                                </tr>
@endforeach                                
                            </tbody>
                        </table>
                    </div>
                    <x-a href="{{ route('admin.place.field.create',$place->code) }}" color="primary" class="mt-4">Add new Field</x-a>
                </div>
                <div class="shadow bg-white rounded p-4 pb-8 mt-4">
                    <h2 class="text-xl font-bold">Order Log</h2>
                </div>
            </div>
            <div class="shadow bg-white rounded p-4 pb-6 mt-4">
                <x-a href="{{ route('admin.place.index') }}">Back</x-a>
                <x-a href="{{ route('admin.place.update',$place->code) }}" color="warning">Update</x-a>
            </div>
        </div>
    </div>
</x-app-layout>
