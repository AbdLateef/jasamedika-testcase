@extends('layouts.myapp')
@section('content')
    <div class="grid place-items-center h-screen" style="">
        <div class="border p-5 md:w-1/2 w-4/5 bg-sec-100 -mt-48">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        email</label>
                    <input type="email" id="email" name="email" value={{ old('email') ? old('email') : 'user@example.com'}}
                        class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 "
                        placeholder="user@example.com">
                    @error('email')
                        <span>
                            <strong class="text-red-500">{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        password</label>
                    <input type="password" id="password"
                        class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 "
                        placeholder="demo password: password" value="password" name="password">
                    @error('password')
                        <span>
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button type="submit"
                    class="text-white bg-gray-600 hover:bg-gray-400 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Login</button>
                <div class="mt-4 ">
                    Belum punya akun? <a class=" font-medium hover:text-gray-400" href="{{route('register')}}">register di sini</a>
                </div>
            </form>
        </div>

    </div>
@endsection
