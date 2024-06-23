@extends('layouts.myapp')
@section('content')
    <div class="mx-auto max-w-screen-xl bg-white rounded-md p-6 m-8 ">
        <div class="flex justify-between md:flex-row flex-col ">
            {{-- -------------------------------------------- left -------------------------------------------- --}}
            <div class="md:w-2/3  md:border-r border-gray-800 p-2">

                <h2 class=" ms-4 max-w-full font-car md:text-6xl text-4xl">{{ $car->brand }} {{ $car->model }}
                    {{ $car->engine }}
                </h2>

                <div class=" flex items-end mt-8 ms-4">
                    <h3 class="font-car text-gray-500 text-2xl">Harga sewa</h3>
                    <p>
                        <span
                            class=" text-3xl font-bold ms-3 me-1 p-2 rounded-md">{{ $car->price_per_day }}
                            IDR</span>
                    </p>
                </div>

                <div class=" flex items-center justify-around mt-10 me-10">
                    <div class="w-1/5 md:w-1/3 h-[0.25px] bg-gray-500 "> </div>
                    <p>Informasi order</p>
                    <div class="w-1/5 md:w-1/3 h-[0.25px] bg-gray-500 "> </div>

                </div>

                <div class="px-6 md:me-8">
                    <form id="reservation_form" action="{{ route('car.reservationStore', ['car' => $car->id]) }}"
                        method="POST">
                        @csrf
                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                            <input type="text" hidden name="user" value="{{ Auth::user()->id }}">

                            <div class="sm:col-span-3">
                                <label for="full-name" class="block text-sm font-medium leading-6 text-gray-900">Full
                                    Name</label>
                                <div class="mt-2">
                                    <input type="text" name="full-name" id="full-name" value="{{ $user->name }}"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pr-400 sm:text-sm sm:leading-6">
                                </div>
                                @error('name')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="sm:col-span-3">
                                <label for="email"
                                    class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                                <div class="mt-2">
                                    <input type="text" name="email" id="email" value="{{ $user->email }}"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pr-400 sm:text-sm sm:leading-6">
                                </div>
                                @error('email')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="sm:col-span-3">
                                <label for="start_date" class="block text-sm font-medium leading-6 text-gray-900">Start at
                                </label>
                                <div class="mt-2">
                                    <input type="date" name="start_date" id="start_date"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pr-400 sm:text-sm sm:leading-6">
                                </div>
                                @error('start_date')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="sm:col-span-3">
                                <label for="end_date" class="block text-sm font-medium leading-6 text-gray-900">End at
                                </label>
                                <div class="mt-2">
                                    <input type="date" name="end_date" id="end_date"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pr-400 sm:text-sm sm:leading-6">
                                </div>
                                @error('end_date')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mt-12 md:block hidden  ">
                            <button type="submit"
                                class="text-white bg-gray-600 p-3 w-full rounded-lg font-bold hover:bg-gray-400 shadow-xl hover:shadow-none ">
                                Sewa Sekarang
                            </button>
                        </div>
                    </form>
                </div>

            </div>

            {{-- -------------------------------------------- right -------------------------------------------- --}}

            <div class="md:w-1/3 flex flex-col justify-start items-center">
                <div class="relative mx-3 mt-3 flex h-[200px] w-3/4   overflow-hidden rounded-xl shadow-lg">
                    <img loading="lazy" class="h-full w-full object-cover" src="{{ $car->image }}" alt="product image" />
                </div>
                <p class=" ms-4 max-w-full font-car text-xl mt-3 md:block hidden">{{ $car->brand }} {{ $car->model }}
                    {{ $car->engine }}
                </p>
                <div class=" w-full   mt-8 ms-8">
                    <p id="duration" class="font-car text-gray-600 text-lg ms-2">Durasi: <span
                            class="mx-2 font-car text-md font-medium text-gray-700 border border-gray-400 p-2 rounded-md ">0
                            hari</span>
                    </p>
                </div>
                <div class=" w-full   mt-8 ms-8">
                    <p id="total-price" class="font-car text-gray-600 text-lg ms-2">Total Harga: Rp<span
                            class="mx-2 font-car text-md font-medium text-gray-700 border border-gray-400 p-2 rounded-md ">0 
                            </span>
                    </p>
                </div>
                <div id="mobile_submit_button" class="mt-12 w-full md:hidden  ">
                    <button type="submit"
                        class="text-white bg-gray-600 p-3 w-full rounded-lg font-bold hover:bg-gray-400 shadow-xl hover:shadow-none ">Sewa
                        Sekarang</button>
                </div>
            </div>
        </div>



    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#start_date, #end_date').change(function() {
                var startDate = new Date($('#start_date').val());
                var endDate = new Date($('#end_date').val());

                if (startDate && endDate && startDate <= endDate) {
                    var duration = Math.ceil((endDate - startDate) / (1000 * 60 * 60 * 24));
                    var pricePerDay = {{ $car->price_per_day }};
                    var totalPrice = duration * pricePerDay;

                    $('#duration span').text(duration + ' hari');
                    $('#total-price span').text(totalPrice + ' IDR');
                } else {
                    $('#duration span').text('X hari');
                    $('#total-price span').text('Y IDR');
                }
            });
        });

        document.getElementById("mobile_submit_button").addEventListener("click", function() {
            document.getElementById("reservation_form").submit();
        });
    </script>
@endsection
