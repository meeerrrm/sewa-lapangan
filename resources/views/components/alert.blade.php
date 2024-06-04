
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