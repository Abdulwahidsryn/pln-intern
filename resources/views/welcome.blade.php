<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PLN Internship Banjarmasin BUMN</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="antialiased bg-gray-100 dark:bg-gray-900">
    <div class="bg-white dark:bg-gray-800">
        <header class="relative py-4">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <nav class="flex justify-between items-center">
                    <div class="flex items-center">
                        <a href="#" class="flex items-center">
                            <!-- <img class="h-8 w-auto sm:h-10"
                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/Logo_BUMN.svg/800px-Logo_BUMN.svg.png"
                                alt="BUMN Logo"> -->
                            <x-application-logo
                                class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />


                        </a>
                        <div class="hidden md:flex ml-8 space-x-8">
                            <!-- <a href="#"
                                class="font-medium text-gray-500 hover:text-gray-900 dark:text-gray-300 dark:hover:text-white">Peserta</a> -->
                            <a href="#"
                                class="font-medium text-gray-500 hover:text-gray-900 dark:text-gray-300 dark:hover:text-white">Perusahaan</a>
                            <a href="#"
                                class="font-medium text-yellow-300 dark:text-yellow-400 hover:text-yellow-800">Tentang
                                PLN Internship Banjarmasin</a>
                            <a href="#"
                                class="font-medium text-gray-500 hover:text-gray-900 dark:text-gray-300 dark:hover:text-white">Tim
                                PLN Internship Banjarmasin</a>
                        </div>
                    </div>
                    <div class="hidden md:flex items-center space-x-4">
                        @auth
                        <a href="{{ url('/dashboard') }}"
                            class="text-base font-medium text-gray-500 hover:text-gray-900 dark:text-gray-300 dark:hover:text-white">
                            Dashboard
                        </a>
                        @else
                        <a href="{{ route('register') }}"
                            class="text-base font-medium text-gray-500 hover:text-gray-900 dark:text-gray-300 dark:hover:text-white">
                            Daftar Sekarang
                        </a>
                        <a href="{{ route('login') }}"
                            class="inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-yellow-300 hover:bg-yellow-700 dark:bg-yellow-300 dark:hover:bg-yellow-300">
                            Masuk
                        </a>
                        @endauth
                    </div>
                    <div class="-mr-2 flex items-center md:hidden">
                        <button type="button"
                            class="bg-white dark:bg-gray-800 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-yellow-300"
                            aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </nav>
            </div>
        </header>

        <main class="py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <div class="sm:text-center lg:text-left">
                    <h1
                        class="text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white sm:text-5xl md:text-6xl">
                        <span class="block xl:inline">Temukan</span>
                        <span class="block text-yellow-300 dark:text-yellow-400 xl:inline">kesempatan magang</span>
                        <span class="block xl:inline">di PLN Internship Banjarmasin!</span>
                    </h1>
                    <p
                        class="mt-3 text-base text-gray-500 dark:text-gray-300 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                        Raih kesempatan magang di PLN Internship Banjarmasin dan temukan Skill yang tepat untukmu.
                        Dapatkan pengalaman berharga melalui berbagai posisi magang menarik di lingkungan.
                    </p>
                    <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                        <div class="rounded-md shadow">
                            <a href="#"
                                class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-yellow-300 hover:bg-yellow-700 dark:bg-yellow-300 dark:hover:bg-yellow-300 md:py-4 md:text-lg md:px-10">
                                Tentang PLN Internship Banjarmasin
                            </a>
                        </div>
                        <!-- <div class="mt-3 sm:mt-0 sm:ml-3">
                            <a href="#"
                                class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-yellow-700 bg-yellow-100 hover:bg-yellow-200 dark:bg-yellow-700/20 dark:hover:bg-yellow-800/20 md:py-4 md:text-lg md:px-10">
                                Lihat Lowongan
                            </a>
                        </div> -->
                    </div>
                </div>
                <div class="lg:block">
                    <img class="w-full rounded-lg shadow-lg" src="{{ asset('images/foto-pln.jpg') }}"
                        alt="PLN Internship Banjarmasin Image">
                </div>
            </div>
        </main>
    </div>

    <div class="py-12 bg-gray-50 dark:bg-gray-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white sm:text-4xl sm:text-center lg:text-left">
                Kenapa Memilih PLN Internship Banjarmasin?
            </h2>
            <div class="mt-6 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-yellow-300 text-white">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 13.255A2.39 2.39 0 0012 15c-1.03-.026-2.062-.13-3.07-.398a2.4 2.4 0 00-1 2.616m7.586-1.282A2.39 2.39 0 0112 12.75c1.03-.026 2.062-.13 3.07-.398a2.4 2.4 0 011-2.616m-7.586 1.282A2.39 2.39 0 0012 12.25c-1.03-.026-2.062-.13-3.07-.398a2.4 2.4 0 00-1-2.616m7.586 1.282A2.39 2.39 0 0112 11.75c1.03-.026 2.062-.13 3.07-.398a2.4 2.4 0 011-2.616" />
                        </svg>
                    </div>
                    <h3 class="mt-4 text-lg font-medium text-gray-900 dark:text-white">
                        Beragam Pilihan Magang
                    </h3>
                    <p class="mt-2 text-base text-gray-500 dark:text-gray-300">
                        Temukan berbagai posisi magang menarik dari berbagai perusahaan di seluruh Indonesia.
                    </p>
                </div>

                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-yellow-300 text-white">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.364 10.364l-.707-.707M12 21v-1m6.364-1.636l.707-.707M13 5a2 2 0 00-2 2V8h2V5zM13 18a2 2 0 00-2-2v-3h2v3z" />
                        </svg>
                    </div>
                    <h3 class="mt-4 text-lg font-medium text-gray-900 dark:text-white">
                        Pengembangan Skill
                    </h3>
                    <p class="mt-2 text-base text-gray-500 dark:text-gray-300">
                        Dapatkan pengalaman berharga dan bangun jaringan profesional untuk masa depan Skill Anda.
                    </p>
                </div>

                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-yellow-300 text-white">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 4.354a4 4 0 110 5.292M15 21h3v-4a6 6 0 00-.122-1.035M19 17v-4c0-.672-.214-1.328-.586-1.898m-4 4h-3M4 19h1.382a9 9 0 01.975-1.867M16.553 5.976a9.524 9.524 0 010 13.048m-6.75-14.276a9.524 9.524 0 010 13.048m2.25-3c1.03-.026 2.062-.13 3.07-.398a2.4 2.4 0 001-2.616m-2.33-4.06c-.025-.808-.088-1.601-.255-2.374" />
                        </svg>
                    </div>
                    <h3 class="mt-4 text-lg font-medium text-gray-900 dark:text-white">
                        Jaringan Luas
                    </h3>
                    <p class="mt-2 text-base text-gray-500 dark:text-gray-300">
                        Terhubung dengan para profesional dan peserta magang lainnya di lingkungan.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-gray-50 dark:bg-gray-700 py-8 text-center text-sm text-gray-500 dark:text-gray-400">
        <p>&copy; 2025 PLN Internship Banjarmasin. All rights reserved.</p>
    </footer>
</body>

</html>