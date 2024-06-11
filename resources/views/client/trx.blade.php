<x-client-layout>
        <header class="w-full h-screen bg-slate-800 pt-42 py-52">
            <div class="max-w-7xl mx-auto">
                <h1 class="text-4xl text-center uppercase font-bold text-white">Booking</h1>
                <div class="w-full rounded shadow-lg bg-[#708a21] p-12 mt-12 grid grid-cols-1 gap-8">
                    <div class="w-full">
                        <table class="table-auto w-full text-white">
                            <thead>
                                <tr>
                                    <th class="border-b py-2">Order Code</th>
                                    <th class="border-b py-2">Date</th>
                                    <th class="border-b py-2">Place</th>
                                    <th class="border-b py-2">Field</th>
                                    <th class="border-b py-2">Status</th>
                                    <th class="border-b py-2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
@foreach($trxes as $trx)                                
                                <tr>
                                    <td class="py-2 text-center">{{ $trx->code }}</td>
                                    <td class="py-2 text-center">{{ date('d F Y H:i',strtotime($trx->start)) }}</td>
                                    <td class="py-2 text-center">{{ $trx->place->name }}</td>
                                    <td class="py-2 text-center">{{ $trx->place_field->field_type }}</td>
                                    <td class="py-2 text-center">{{ $trx->status }}</td>
                                    <td class="py-2 text-center">
                                        <x-a href="{{ route('show',$trx->code) }}" color="secondary">Detail</x-a>
                                    </td>
                                </tr>
@endforeach                        
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-2">
                        <x-a color="primary" href="{{ route('landingPage') }}#booking">New Booking</x-a>
                    </div>
                </div>
            </div>
        </header>
</x-client-layout>