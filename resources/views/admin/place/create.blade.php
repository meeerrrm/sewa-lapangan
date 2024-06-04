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
                        <x-text-input type="text" name="name" class="w-full" :value="old('name')" required/>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                    <div class="mt-4">
                        <x-input-label class="uppercase" for="maps">Maps (google maps link) <span class="text-rose-800">*</span></x-input-label>
                        <x-text-input type="text" name="maps" class="w-full" :value="old('maps')" required/>
                        <x-input-error :messages="$errors->get('maps')" class="mt-2" />
                        </div>
                    <div class="mt-4">
                        <x-input-label class="uppercase" for="phone_number">Phone Number <span class="text-rose-800">*</span></x-input-label>
                        <x-text-input type="text" name="phone_number" class="w-full" :value="old('phone_number')" required/>
                        <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
                        </div>
                    <div class="mt-4">
                        <x-input-label class="uppercase" for="photo">Location Picture<span class="text-rose-800">*</span></x-input-label>
                        <x-text-input type="file" name="photo" class="w-full" required/>
                        <x-input-error :messages="$errors->get('photo')" class="mt-2" />
                        </div>
                    <div class="mt-4">
                        <x-input-label class="uppercase" for="address">Full Address <span class="text-rose-800">*</span></x-input-label>
                        <x-text-input type="text" name="address" class="w-full" :value="old('full_address')" required/>
                        <x-input-error :messages="$errors->get('address')" class="mt-2" />
                        </div>
                    <div class="mt-4">
                        <x-input-label class="uppercase" for="facilities">Facilities <span class="text-rose-800">*</span></x-input-label>
                        <div class="grid grid-cols-2 gap-2">
                            <div><input id="facilities" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="facilities[]" value="Mushola"> Mushola</div>
                            <div><input id="facilities" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="facilities[]" value="Toilet"> Rest Room</div>
                            <div><input id="facilities" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="facilities[]" value="Wifi"> Wifi</div>
                            <div><input id="facilities" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="facilities[]" value="Food Court"> Food Court</div>
                        </div>
                        <x-input-error :messages="$errors->get('facilities')" class="mt-2" />
                        </div>
                </div>
                <hr class="my-4">
                <div class="">
                    <h2 class="uppercase font-bold">Field Data</h2>
                    <p>If you only have 1 type of field, please fill in the top one!</p>

                        <x-input-error :messages="$errors->get('field_type*')" class="mt-2" />
                        <x-input-error :messages="$errors->get('field_number*')" class="mt-2" />
                        <x-input-error :messages="$errors->get('price_on_hour*')" class="mt-2" />

                    <div class="grid sm:grid-cols-4 grid-cols-1 gap-2">
                        <div class="mt-4 sm:col-span-2">
                            <x-input-label class="uppercase" for="field_type[0]">Field Type</x-input-label>
                            <select name="field_type[0]" id="field_type[0]" class="w-full rounded border-gray-300 uppercase">
                                <option value="" selected disabled>-- Select --</option>
                                <option value="Futsal">Futsal</option>
                                <option value="Basket">Basket</option>
                                <option value="Badminton">Badminton</option>
                            </select>
                        </div>
                        <div class="mt-4">
                            <x-input-label class="uppercase" for="field_number[0]">Field Quantity<span class="text-rose-800">*</span></x-input-label>
                            <x-text-input type="number" name="field_number[0]" class="w-full" id="field_number[0]"/>
                        </div>
                        <div class="mt-4">
                            <x-input-label class="uppercase" for="price_on_hour[0]">Price on Hour<span class="text-rose-800">*</span></x-input-label>
                            <x-text-input type="number" name="price_on_hour[0]" class="w-full" id="price_on_hour[0]"/>
                        </div>
                    </div>
                    <div class="grid sm:grid-cols-4 grid-cols-1 gap-2">
                        <div class="mt-4 sm:col-span-2">
                            <x-input-label class="uppercase" for="field_type[1]">Field Type</x-input-label>
                            <select name="field_type[1]" id="field_type[1]" class="w-full rounded border-gray-300 uppercase">
                                <option value="" selected disabled>-- Select --</option>
                                <option value="Futsal">Futsal</option>
                                <option value="Basket">Basket</option>
                                <option value="Badminton">Badminton</option>
                            </select>
                        </div>
                        <div class="mt-4">
                            <x-input-label class="uppercase" for="field_number[1]">Field Quantity<span class="text-rose-800">*</span></x-input-label>
                            <x-text-input type="number" name="field_number[1]" class="w-full" id="field_number[1]"/>
                        </div>
                        <div class="mt-4">
                            <x-input-label class="uppercase" for="price_on_hour[1]">Price on Hour<span class="text-rose-800">*</span></x-input-label>
                            <x-text-input type="number" name="price_on_hour[1]" class="w-full" id="price_on_hour[1]"/>
                        </div>
                    </div>
                    <div class="grid sm:grid-cols-4 grid-cols-1 gap-2">
                        <div class="mt-4 sm:col-span-2">
                            <x-input-label class="uppercase" for="field_type[2]">Field Type</x-input-label>
                            <select name="field_type[2]" id="field_type[2]" class="w-full rounded border-gray-300 uppercase">
                                <option value="" selected disabled>-- Select --</option>
                                <option value="Futsal">Futsal</option>
                                <option value="Basket">Basket</option>
                                <option value="Badminton">Badminton</option>
                            </select>
                        </div>
                        <div class="mt-4">
                            <x-input-label class="uppercase" for="field_number[2]">Field Quantity<span class="text-rose-800">*</span></x-input-label>
                            <x-text-input type="number" name="field_number[2]" class="w-full" id="field_number[2]"/>
                        </div>
                        <div class="mt-4">
                            <x-input-label class="uppercase" for="price_on_hour[2]">Price on Hour<span class="text-rose-800">*</span></x-input-label>
                            <x-text-input type="number" name="price_on_hour[2]" class="w-full" id="price_on_hour[2]"/>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="shadow bg-white rounded p-4 px-6 mt-4">
                <x-a href="{{ route('admin.place.index') }}">Back</x-a>
                <x-button color="primary" href="#">Create</x-button>
            </div>
        </form>
    </div>
</x-app-layout>
