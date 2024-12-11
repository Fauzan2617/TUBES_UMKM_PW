<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Product</title>
    <link rel="icon" href="{{ asset ('img/KedaiDiens.png') }}" type="image/png" sizes="512x512">
     {{-- UI PINES --}}
     <script src="https://unpkg.com/alpinejs" defer></script>
     <script src="https://cdn.tailwindcss.com"></script>
     {{-- END PINES  --}}
</head>
<body>

    <!-- Navbar -->
    <x-navbar></x-navbar>
    <!-- Navbar end -->

    <div class="bg-gray-100 bg-white py-8">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row -mx-4">
                <div class="md:flex-1 px-4">
                    <div class="h-[460px] rounded-lg bg-gray-300 dark:bg-gray-700 mb-4">
                        <img class="w-full h-full object-cover" src="https://cdn.pixabay.com/photo/2020/05/22/17/53/mockup-5206355_960_720.jpg" alt="Product Image">
                    </div>
                    <div class="flex -mx-2 mb-4">

                    </div>
                </div>
                <div class="md:flex-1 px-4">
                    <h2 class="text-2xl font-bold text-gray-800 dark:text-black mb-2">Product Name</h2>
                    <p class="text-gray-600 dark:text-black text-sm mb-4">
                        Brand
                    </p>
                    <div class="flex mb-4">
                        <div class="mr-4">
                            <span class="font-bold text-gray-700 dark:text-black">Price:</span>
                            <span class="text-gray-600 dark:text-black">$29.99</span>
                        </div>
                        <div>
                            <span class="font-bold text-gray-700 dark:text-black">Availability:</span>
                            <span class="text-gray-600 dark:text-black">In Stock</span>
                        </div>
                    </div>

                    <div>
                        <span class="font-bold text-gray-700 dark:text-black">Product Description:</span>
                        <p class="text-gray-600 dark:text-black text-sm mt-2">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                            sed ante justo. Integer euismod libero id mauris malesuada tincidunt. Vivamus commodo nulla ut
                            lorem rhoncus aliquet. Duis dapibus augue vel ipsum pretium, et venenatis sem blandit. Quisque
                            ut erat vitae nisi ultrices placerat non eget velit. Integer ornare mi sed ipsum lacinia, non
                            sagittis mauris blandit. Morbi fermentum libero vel nisl suscipit, nec tincidunt mi consectetur.
                        </p>
                    </div>
                    <div class="mb-4">
                    </div>
                    <div class="mb-4">
                        <span class="font-bold text-gray-700 dark:text-black"> Select Buy :</span>
                        <div class="flex items-center mt-2">
                            <a href="https://shopee.co.id/universal-link/now-food/shop/21694323?deep_and_deferred=1&shareChannel=copy_link" target="_blank" rel="noopener noreferrer"><img src="{{ asset('img/shoppe.png') }}" alt="" width="150" class="py-2 px-4 hover:bg-gray-400"></a>
                            <a href="https://r.grab.com/g/6-20241211_175759_3d0c41b2-04cd-42d3-80e3-5e448587e125_MEXMPS-6-C6TVDCEVTBMCAX" target="_blank" rel="noopener noreferrer"><img src="{{ asset('img/grab.png') }}" alt="" width="150" class="py-2 px-4 hover:bg-gray-400"></a>
                            <a href="https://wa.me/6285701756614?text=Halo%20saya%20tertarik%20dengan%20produk%20Anda" target="_blank" rel="noopener noreferrer"><img src="{{ asset('img/wa.png') }}" alt="" width="120 " class="py-2 px-4 hover:bg-gray-400"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- FOOTER --}}
    <x-footer></x-footer>

</body>
</html>
