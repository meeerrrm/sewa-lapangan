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
        <header class="w-full h-screen bg-slate-800 pt-42 py-52">
            <div class="max-w-7xl mx-auto">
                <h1 class="text-4xl text-center uppercase font-bold text-white">Confirm Order!</h1>
                <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="w-full rounded shadow-lg bg-[#b9f501] p-12 mt-12 grid grid-cols-1 gap-8">
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
                        </div>
                    </div>
                    <form method="POST" class="w-full rounded shadow-lg bg-[#b9f501] p-12 mt-12">
                        @csrf
                        
                        <h2 class="text-3xl text-center uppercase font-bold">Order Detail</h2>
                        <div class="mt-2">
                            <label for="">Date</label>
                            <div class="flex">
                                <input type="date" class="block w-full rounded border-none" name="booking_date" required>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="mt-2">
                                <label for="">Check-in</label>
                                {{-- <input type="time" class="block w-full rounded border-none" id="start_time" name="start_time" min="12:00" max="23:59" required> --}}
                                <select name="start_time" id="start_time" class="block w-full rounded border-none" required>
                                    <option value="">--SELECT TIME--</option>
                                    <option value="12:00">12:00</option>
                                    <option value="15:00">15:00</option>
                                    <option value="18:00">18:00</option>
                                </select>
                            </div>
                            <div class="mt-2">
                                <label for="">Total Rental Time</label>
                                {{-- <input type="number" class="block w-full rounded border-none" id="qty" name="qty" required> --}}
                                <select name="qty" id="qty" class="block w-full rounded border-none" required>
                                    <option value="">--SELECT HOUR--</option>
                                    <option value="1">1 Hour</option>
                                    <option value="2">2 Hour</option>
                                    <option value="3">3 Hour</option>
                                </select>
                            </div>
                        </div>
                        <div class="mt-4">
                            <label for="">Price / Hour</label>
                            <input type="text" class="block w-full rounded border-none" disabled value="Rp {{ number_format($field->price_on_hour) }}">
                            <input type="hidden" name="price_on_hour" id="price_on_hour" value="{{ $field->price_on_hour }}">
                        </div>
                        <div class="mt-4">
                            <label for="">Total Price</label>
                            <input type="text" class="block w-full rounded border-none" name="total" id="total" readonly>
                        </div>
                        <div class="mt-4">
                            <x-button color="secondary">Confirm Order</x-button>
                        </div>
                    </form>
                </div>
            </div>
        </header>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function(){
                $('#qty').change(function(){
                    let priceOnHour = $('#price_on_hour').val();


                    let total = priceOnHour * $(this).val();
                    total = "Rp "+number_format(total);
                    $('#total').val(total);
                });
            });
        </script>
        <script>
            function number_format(number, decimals, dec_point, thousands_sep) {
                var n = !isFinite(+number) ? 0 : +number, 
                    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
                    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
                    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
                    toFixedFix = function (n, prec) {
                        // Fix for IE parseFloat(0.55).toFixed(0) = 0;
                        var k = Math.pow(10, prec);
                        return Math.round(n * k) / k;
                    },
                    s = (prec ? toFixedFix(n, prec) : Math.round(n)).toString().split('.');
                if (s[0].length > 3) {
                    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
                }
                if ((s[1] || '').length < prec) {
                    s[1] = s[1] || '';
                    s[1] += new Array(prec - s[1].length + 1).join('0');
                }
                return s.join(dec);
            }
        </script>
    </body>
</html>
