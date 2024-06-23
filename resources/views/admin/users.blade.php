@extends('layouts.myapp')
@section('content')
    <div class="mx-auto max-w-screen-xl">

        <div id="reservations" class="mt-12">
            <div class="flex align-middle justify-center">
                <p class="my-2 mx-8  p-2 font-car font-bold text-gray-600 text-lg ">Clients</p>
            </div>

        </div>

        <div class="w-full overflow-hidden rounded-lg shadow-xs mb-12">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap overflow-scroll table-auto text-center">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="text-center px-4 py-3 w-48">Nama</th>
                            <th class="text-center px-4 py-3 w-24">Email</th>
                            <th class="text-center w-56 px-4 py-3">Reservasi</th>
                            <th class="text-center px-4 py-3 w-26">Aksi</th>

                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">


                        @forelse ($clients as $client)
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3 text-sm">
                                    <p>
                                        {{ $client->name }}
                                    </p>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <p>
                                        {{ $client->email }}
                                    </p>
                                </td>
                                <td class="px-4 py-3 text-sm text-center">
                                    @if ($client->reservations->count() > 0)
                                        <p>
                                            <span class=" font-bold text-">{{ $client->reservations->count() }} </span>
                                             reservasi
                                        </p>
                                    @else
                                        Belum ada reservasi
                                    @endif
                                </td>

                                <td class="px-4 py-3 text-sm w-32">
                                    <a href="{{ route('userDetails', ['user' => $client->id]) }}" >
                                        <button type="submit"
                                            class="text-gray p-3 rounded-md hover:bg-gray-200">
                                            Details
                                        </button>
                                    </a>

                                </td>



                            </tr>
                        @empty
                        @endforelse


                    </tbody>
                </table>
            </div>
            <div class="flex justify-center my-12 w-full">
        {{ $clients->links('pagination::tailwind') }}
    </div>
        </div>


    </div>
@endsection
