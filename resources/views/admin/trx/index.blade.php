<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Transaction') }}
        </h2>
        <p>Transaction Management</p>
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
            <div class="shadow bg-white rounded p-4 mt-4">
                <div class="relative overflow-x-auto">
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="border px-4 py-2">Code</th>
                                <th class="border px-4 py-2">User</th>
                                <th class="border px-4 py-2">Place</th>
                                <th class="border px-4 py-2">Field</th>
                                <th class="border px-4 py-2">Start Time</th>
                                <th class="border px-4 py-2">Long</th>
                                <th class="border px-4 py-2">Status</th>
                                <th class="border px-4 py-2">Total</th>
                                <th class="border px-4 py-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
@foreach($trxes as $trx)                            
                            <tr>
                                <td class="border px-4 py-2 text-center">{{ $trx->code }}</td>
                                <td class="border px-4 py-2 text-center">{{ ucwords($trx->user->name) }}</td>
                                <td class="border px-4 py-2 text-center">{{ $trx->place->name }}</td>
                                <td class="border px-4 py-2 text-center">{{ $trx->place_field->field_type }}</td>
                                <td class="border px-4 py-2 text-center">{{ $trx->start }}</td>
                                <td class="border px-4 py-2 text-center">{{ $trx->qty }} Hours</td>
                                <td class="border px-4 py-2 text-center">{{ $trx->status }}</td>
                                <td class="border px-4 py-2 text-center">Rp {{ number_format($trx->total) }}</td>
                                <td class="border px-4 py-2 text-center"><x-a color="danger" href="{{ route('admin.trx.update',$trx->code) }}">Detail</x-a></td>
                            </tr>
@endforeach                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
