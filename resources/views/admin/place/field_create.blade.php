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
                <div class="">
                    <h2 class="uppercase font-bold">Field Data</h2>

                        <x-input-error :messages="$errors->get('field_type*')" class="mt-2" />
                        <x-input-error :messages="$errors->get('field_number*')" class="mt-2" />
                        <x-input-error :messages="$errors->get('price_on_hour*')" class="mt-2" />

                    <div class="grid sm:grid-cols-4 grid-cols-1 gap-2">
                        <div class="mt-4 sm:col-span-2">
                            <x-input-label class="uppercase" for="field_type">Field Type</x-input-label>
                            <select name="field_type" id="field_type" class="w-full rounded border-gray-300 uppercase">
                                <option value="" selected disabled>-- Select --</option>
@foreach ($listType as $type)
    @if (!in_array($type, $place->field->pluck('field_type')->toArray()))
                                <option value="{{ $type }}">{{ $type }}</option>
    @endif
@endforeach       
                            </select>
                        </div>
                        <div class="mt-4">
                            <x-input-label class="uppercase" for="field_number">Field Quantity<span class="text-rose-800">*</span></x-input-label>
                            <x-text-input type="number" name="field_number" class="w-full" id="field_number"/>
                        </div>
                        <div class="mt-4">
                            <x-input-label class="uppercase" for="price_on_hour">Price on Hour<span class="text-rose-800">*</span></x-input-label>
                            <x-text-input type="number" name="price_on_hour" class="w-full" id="price_on_hour"/>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="shadow bg-white rounded p-4 px-6 mt-4">
                <x-a href="{{ route('admin.place.show',$place->code) }}">Back</x-a>
                <x-button color="primary" href="#">Create</x-button>
            </div>
        </form>
    </div>
</x-app-layout>
