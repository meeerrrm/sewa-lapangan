<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Transaction') }}
        </h2>
        <p>Transaction Management</p>
    </x-slot>

    <div class="py-12">
        <form enctype="multipart/form-data" method="post" class="max-w-7xl mx-auto sm:px-6 lg:px-8">
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
            @csrf
            @method('put')
            @if($errors->any())
            <div class="shadow bg-white rounded p-4 px-6 mt-4">
            {!! implode('', $errors->all('<div>:message</div>')) !!}
            </div>
            @endif
            <div class="grid md:grid-cols-2 gap-4">

                <div class="">
                    <div class="shadow bg-white rounded p-4 px-6 mt-4">
                        <h2 class="uppercase font-bold">Transaction Detail</h2>
                        <table class="w-full table-auto">
                            <tr>
                                <td>Code</td>
                                <td>:</td>
                                <td>{{ $trx->code }}</td>
                            </tr>
                            <tr>
                                <td>Place</td>
                                <td>:</td>
                                <td>{{ $trx->place->name }}</td>
                            </tr>
                            <tr>
                                <td>Field</td>
                                <td>:</td>
                                <td>{{ $trx->place_field->field_type }}</td>
                            </tr>
                            <tr>
                                <td>Start</td>
                                <td>:</td>
                                <td>{{ date('d F Y h:i',strtotime($trx->start)) }}</td>
                            </tr>
                            <tr>
                                <td>End</td>
                                <td>:</td>
                                <td>{{ date('d F Y h:i',strtotime($trx->start.'+ '.$trx->qty.'hour')) }}</td>
                            </tr>
                            <tr>
                                <td>Price on Hour</td>
                                <td>:</td>
                                <td>Rp {{ number_format($trx->price) }}</td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td>:</td>
                                <td>Rp {{ number_format($trx->total) }}</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>:</td>
                                <td>{{ $trx->status }}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="shadow bg-white rounded p-4 px-6 mt-4">
                        <div class="mt-4">
                            <h3 class="font-bold">Proof</h3>
                            <img src="{{ url('assets/images/'.$trx->proof) }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="">
                    <div class="shadow bg-white rounded p-4 px-6 mt-4">
                        <h2 class="uppercase font-bold">Change Status</h2>
                        <select name="status" id="" class="w-full border-none rounded bg-gray-200 mt-4">
                            <option value="payment-wait" {{ ($trx->status == 'payment-wait')? 'selected' : '' }}>Payment: Waiting</option>
                            <option value="payment-check" {{ ($trx->status == 'payment-check')? 'selected' : '' }}>Payment: Checking</option>
                            <option value="payment-success" {{ ($trx->status == 'payment-success')? 'selected' : '' }}>Payment: Success</option>
                            <option value="user-check-in" {{ ($trx->status == 'user-check-in')? 'selected' : '' }}>Field: Check-in</option>
                            <option value="user-check-out" {{ ($trx->status == 'user-check-out')? 'selected' : '' }}>Field: Check-Out</option>
                        </select>
                        
                    </div>
                    <div class="shadow bg-white rounded p-4 px-6 mt-4">
                        <x-a href="{{ route('admin.trx.index') }}">Back</x-a>
                        <x-button color="warning">Update Status</x-button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
