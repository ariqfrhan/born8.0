<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link rel="canonical" href="https://nolderajat.ub.ac.id/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Nol Derajat Film" />
    <meta property="og:url" content="https://nolderajat.ub.ac.id/" />
    <meta property="og:site_name" content="Nol Derajat Film" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@nol_derajat" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="w-full h-full drop-shadow-md bg-gradient-to-br from-purple/50 to-yellow/30">
    <section class="gradient-form flex flex-col justify-center items-center md:h-screen relative">
        <div class="container py-12 px-6">
            <div class="flex justify-center items-center flex-wrap g-6  text-gray-800">
                <div class="xl:w-10/12 shadow-md">
                    <div class="block bg-dark  shadow-lg rounded-lg text-white">
                        <div class="lg:flex lg:flex-wrap g-0">
                            <div class="lg:w-6/12 px-4 md:px-0 bg-green ">
                                <div class="md:p-12 md:mx-6">
                                    <div class="text-white">
                                        <img class=" w-48" src="/assets/images/logo-text-putih.png" alt="logo" />
                                        <h4 class="text-2xl font-semibold font-montserrat pt-8 pb-1">Selamat Datang di
                                            BORN
                                            Apps !</h4>
                                        <p class="mb-12 font-montserrat">Mau Login? silahkan gunakan akun <span
                                                class="font-bold ">SIAM
                                            </span></p>
                                    </div>

                                    @if ($message = Session::get('message'))
                                        <div
                                            class="w-full rounded-xl shadow-md text-white text-center p-2 bg-[#DB2323]">
                                            {{ $message }}
                                        </div>
                                    @endif

                                    <form action="" method="POST">
                                        @csrf
                                        <p class="font-medium mb-1">NIM</p>
                                        <div class="mb-2">
                                            @error('username')
                                                <p style="color: red">{{ $message }}</p>
                                            @enderror
                                            <input type="text"
                                                class="form-control block w-full px-3 py-1.5 text-base font-montserrat text-gray-700 bg-dark bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-dark focus:border-blue-600 focus:outline-none"
                                                id="exampleFormControlInput1" placeholder="Masukkan NIM mu di sini"
                                                name="username" />
                                        </div>
                                        <p class="font-medium mb-1">Kata Sandi</p>
                                        <div class="mb-4">
                                            @error('password')
                                                <p style="color: red">{{ $message }}</p>
                                            @enderror
                                            <input type="password"
                                                class="form-control block w-full px-3 py-1.5 text-base font-montserrat text-gray-700 bg-dark bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-dark focus:border-blue-600 focus:outline-none"
                                                id="exampleFormControlInput1" placeholder="Gunakan sata sandi SIAM mu"
                                                name="password" />
                                        </div>
                                        <div class="text-center pt-1 pb-1">
                                            <button
                                                class="inline-block px-6 py-2.5 text-white font-medium text-lg leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full mb-3 bg-[#329D9C] drop-shadow-md"
                                                type="submit" data-mdb-ripple="true" data-mdb-ripple-color="light">
                                                Log in
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="lg:w-6/12 flex items-center  bg-purple">
                                <div class="text-white px-4 md:p-12 md:mx-6">
                                    <h4 class="text-4xl font-esthetique font-medium mb-6 text-center text-white">
                                        “BORN 7.0: OPEN RECRUITMENT NOL
                                        DERAJAT FILM 2022” </h4>
                                    <p class="text-base text-center text-white font-montserrat">
                                        <span class=" font-semibold text-xl">RAJA Brawijaya </span> atau
                                        <span class=" font-semibold text-xl">Rangkaian Acara Jelajah
                                            Almamater
                                            Universitas Brawijaya </span> merupakan serangkaian kegiatan yang bertujuan
                                        untuk memfasilitasi mahasiswa baru Universitas Brawijaya untuk mengetahui
                                        hal-hal terkait kehidupan kampus dimana RAJA Brawijaya terdiri dari dua
                                        rangkaian yaitu PKKMB, OH.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Session Status -->
    {{-- <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                    name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form> --}}

    <body>

</html>
