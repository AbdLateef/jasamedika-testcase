<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thank you</title>
    @vite('resources/css/app.css')
    <link rel="icon" type="image/x-icon" href="/images/logos/logo.jpg">
</head>

<body class="mx-auto max-w-screen-xl bg-gray-200">
    <div class="h-screen bg-gray-200 flex justify-center items-center ">
        <div class="bg-white md:w-3/5 h-4/5 rounded-lg mx-4 shadow-xl flex flex-col justify-start items-center gap-8">
            <div class="w-32 mt-10">
                <img loading="lazy"  src="/images/logos/logo.jpg" alt="">
            </div>
            <div class="">
                <h1 class="font-car font-bold text-gray-900 text-6xl text-center">Terima Kasih</h1>
                <p class="font-car text-center">Semoga selamat diperjalanan!</p>
            </div>
            <div class="mt-2 flex justify-center">
                <a href="{{route('clientReservation')}}"
                    class="w-full p-2 m-2 text-white bg-gray-700 font-semibold rounded-md hover:bg-black flex justify-center items-center gap-3 hover:cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 448 512">
                        <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <style>
                            svg {
                                fill: #ffffff
                            }
                        </style>
                        <path
                            d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                    </svg>
                    <p>Kembali ke halaman reservasi</p>
                </a>
            </div>
        </div>



    </div>
</body>

</html>
