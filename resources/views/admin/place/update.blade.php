<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Place') }}
        </h2>
        <p>Place Management</p>
    </x-slot>

    <div class="py-12">
        <form enctype="multipart/form-data" method="post" class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @csrf
            @method('put')
            @if($errors->any())
            <div class="shadow bg-white rounded p-4 px-6 mt-4">
            {!! implode('', $errors->all('<div>:message</div>')) !!}
            </div>
            @endif

            <div class="shadow bg-white rounded p-4 px-6 mt-4">
                <h2 class="uppercase font-bold">Place Data</h2>
                <div class="grid sm:grid-cols-2 grid-cols-1 gap-4">
                    <div class="mt-4">
                        <x-input-label class="uppercase" for="name">Name <span class="text-rose-800">*</span></x-input-label>
                        <x-text-input type="text" name="name" class="w-full" value="{{$place->name}}" required/>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                    <div class="mt-4">
                        <x-input-label class="uppercase" for="maps">Maps (google maps link) <span class="text-rose-800">*</span></x-input-label>
                        <x-text-input type="text" name="maps" class="w-full" value="{{$place->maps}}" required/>
                        <x-input-error :messages="$errors->get('maps')" class="mt-2" />
                        </div>
                    <div class="mt-4">
                        <x-input-label class="uppercase" for="phone_number">Phone Number <span class="text-rose-800">*</span></x-input-label>
                        <x-text-input type="text" name="phone_number" class="w-full" value="{{$place->phone_number}}" required/>
                        <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
                        </div>
                    <div class="mt-4">
                        <x-input-label class="uppercase" for="photo">Location Picture</x-input-label>
                        <x-text-input type="file" name="photo" class="w-full"/>
                        <x-input-error :messages="$errors->get('photo')" class="mt-2" />
                        </div>
                    <div class="mt-4">
                        <x-input-label class="uppercase" for="address">Full Address <span class="text-rose-800">*</span></x-input-label>
                        <x-text-input type="text" name="address" class="w-full" value="{{$place->address}}" required/>
                        <x-input-error :messages="$errors->get('address')" class="mt-2" />
                        </div>
                    <div class="mt-4">
                        <x-input-label class="uppercase" for="facilities">Facilities <span class="text-rose-800">*</span></x-input-label>
                        <div class="grid grid-cols-2 gap-2">
                            <div><input id="facilities" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="facilities[]" {{ in_array('Mushola',$facilities)? 'checked' : ''}} value="Mushola"> Mushola</div>
                            <div><input id="facilities" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="facilities[]" {{ in_array('Toilet',$facilities)? 'checked' : ''}} value="Toilet"> Rest Room</div>
                            <div><input id="facilities" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="facilities[]" {{ in_array('Wifi',$facilities)? 'checked' : ''}} value="Wifi"> Wifi</div>
                            <div><input id="facilities" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="facilities[]" {{ in_array('Food Court',$facilities)? 'checked' : ''}} value="Food Court"> Food Court</div>
                        </div>
                        <x-input-error :messages="$errors->get('facilities')" class="mt-2" />
                        </div>
                </div>
            </div>
            <div class="shadow bg-white rounded p-4 px-6 mt-4">
                <x-a href="{{ route('admin.place.show',$place->code) }}">Back</x-a>
                <x-button color="warning">Update</x-button>
            </div>
        </form>
    </div>
</x-app-layout>
