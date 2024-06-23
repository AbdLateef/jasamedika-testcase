@extends('layouts.myapp')
@section('content')
    <div class="grid place-items-center " >
        <div class="border p-5 md:w-1/2 w-4/5 bg-sec-100 my-12">
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf

                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}"
                        class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 ">
                    @error('name')
                        <span>
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                    <input type="text" id="address" name="address" value="{{ old('address') }}"
                        class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 ">
                    @error('address')
                        <span>
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No. Telp</label>
                    <input type="number" id="telp" name="telp" value="{{ old('telp') }}"
                        class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 ">
                    @error('telp')
                        <span>
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No. SIM</label>
                    <input type="number" id="drive_license" name="drive_license" value="{{ old('drive_license') }}"
                        class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 ">
                    @error('drive_license')
                        <span>
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email
                        </label>
                    <input type="email" id="email" name="email" value="{{ old('name') }}"
                        class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 ">
                    @error('email')
                        <span>
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Password</label>
                    <input type="password" id="password"
                        class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 "
                        name="password">
                    @error('password')
                        <span>
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password-confirm" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Konfirmasi password</label>
                    <input type="password" id="password-confirm"
                        class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 "
                        name="password_confirmation">

                </div>


                <div class="flex items-start mb-6">
                    <div class="flex items-center h-5">
                        <input id="remember" type="checkbox" value=""
                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-pr-300 "
                            name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    </div>
                    <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember
                        me</label>
                </div>
                <button type="submit"
                    class="text-white bg-gray-400 hover:bg-gray-600 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Register</button>


            </form>
        </div>

    </div>
    <script>
        var radios = document.querySelectorAll('input[type="radio"]');
        var images = document.querySelectorAll('.avatar');

        radios.forEach(function(radio, index) {
            radio.addEventListener('change', function() {
                if (this.checked) {
                    images.forEach(function(image, imageIndex) {
                        if (imageIndex === index) {
                            image.classList.add('border', 'border-red-600', 'rounded-full', 'p-1');
                        } else {
                            image.classList.remove('border', 'border-red-600', 'rounded-full',
                                'p-1');
                        }
                    });
                }
            });
        });
    </script>
@endsection
