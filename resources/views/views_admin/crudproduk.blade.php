<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Produk</title>
    <link rel="icon" href="{{ asset('img/KedaiDiens.png') }}" type="image/png" sizes="512x512">
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
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
    {{-- UI PINES --}}
    <script src="https://unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- END PINES  --}}
    {{-- Logo Situs --}}
    <link rel="icon" href="{{ asset('img/KedaiDiens.png') }}" type="image/png" sizes="512x512">
</head>

<body class="bg-indigo-50 min-h-screen overflow-x-hidden">
    <div class="overlay fixed inset-0 bg-indigo-900/50 z-40 hidden opacity-0 transition-opacity duration-300"></div>



    {{-- HEADER --}}
    <x-produk-admin.navbar-admin></x-produk-admin.navbar-admin>
    {{-- END HEADER --}}

    {{-- MEMBUAT PRODUK TAMBAHAN  --}}
    <div class="container mx-auto p-4">
        <!-- Page Title -->
        <h1 class="text-3xl font-bold text-[black] mb-6">Create Produk</h1>

        <form action="{{ route('views_admin.crudproduk') }}" method="POST" enctype="multipart/form-data"
            class="grid grid-cols-1 gap-6">
            @csrf <!-- Token Laravel -->

            <!-- Nama Produk -->
            <div class="p-2">
                <input type="text" id="name" name="name" placeholder="Name Produk"
                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-[#8c0327] focus:ring-[#8c0327] focus:ring-opacity-50 p-2"
                    style="background-color: #f6f6f6;" required>
            </div>

            <!-- Kategori Produk -->
            <div class="p-2">
                <select id="product_type_id" name="product_type_id"
                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-[#8c0327] focus:ring-[#8c0327] focus:ring-opacity-50 p-2"
                    style="background-color: #f6f6f6;" required>
                    <option value="">Select a category product</option>
                    @foreach ($productTypes as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Deskripsi dan Upload Gambar -->
            <div class="p-2 grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Deskripsi -->
                <div>
                    <textarea id="description" name="description" rows="3" placeholder="Description Detail Product"
                        class="block w-full h-48 rounded-md border-gray-300 shadow-sm focus:border-[#8c0327] focus:ring-[#8c0327] focus:ring-opacity-50 p-2"
                        style="background-color: #f6f6f6;"></textarea>
                </div>

                <!-- Upload Gambar -->
                <div>
                    <label for="image-upload"
                        class="block w-full h-48 border-2 border-dashed border-gray-300 rounded-md cursor-pointer flex flex-col items-center justify-center bg-[#f6f6f6] hover:bg-gray-50">
                        <div class="text-center">
                            <div class="mb-2">
                                <button type="button"
                                    class="bg-[#8c0327] hover:bg-[#6b0220] text-white rounded-full py-2 px-4">Select
                                    from the computer</button>
                            </div>
                            <p class="text-gray-500">or drag photo here</p>
                            <p class="text-gray-500 text-sm mt-1">PNG, JPG, SVG</p>
                        </div>
                    </label>
                    <input id="image-upload" name="image" type="file" accept="image/*" class="sr-only">
                </div>
            </div>

            <!-- Harga Produk -->
            <div class="p-2">
                <input type="number" id="price" name="price" placeholder="Harga"
                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-[#8c0327] focus:ring-[#8c0327] focus:ring-opacity-50 p-2"
                    style="background-color: #f6f6f6;" required>
            </div>

            <!-- Brand Produk -->
            <div class="p-2">
                <input type="text" id="brand" name="brand" placeholder="Brand"
                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-[#8c0327] focus:ring-[#8c0327] focus:ring-opacity-50 p-2"
                    style="background-color: #f6f6f6;">
            </div>

            <!-- Tombol Submit -->
            <div class="col-span-full mt-6 p-2">
                <button type="submit"
                    class="block w-full bg-[#8c0327] hover:bg-[#6b0220] text-white font-bold py-3 px-4 rounded-full">
                    Add Produk
                </button>
            </div>
        </form>
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
