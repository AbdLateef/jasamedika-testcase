@extends('layouts.myapp')
@section('content')
    <main>
        <div class="bg-sec-100 ">
            <div class="flex justify-center md:py-28 py-12 mx-auto max-w-screen-xl">
                <div class="flex  flex-col justify-center md:w-3/5  mx-12 md:ms-20 md:mx-0">
                    <p class=" md:text-start text-center  font-car font-bold text-gray-900 mb-8  md:text-4xl text-2xl ">
                        Selamat datang di Rental Mobil App
                    </p>
                    <div class="md:w-3/5 md:hidden  ">
                        <img loading="lazy" src="/images/home car.png" alt="home car">
                    </div>
                    <p class="text-justify md:mx-0 mx-8 ">Kami akan membuat perjalanan anda menyenangkan dengan penuh kebebasan.</p>
                </div>
            </div>

            <div class="mx-auto max-w-screen-xl">
                <div class="   md:mr-16 mr-4 mb-4 flex justify-center">
                    <a href="/cars">
                        <button
                            class="border-2 border-gray-500 text-black p-2 rounded-md hover:bg-gray-500 hover:text-white">Lihat semua mobil</button>
                    </a>
                </div>
            </div>

            <div class=" grid md:grid-cols-3  md:ps-4 justify-center p-2 gap-2 items-center mx-auto max-w-screen-xl ">
                @foreach ($cars as $car)
                    <div
                        class="relative flex w-full max-w-xs flex-col overflow-hidden bg-white shadow-md">
                        <a class="relative mx-3 mt-3 flex h-60 overflow-hidden" href="{{ route('car.reservation', ['car' => $car->id]) }}">
                            <img loading="lazy" class="object-cover" src="{{ $car->image }}" alt="product image" />
                        </a>
                        <div class="mt-4 px-5 pb-5">
                            <div >
                                <h5 class=" font-bold text-xl tracking-tight text-slate-900">{{ $car->brand }}
                                    {{ $car->model }}
                                    {{ $car->engine }}</h5>
                            </div>
                            <div class="mt-2 mb-5 flex items-center justify-between">
                                <p>
                                    <span class="text-3xl font-bold text-slate-900">{{ $car->price_per_day }}</span>
                                </p>
                            </div>
                            <a href="{{ route('car.reservation', ['car' => $car->id]) }}"
                                class="flex items-center justify-center rounded-md bg-slate-900 hover:bg-gray-400 px-5 py-2.5 text-center text-sm font-medium text-white  focus:outline-none focus:ring-4 focus:ring-blue-300">
                                Sewa</a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class=" relative -bottom-[1px] mx-auto max-w-screen-xl  ">
                <img loading="lazy" src="/images/orange car 1.png" alt="" class="w-full">
            </div>

        </div>
    </main>
@endsection
