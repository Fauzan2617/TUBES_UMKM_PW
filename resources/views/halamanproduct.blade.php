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
                    <input type="text" id="searchInput" placeholder="Search here"
                        class="w-full rounded-md px-2 py-1 focus:outline-none focus:ring-2 focus:ring-gray-600 focus:border-transparent">
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
                    class="product-section w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">

                    <!--   ✅ Product card 1 - Starts Here 👇 -->
                    @foreach ($products as $product)
                        @if ($product->product_type_id == 1)
                            <div class="product-card w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl"
                                data-name="{{ strtolower($product->name) }}"
                                data-brand="{{ strtolower($product->brand ?? '') }}">
                                <!-- Card content remains the same -->
                                <a href="{{ route('detailproduct', $product->id) }}">
                                    <!-- Gambar Produk -->
                                    <img src="{{ asset('storage/' . $product->image) . '?' . time() }}" alt="{{ $product->name }}" class="h-80 w-72 object-cover rounded-t-xl" />


                                    <!-- Informasi Produk -->
                                    <div class="px-4 py-3 w-72">
                                        <span
                                            class="text-gray-400 mr-3 uppercase text-xs">{{ $product->brand ?? 'No Brand' }}</span>
                                        <p class="text-lg font-bold text-black truncate block capitalize">
                                            {{ $product->name }}
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


                {{-- ----------------------------------------------------------------------------------------------------------------------------- --}}



                {{-- GARIS BATAS UNTUK JUDUL MINUMAN --}}
                <div class="text-center p-10" id="drinks">
                    <div class="gradient-line"></div>
                    <h1 class="font-bold text-4xl mb-4">Drink Menu</h1>
                    <h6 class="text-3xl">All Drink in here</h6>

                </div>
                {{-- END GARIS BATAS UNTUK JUDUL MINUMAN --}}

                <section
                    class="product-section w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">

                    <!--   ✅ Product card 1 - Starts Here 👇 -->
                    @foreach ($products as $product)
                        @if ($product->product_type_id == 2)
                            <div class="product-card w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl"
                                data-name="{{ strtolower($product->name) }}"
                                data-brand="{{ strtolower($product->brand ?? '') }}">
                                <a href="">
                                    <!-- Gambar Produk -->
                                    <img src="{{ asset('storage/' . $product->image) . '?' . time() }}" alt="{{ $product->name }}" class="h-80 w-72 object-cover rounded-t-xl" />


                                    <!-- Informasi Produk -->
                                    <div class="px-4 py-3 w-72">
                                        <span
                                            class="text-gray-400 mr-3 uppercase text-xs">{{ $product->brand ?? 'No Brand' }}</span>
                                        <p class="text-lg font-bold text-black truncate block capitalize">
                                            {{ $product->name }}
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
                    class="product-section w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">

                    <!--   ✅ Product card 1 - Starts Here 👇 -->
                    @foreach ($products as $product)
                        @if ($product->product_type_id == 3)
                            <div class="product-card w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl"
                                data-name="{{ strtolower($product->name) }}"
                                data-brand="{{ strtolower($product->brand ?? '') }}">
                                <a href="">
                                    <!-- Gambar Produk -->
                                    <img src="{{ asset('storage/' . $product->image) . '?' . time() }}" alt="{{ $product->name }}" class="h-80 w-72 object-cover rounded-t-xl" />


                                    <!-- Informasi Produk -->
                                    <div class="px-4 py-3 w-72">
                                        <span
                                            class="text-gray-400 mr-3 uppercase text-xs">{{ $product->brand ?? 'No Brand' }}</span>
                                        <p class="text-lg font-bold text-black truncate block capitalize">
                                            {{ $product->name }}
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


                {{-- ----------------------------------------------------------------------------------------------------------------------------- --}}



                {{-- FOOTER --}}
                <x-footer></x-footer>


                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script>
                    $(document).ready(function() {
                        let searchTimer;

                        $('#searchInput').on('input', function() {
                            clearTimeout(searchTimer);

                            searchTimer = setTimeout(() => {
                                const searchQuery = $(this).val().toLowerCase();
                                filterProducts(searchQuery);
                            }, 300);
                        });

                        function filterProducts(query) {
                            // Filter products
                            $('.product-card').each(function() {
                                const $card = $(this);
                                const productName = $card.data('name');
                                const productBrand = $card.data('brand');

                                if (productName.includes(query) || productBrand.includes(query) || query === '') {
                                    $card.show();
                                    $card.removeClass('hidden'); // Tambahkan ini untuk memastikan kartu terlihat
                                } else {
                                    $card.hide();
                                    $card.addClass('hidden'); // Tambahkan class hidden ketika disembunyikan
                                }
                            });

                            // Tampilkan pesan "No results found" jika tidak ada hasil di section
                            $('.product-section').each(function() {
                                const $section = $(this);
                                const visibleCards = $section.find('.product-card:not(.hidden)').length;

                                // Hapus pesan "No results" yang ada sebelumnya
                                $section.find('.no-results').remove();

                                // Jika tidak ada kartu yang terlihat, tambahkan pesan
                                if (visibleCards === 0 && query !== '') {
                                    $section.append(`
                    <div class="no-results col-span-full text-center py-8 text-gray-500">
                        No results found for "${query}"
                    </div>
                `);
                                }
                            });
                        }
                    });
                </script>

</body>

</html>
