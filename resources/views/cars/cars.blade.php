@extends('layouts.myapp')
@section('content')
<div class="mt-6 mb-2 grid md:grid-cols-3  justify-center items-center mx-auto max-w-screen-xl">
    @foreach ($cars as $car)
    <div class="relative flex w-full max-w-xs flex-col overflow-hidden bg-white shadow-md">
        <a class="relative mx-3 mt-3 flex h-60 overflow-hidden" href="{{ route('car.reservation', ['car' => $car->id]) }}">
            <img loading="lazy" class="object-cover" src="{{ $car->image }}" alt="product image" />
        </a>
        <div class="mt-4 px-5 pb-5">
            <div>
                <h5 class=" font-bold text-xl tracking-tight text-slate-900">{{ $car->brand }}
                    {{ $car->model }}
                    {{ $car->engine }}
                </h5>
            </div>
            <div class="mt-2 mb-5 flex items-center justify-between">
                <p>
                    <span class="text-3xl font-bold text-slate-900">{{ $car->price_per_day }}</span>
                </p>
            </div>
            <a href="{{ route('car.reservation', ['car' => $car->id]) }}" class="flex items-center justify-center rounded-md bg-slate-900 hover:bg-gray-400 px-5 py-2.5 text-center text-sm font-medium text-white  focus:outline-none focus:ring-4 focus:ring-blue-300">
                Sewa</a>
        </div>
    </div>
    @endforeach
</div>
@endsection