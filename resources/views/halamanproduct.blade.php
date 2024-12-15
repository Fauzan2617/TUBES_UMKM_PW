<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Product</title>
    {{-- Logo Situs --}}
    <link rel="icon" href="{{ asset('img/KedaiDiens.png') }}" type="image/png" sizes="512x512">
    <script src="https://unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .gradient-line {
            height: 4px;
            background: linear-gradient(to right, red, orange, yellow, green, blue, purple);
            border: none;
            margin: 20px 0;
        }

        html {
            scroll-behavior: smooth;
        }
    </style>
    </style>
</head>

<body>

    {{-- HEADER/PEMBUKA --}}
    <header class="padding">
        <section class="w-full px-6 pb-12 antialiased bg-white">
            <div class="mx-auto max-w-7xl">



                <!-- Navbar -->
                <x-navbar></x-navbar>
                <!-- Navbar end -->

                {{-- live search --}}
                <div id="search-bar"
                    class="bg-white rounded-md shadow-lg z-10 mt-5 mx-auto w-full sm:w-11/12 md:w-10/12 lg:w-8/12 xl:w-6/12">
                    <form class="flex items-center justify-center p-2">
                        <input type="text" placeholder="Search here"
                            class="w-full rounded-md px-2 py-1 focus:outline-none focus:ring-2 focus:ring-gray-600 focus:border-transparent">
                        <button type="submit"
                            class="bg-gray-800 text-white rounded-md px-4 py-1 ml-2 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-600 focus:ring-opacity-50">
                            Search
                        </button>
                    </form>
                </div>


                {{-- GARIS PEMBATAS JUDUL NOODLESS --}}
                <div class="text-center p-10">
                    <div class="gradient-line"></div>
                    <h1 class="font-bold text-4xl mb-4">Menu Noodles</h1>
                    <h6 class="text-3xl">All Noodles in here</h6>

                </div>
                {{-- END GARIS PEMBATAS JUDUL NOODLES --}}

                <!-- ✅ Grid Section untuk Noodles - Starts Here 👇 -->
                <section id="Projects noodles"
                    class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">

                    <!--   ✅ Product card 1 - Starts Here 👇 -->
                    <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
                        <a href="#">
                            <img src="https://images.unsplash.com/photo-1646753522408-077ef9839300?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwcm9maWxlLXBhZ2V8NjZ8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                                alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
                            <div class="px-4 py-3 w-72">
                                <span class="text-gray-400 mr-3 uppercase text-xs">Brand</span>
                                <p class="text-lg font-bold text-black truncate block capitalize">Product Name</p>
                                <div class="flex items-center">
                                    <p class="text-lg font-semibold text-black cursor-auto my-3">$149</p>
                                    <del>
                                        <p class="text-sm text-gray-600 cursor-auto ml-2">$199</p>
                                    </del>
                                    <div class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                            height="20" fill="currentColor" class="bi bi-bag-plus"
                                            viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                            <path
                                                d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                        </svg></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--   🛑 Product card 1 - Ends Here  -->

                </section>


                {{-- ----------------------------------------------------------------------------------------------------------------------------- --}}



                {{-- GARIS BATAS UNTUK JUDUL MINUMAN --}}
                <div class="text-center p-10" id="drinks">
                    <div class="gradient-line"></div>
                    <h1 class="font-bold text-4xl mb-4">Drink Menu</h1>
                    <h6 class="text-3xl">All Drink in here</h6>

                </div>
                {{-- END GARIS BATAS UNTUK JUDUL MINUMAN --}}

                <section
                    class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">

                    <!--   ✅ Product card 1 - Starts Here 👇 -->
                    <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
                        <a href="#">
                            <img src="https://images.unsplash.com/photo-1649261191606-cb2496e97eee?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwcm9maWxlLXBhZ2V8NDR8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                                alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
                            <div class="px-4 py-3 w-72">
                                <span class="text-gray-400 mr-3 uppercase text-xs">Brand</span>
                                <p class="text-lg font-bold text-black truncate block capitalize">Product Name</p>
                                <div class="flex items-center">
                                    <p class="text-lg font-semibold text-black cursor-auto my-3">$149</p>
                                    <del>
                                        <p class="text-sm text-gray-600 cursor-auto ml-2">$199</p>
                                    </del>
                                    <div class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                            height="20" fill="currentColor" class="bi bi-bag-plus"
                                            viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                            <path
                                                d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                        </svg></div>
                                </div>
                            </div>
                        </a>
                    </div>

                </section>
                <!--   🛑 Product card 1
     - Ends Here  -->

                <!-- 🛑 Grid Section UNTUK MINUMAN - Ends Here -->


                {{-- ----------------------------------------------------------------------------------------------------------------------------- --}}



                {{-- GARIS BATAS UNTUK JUDUL SNACKS --}}
                <div class="text-center p-10">
                    <div class="gradient-line"></div>
                    <h1 class="font-bold text-4xl mb-4">Snack Menu</h1>
                    <h6 class="text-3xl">All Snack in here</h6>

                </div>
                {{-- END GARIS BATAS UNTUK JUDUL SNACKS --}}

                <section id="snacks"
                    class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">

                    <!--   ✅ Product card 1 - Starts Here 👇 -->
                    <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
                        <a href="">
                            <img src="https://images.unsplash.com/photo-1649261191606-cb2496e97eee?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwcm9maWxlLXBhZ2V8NDR8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                                alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
                            <div class="px-4 py-3 w-72">
                                <span class="text-gray-400 mr-3 uppercase text-xs">Brand</span>
                                <p class="text-lg font-bold text-black truncate block capitalize">Product Name</p>
                                <div class="flex items-center">
                                    <p class="text-lg font-semibold text-black cursor-auto my-3">$149</p>
                                    <del>
                                        <p class="text-sm text-gray-600 cursor-auto ml-2">$199</p>
                                    </del>
                                    <div class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                            height="20" fill="currentColor" class="bi bi-bag-plus"
                                            viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                            <path
                                                d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                        </svg></div>
                                </div>
                            </div>
                        </a>
                    </div>

                </section>


                {{-- ----------------------------------------------------------------------------------------------------------------------------- --}}



                {{-- FOOTER --}}
                <x-footer></x-footer>



</body>

</html>
