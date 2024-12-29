<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard Admin</title>
        <link rel="icon" href="{{ asset ('img/KedaiDiens.png') }}" type="image/png" sizes="512x512">
        <script src="https://unpkg.com/alpinejs" defer></script>
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>
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
    </head>


    <body class="bg-indigo-50 min-h-screen overflow-x-hidden">
        <div class="overlay fixed inset-0 bg-indigo-900/50 z-40 hidden opacity-0 transition-opacity duration-300"></div>


        {{-- HEADER --}}
        <x-produk-admin.navbar-admin></x-produk-admin.navbar-admin>
        {{-- END HEADER --}}




        <div class="pt-16 max-w-7xl mx-auto flex">


            <main class="flex-1 p-4">
                <div class="flex flex-col lg:flex-row gap-4 mb-6">
                    <div class="flex-1 bg-indigo-100 border border-indigo-200 rounded-xl p-6 animate-fade-in">
                        <h2 class="text-4xl md:text-5xl text-blue-900">
                            Welcome <br><strong>Dashbord</strong>
                        </h2>
                        <span class="inline-block mt-8 px-8 py-2 rounded-full text-xl font-bold text-white bg-indigo-800">
                            Fauzan
                        </span>
                    </div>

                    <div class="flex-1 bg-blue-100 border border-blue-200 rounded-xl p-6 animate-fade-in">
                        <h2 class="text-4xl md:text-5xl text-blue-900">
                            Inbox <br><strong>23</strong>
                        </h2>
                        <a href="/views_admin/profile" class="inline-block mt-8 px-8 py-2 rounded-full text-xl font-bold text-white bg-blue-800 hover:bg-blue-900 transition-transform duration-300 hover:scale-105">
                            See messages
                        </a>
                    </div>
                </div>

                    <div class="bg-white rounded-xl shadow-lg p-10 h-64 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl animate-slide-up" style="animation-delay: 0.3s">


                        <li
                         class="w-full text-sm font-semibold text-slate-900 p-6 bg-white border border-slate-900/10 bg-clip-padding shadow-md shadow-slate-900/5 rounded-lg flex flex-col justify-center">
                     <span class="mb-1 text-teal-400 font-display text-5xl">45K+</span>
                     visit
                    </li>

                    </div>


                <div class="bg-white rounded-xl shadow-lg p-10 h-64 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl animate-slide-up" style="animation-delay: 0.3s">
                    <li
        class="w-full text-sm font-semibold text-slate-900 p-6 bg-white border border-slate-900/10 bg-clip-padding shadow-md shadow-slate-900/5 rounded-lg flex flex-col justify-center">
        <span class="mb-1 text-teal-400 font-display text-5xl">78K+</span>
        views
    </li>

                </div>








            </main>

            <div class="bg-gray-100 p-6">
                <h2 class="text-lg font-bold mb-10">Comments</h2>
                <!-- Wrapper scrollable -->
                <div class="flex flex-col space-y-6 max-h-64 overflow-y-auto border border-gray-300 rounded-lg p-4">
                    @forelse ($comments as $comment)
                        <div class="bg-white p-4 rounded-lg shadow-md">
                            <h3 class="text-lg font-bold">{{ $comment->name }}</h3>
                            <p class="text-gray-700 text-sm mb-2">Posted on {{ $comment->created_at->format('F d, Y') }}</p>
                            <p class="text-gray-700">
                                {{ $comment->comment }}
                            </p>
                        </div>
                    @empty
                        <p class="text-gray-500">No comments yet. Be the first to comment!</p>
                    @endforelse
                </div>

                <form class="bg-white p-4 rounded-lg shadow-md mt-4" {{ route('about.comments') }} method="POST">
                    @csrf
                    
                    <h3 class="text-lg font-bold mb-2">Add a comment</h3>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="name">
                            Name
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="name" type="text" placeholder="Enter your name">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="comment">
                            Comment
                        </label>
                        <textarea
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="comment" rows="3" placeholder="Enter your comment"></textarea>
                    </div>
                    <button
                        class="bg-cyan-500 hover:bg-cyan-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Submit
                    </button>
                </form>
            </div>

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