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
                    @foreach ($products as $product)
                        @if ($product->product_type_id == 1)
                            <div
                                class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
                                <!-- Tambahkan link ke halaman edit -->
                                <a href="">
                                    <!-- Gambar Produk -->
                                    <img src="{{ $product->image ? asset('storage/images/products/' . $product->image) : 'https://via.placeholder.com/300' }}"
                                        alt="{{ $product->name }}" class="h-80 w-72 object-cover rounded-t-xl" />


                                    <!-- Informasi Produk -->
                                    <div class="px-4 py-3 w-72">
                                        <span
                                            class="text-gray-400 mr-3 uppercase text-xs">{{ $product->brand ?? 'No Brand' }}</span>
                                        <p class="text-lg font-bold text-black truncate block capitalize">
                                            {{ $product->name }}
                                        </p>
                                        <div class="flex items-center">
                                            <p class="text-lg font-semibold text-black cursor-auto my-3">
                                                ${{ number_format($product->price, 2) }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endif
                    @endforeach
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
                    @foreach ($products as $product)
                        @if ($product->product_type_id == 2)
                            <div
                                class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
                                <!-- Tambahkan link ke halaman edit -->
                                <a href="">
                                    <!-- Gambar Produk -->
                                    <img src="{{ $product->image ? asset('storage/images/products/' . $product->image) : 'https://via.placeholder.com/300' }}"
                                        alt="{{ $product->name }}" class="h-80 w-72 object-cover rounded-t-xl" />


                                    <!-- Informasi Produk -->
                                    <div class="px-4 py-3 w-72">
                                        <span
                                            class="text-gray-400 mr-3 uppercase text-xs">{{ $product->brand ?? 'No Brand' }}</span>
                                        <p class="text-lg font-bold text-black truncate block capitalize">
                                            {{ $product->name }}
                                        </p>
                                        <div class="flex items-center">
                                            <p class="text-lg font-semibold text-black cursor-auto my-3">
                                                ${{ number_format($product->price, 2) }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endif
                    @endforeach

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
                    @foreach ($products as $product)
                        @if ($product->product_type_id == 3)
                            <div
                                class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
                                <!-- Tambahkan link ke halaman edit -->
                                <a href="">
                                    <!-- Gambar Produk -->
                                    <img src="{{ $product->image ? asset('storage/images/products/' . $product->image) : 'https://via.placeholder.com/300' }}"
                                        alt="{{ $product->name }}" class="h-80 w-72 object-cover rounded-t-xl" />


                                    <!-- Informasi Produk -->
                                    <div class="px-4 py-3 w-72">
                                        <span
                                            class="text-gray-400 mr-3 uppercase text-xs">{{ $product->brand ?? 'No Brand' }}</span>
                                        <p class="text-lg font-bold text-black truncate block capitalize">
                                            {{ $product->name }}
                                        </p>
                                        <div class="flex items-center">
                                            <p class="text-lg font-semibold text-black cursor-auto my-3">
                                                ${{ number_format($product->price, 2) }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endif
                    @endforeach
                </section>


                {{-- ----------------------------------------------------------------------------------------------------------------------------- --}}



                {{-- FOOTER --}}
                <x-footer></x-footer>



</body>

</html>
