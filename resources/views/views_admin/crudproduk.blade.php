<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Produk</title>
    <link rel="icon" href="{{ asset ('img/KedaiDiens.png') }}" type="image/png" sizes="512x512">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
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
            from { opacity: 0; }
            to { opacity: 1; }
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
    <link rel="icon" href="{{ asset ('img/KedaiDiens.png') }}" type="image/png" sizes="512x512">
</head>
<body class="bg-indigo-50 min-h-screen overflow-x-hidden">
    <div class="overlay fixed inset-0 bg-indigo-900/50 z-40 hidden opacity-0 transition-opacity duration-300"></div>



    {{-- HEADER --}}
    <header class="fixed w-full bg-white text-indigo-800 z-50 shadow-lg animate-slide-down">
        <div class="max-w-7xl mx-auto px-4 py-2 flex items-center justify-between h-16">
            <button class="mobile-menu-button p-2 lg:hidden">
                <span class="material-icons-outlined text-2xl">menu</span>
            </button>
            <div class="text-xl font-bold text-blue-900">
                Admin<span class="text-indigo-800">Panel</span>
            </div>
            <div class="flex items-center space-x-2">
                <span class="material-icons-outlined p-2 text-2xl cursor-pointer hover:text-indigo-800 transition-transform duration-300 hover:scale-110 hidden md:block">search</span>
                <span class="material-icons-outlined p-2 text-2xl cursor-pointer hover:text-indigo-800 transition-transform duration-300 hover:scale-110 hidden md:block">notifications</span>
                <img class="w-10 h-10 rounded-full transition-transform duration-300 hover:scale-110 object-cover"
                     src="https://i.pinimg.com/564x/de/0f/3d/de0f3d06d2c6dbf29a888cf78e4c0323.jpg"
                     alt="Profile">
            </div>
        </div>
    </header>
    {{-- END HEADER --}}


    {{-- LEFT MENU --}}
    <div class="pt-16 max-w-7xl mx-auto flex">
        <aside class="sidebar fixed lg:static w-[240px] bg-indigo-50 h-[calc(100vh-4rem)] lg:h-auto transform -translate-x-full lg:translate-x-0 transition-transform duration-300 z-45 overflow-y-auto p-4">
            <div class="bg-white rounded-xl shadow-lg mb-6 p-4 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                <a href="#" class="flex items-center text-gray-600 hover:text-indigo-800 py-4 transition-all duration-300 hover:translate-x-1">
                    <span class="material-icons-outlined mr-2">dashboard</span>
                    Home
                    <span class="material-icons-outlined ml-auto">keyboard_arrow_right</span>
                </a>
                <a href="#" class="flex items-center text-gray-600 hover:text-indigo-800 py-4 transition-all duration-300 hover:translate-x-1">
                    <span class="material-icons-outlined mr-2">tune</span>
                    CRUD Produk
                    <span class="material-icons-outlined ml-auto">keyboard_arrow_right</span>
                </a>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-4 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                <a href="#" class="flex items-center text-gray-600 hover:text-indigo-800 py-4 transition-all duration-300 hover:translate-x-1">
                    <span class="material-icons-outlined mr-2">face</span>
                    Profile
                    <span class="material-icons-outlined ml-auto">keyboard_arrow_right</span>
                </a>
                <a href="#" class="flex items-center text-gray-600 hover:text-indigo-800 py-4 transition-all duration-300 hover:translate-x-1">
                    <span class="material-icons-outlined mr-2">power_settings_new</span>
                    Log out
                    <span class="material-icons-outlined ml-auto">keyboard_arrow_right</span>
                </a>
            </div>
        </aside>
        {{-- LEFT MENU --}}





    {{-- MEMBUAT PRODUK TAMBAHAN  --}}
    <div class="container mx-auto p-4">
        <!-- Page Title -->
        <h1 class="text-3xl font-bold text-[black] mb-6">Create Produk</h1>

        <form class="grid grid-cols-1 gap-6">
          <!-- Title -->
          <div class="p-2">
            <input type="text" id="title" name="title" placeholder="Name Produk" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-[#8c0327] focus:ring-[#8c0327] focus:ring-opacity-50 p-2" style="background-color: #f6f6f6;">
          </div>

          <!-- Category -->
          <div class="p-2">
            <select id="category" name="category" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-[#8c0327] focus:ring-[#8c0327] focus:ring-opacity-50 p-2" style="background-color: #f6f6f6;">
              <option value="">Select a category product</option>
              <option>Noodles</option>
              <option>Drink</option>
              <option>Snack</option>
            </select>
          </div>

          <!-- Description and Image Upload -->
          <div class="p-2 grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Description -->
            <div>
              <textarea id="description" name="description" rows="3" placeholder="Description Detail Product" class="block w-full h-48 rounded-md border-gray-300 shadow-sm focus:border-[#8c0327] focus:ring-[#8c0327] focus:ring-opacity-50 p-2" style="background-color: #f6f6f6;"></textarea>
            </div>

            <!-- Image Upload -->
            <div>
              <label for="image-upload" class="block w-full h-48 border-2 border-dashed border-gray-300 rounded-md cursor-pointer flex flex-col items-center justify-center bg-[#f6f6f6] hover:bg-gray-50">
                <div class="text-center">
                  <div class="mb-2">
                    <button type="button" class="bg-[#8c0327] hover:bg-[#6b0220] text-white rounded-full py-2 px-4">Select from the computer</button>
                  </div>
                  <p class="text-gray-500">or drag photo here</p>
                  <p class="text-gray-500 text-sm mt-1">PNG, JPG, SVG</p>
                </div>
              </label>
              <input id="image-upload" name="image" type="file" accept="image/*" class="sr-only">
            </div>
          </div>

          <!-- Location -->
          <div class="p-2">
            <input type="text" id="location" name="location" placeholder="Harga" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-[#8c0327] focus:ring-[#8c0327] focus:ring-opacity-50 p-2" style="background-color: #f6f6f6;">
          </div>

         <!-- Location -->
         <div class="p-2">
            <input type="text" id="location" name="location" placeholder="Brand" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-[#8c0327] focus:ring-[#8c0327] focus:ring-opacity-50 p-2" style="background-color: #f6f6f6;">
          </div>

          <!-- Registration Button -->
          <div class="col-span-full mt-6 p-2">
            <button type="submit" class="block w-full bg-[#8c0327] hover:bg-[#6b0220] text-white font-bold py-3 px-4 rounded-full">
              Register for Event
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