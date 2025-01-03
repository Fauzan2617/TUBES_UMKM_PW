<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produk</title>
    <link rel="icon" href="{{ asset('img/KedaiDiens.png') }}" type="image/png" sizes="512x512">

    {{-- UI Pines --}}
    <script src="https://unpkg.com/alpinejs" defer></script>
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- UI Pines --}}


    <style>
        /* Only keeping necessary custom styles, using Tailwind classes for colors */
        :root {
            --header-height: 4rem;
            --sidebar-width: 240px;
        }

        @keyframes slideDown {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideUp {
            from {
                transform: translateY(20px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .animate-slide-down {
            animation: slideDown 0.5s ease-out;
        }

        .animate-fade-in {
            animation: fadeIn 0.5s ease-out;
        }

        .animate-slide-up {
            animation: slideUp 0.5s ease-out forwards;
        }
    </style>
</head>

<body class="bg-indigo-50 min-h-screen overflow-x-hidden">
    <div class="overlay fixed inset-0 bg-indigo-900/50 z-40 hidden opacity-0 transition-opacity duration-300"></div>




    {{-- HEADER --}}
    <x-produk-admin.navbar-admin></x-produk-admin.navbar-admin>
    {{-- END HEADER --}}







    {{-- GARIS BATAS UNTUK JUDUL nOODLES --}}
    <div class="container mx-auto p-4">

        <section class="relative w-full px-8 text-gray-700 bg-white body-font" data-tails-scripts="//unpkg.com/alpinejs"
            {!! $attributes ?? '' !!}>
            <div
                class="container flex flex-col flex-wrap items-center justify-between py-5 mx-auto md:flex-row max-w-7xl">
                <a href="#_" class="block">Kedai Diens</a>

                <nav
                    class="top-0 left-0 z-0 flex items-center justify-center w-full h-full py-5 -ml-0 space-x-5 text-base md:-ml-5 md:py-0 md:absolute">
                    <a href="#_"
                        class="relative font-medium leading-6 text-gray-600 transition duration-150 ease-out hover:text-gray-900"
                        x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                        <span
                            class="block relative z-10 flex items-center w-auto text-2xl font-extrabold leading-none text-black select-none">Noodles</span>
                        <span class="absolute bottom-0 left-0 inline-block w-full h-0.5 -mb-1 overflow-hidden">
                            <span x-show="hover"
                                class="absolute inset-0 inline-block w-full h-1 h-full transform bg-gray-900"
                                x-transition:enter="transition ease duration-200" x-transition:enter-start="scale-0"
                                x-transition:enter-end="scale-100" x-transition:leave="transition ease-out duration-300"
                                x-transition:leave-start="scale-100" x-transition:leave-end="scale-0"></span>
                        </span>
                    </a>

                </nav>

                <div class="relative z-10 inline-flex items-center space-x-3 md:ml-5 lg:justify-end">

                    <span class="inline-flex rounded-md shadow-sm">
                        <a href="/views_admin/crudproduk"
                            class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap bg-blue-600 border border-blue-700 rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                            data-rounded="rounded-md" data-primary="blue-600">
                            Add Produk
                        </a>
                    </span>
                </div>
            </div>
        </section>
        {{-- END GARIS BATAS UNTUK JUDUL NOODLES --}}
        <section id="Projects"
            class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">

            <!-- Produk pertama -->
            @foreach ($products as $product)
                @if ($product->product_type_id == 1)
                    <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
                        <!-- Tambahkan link ke halaman edit -->
                        <a href="{{ route('views_admin.editproduk', $product->id) }}">
                            <!-- Gambar Produk -->
                            <img src="{{ asset('storage/' . $product->image) . '?' . time() }}" alt="{{ $product->name }}" class="h-80 w-72 object-cover rounded-t-xl" />

                            <!-- Informasi Produk -->
                            <div class="px-4 py-3 w-72">
                                <span
                                    class="text-gray-400 mr-3 uppercase text-xs">{{ $product->brand ?? 'No Brand' }}</span>
                                <p class="text-lg font-bold text-black truncate block capitalize">{{ $product->name }}
                                </p>
                                <div class="flex items-center">
                                    <p class="text-lg font-semibold text-black cursor-auto my-3">
                                        Rp.{{ number_format($product->price, 2) }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endif
            @endforeach
        </section>








        <!-- UNTUK DRINK MENU -->
        <section class="text-center mt-10 relative w-full px-8 text-gray-700 bg-white body-font"
            data-tails-scripts="//unpkg.com/alpinejs" {!! $attributes ?? '' !!}">
            <div
                class="container flex flex-col flex-wrap items-center justify-between py-5 mx-auto md:flex-row max-w-7xl">
                <a href="#_" class="block">Kedai Diens</a>

                <nav
                    class="top-0 left-0 z-0 flex items-center justify-center w-full h-full py-5 -ml-0 space-x-5 text-base md:-ml-5 md:py-0 md:absolute">
                    <a href="#_"
                        class="relative font-medium leading-6 text-gray-600 transition duration-150 ease-out hover:text-gray-900"
                        x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                        <span
                            class="block relative z-10 flex items-center w-auto text-2xl font-extrabold leading-none text-black select-none">Drinks</span>
                        <span class="absolute bottom-0 left-0 inline-block w-full h-0.5 -mb-1 overflow-hidden">
                            <span x-show="hover"
                                class="absolute inset-0 inline-block w-full h-1 h-full transform bg-gray-900"
                                x-transition:enter="transition ease duration-200" x-transition:enter-start="scale-0"
                                x-transition:enter-end="scale-100" x-transition:leave="transition ease-out duration-300"
                                x-transition:leave-start="scale-100" x-transition:leave-end="scale-0"></span>
                        </span>
                    </a>

                </nav>

                <div class="relative z-10 inline-flex items-center space-x-3 md:ml-5 lg:justify-end">

                    <span class="inline-flex rounded-md shadow-sm">
                        <a href="/views_admin/crudproduk"
                            class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap bg-blue-600 border border-blue-700 rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                            data-rounded="rounded-md" data-primary="blue-600">
                            Add Produk
                        </a>
                    </span>
                </div>
            </div>
        </section>

        <!-- Produk tambahan -->
        <section id="Projects"
            class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">
            <!-- Produk kedua -->
            @foreach ($products as $product)
                @if ($product->product_type_id == 2)
                    <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
                        <!-- Tambahkan link ke halaman edit -->
                        <a href="{{ route('views_admin.editproduk', $product->id) }}">
                            <!-- Gambar Produk -->
                            <img src="{{ asset('storage/' . $product->image) . '?' . time() }}" alt="{{ $product->name }}" class="h-80 w-72 object-cover rounded-t-xl" />



                            <!-- Informasi Produk -->
                            <div class="px-4 py-3 w-72">
                                <span
                                    class="text-gray-400 mr-3 uppercase text-xs">{{ $product->brand ?? 'No Brand' }}</span>
                                <p class="text-lg font-bold text-black truncate block capitalize">{{ $product->name }}
                                </p>
                                <div class="flex items-center">
                                    <p class="text-lg font-semibold text-black cursor-auto my-3">
                                        Rp.{{ number_format($product->price, 2) }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endif
            @endforeach
        </section>







        <!-- UNTUK SNACK MENU -->
        <section class="text-center mt-10 relative w-full px-8 text-gray-700 bg-white body-font"
            data-tails-scripts="//unpkg.com/alpinejs" {!! $attributes ?? '' !!}">
            <div
                class="container flex flex-col flex-wrap items-center justify-between py-5 mx-auto md:flex-row max-w-7xl">
                <a href="#_" class="block">Kedai Diens</a>

                <nav
                    class="top-0 left-0 z-0 flex items-center justify-center w-full h-full py-5 -ml-0 space-x-5 text-base md:-ml-5 md:py-0 md:absolute">
                    <a href="#_"
                        class="relative font-medium leading-6 text-gray-600 transition duration-150 ease-out hover:text-gray-900"
                        x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                        <span
                            class="block relative z-10 flex items-center w-auto text-2xl font-extrabold leading-none text-black select-none">Snack</span>
                        <span class="absolute bottom-0 left-0 inline-block w-full h-0.5 -mb-1 overflow-hidden">
                            <span x-show="hover"
                                class="absolute inset-0 inline-block w-full h-1 h-full transform bg-gray-900"
                                x-transition:enter="transition ease duration-200" x-transition:enter-start="scale-0"
                                x-transition:enter-end="scale-100"
                                x-transition:leave="transition ease-out duration-300"
                                x-transition:leave-start="scale-100" x-transition:leave-end="scale-0"></span>
                        </span>
                    </a>

                </nav>

                <div class="relative z-10 inline-flex items-center space-x-3 md:ml-5 lg:justify-end">

                    <span class="inline-flex rounded-md shadow-sm">
                        <a href="/views_admin/crudproduk"
                            class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap bg-blue-600 border border-blue-700 rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                            data-rounded="rounded-md" data-primary="blue-600">
                            Add Produk
                        </a>
                    </span>
                </div>
            </div>
        </section>

        <!-- Produk tambahan -->
        <section id="Projects"
            class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">
            <!-- Produk kedua -->
            @foreach ($products as $product)
                @if ($product->product_type_id == 3)
                    <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
                        <!-- Tambahkan link ke halaman edit -->
                        <a href="{{ route('views_admin.editproduk', $product->id) }}">
                            <!-- Gambar Produk -->
                            <img src="{{ asset('storage/' . $product->image) . '?' . time() }}" alt="{{ $product->name }}" class="h-80 w-72 object-cover rounded-t-xl" />



                            <!-- Informasi Produk -->
                            <div class="px-4 py-3 w-72">
                                <span
                                    class="text-gray-400 mr-3 uppercase text-xs">{{ $product->brand ?? 'No Brand' }}</span>
                                <p class="text-lg font-bold text-black truncate block capitalize">{{ $product->name }}
                                </p>
                                <div class="flex items-center">
                                    <p class="text-lg font-semibold text-black cursor-auto my-3">
                                        Rp.{{ number_format($product->price, 2) }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endif
            @endforeach
        </section>





    </div>
























    <script>
        // Mobile menu functionality
        const mobileMenuButton = document.querySelector('.mobile-menu-button');
        const sidebar = document.querySelector('.sidebar');
        const overlay = document.querySelector('.overlay');

        function toggleMobileMenu() {
            sidebar.classList.toggle('translate-x-0');
            overlay.classList.toggle('hidden');
            setTimeout(() => overlay.classList.toggle('opacity-0'), 0);
            document.body.style.overflow = sidebar.classList.contains('translate-x-0') ? 'hidden' : '';
        }

        mobileMenuButton.addEventListener('click', toggleMobileMenu);
        overlay.addEventListener('click', toggleMobileMenu);

        // Close mobile menu on window resize if open
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024 && sidebar.classList.contains('translate-x-0')) {
                toggleMobileMenu();
            }
        });

        // Notification animation
        const notificationIcon = document.querySelector('.material-icons-outlined:nth-child(2)');
        setInterval(() => {
            notificationIcon.classList.add('scale-110');
            setTimeout(() => notificationIcon.classList.remove('scale-110'), 200);
        }, 5000);
    </script>
</body>

</html>
