<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile Admin</title>
    <link rel="icon" href="{{ asset('img/KedaiDiens.png') }}" type="image/png" sizes="512x512">

    {{-- font aws --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- font aws --}}

    {{-- UI PINES --}}
    <script src="https://unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- END PINES  --}}
</head>


<body class="bg-indigo-50 min-h-screen overflow-x-hidden">
    <div class="overlay fixed inset-0 bg-indigo-900/50 z-40 hidden opacity-0 transition-opacity duration-300"></div>

    {{-- navbar --}}
    <x-produk-admin.navbar-admin></x-produk-admin.navbar-admin>
    {{-- End Navbar --}}

    <!-- Profile Section -->
    <div class="bg-white w-full flex flex-col gap-5 px-3 md:px-16 lg:px-28 md:flex-row text-[#161931]">
        <aside class="hidden py-4 md:w-1/3 lg:w-1/4 md:block">
        </aside>
        <main class="w-full min-h-screen py-1 md:w-2/3 lg:w-3/4">
            <div class="p-2 md:p-4">
                <div class="w-full px-6 pb-8 mt-8 sm:max-w-xl sm:rounded-lg">
                    <h2 class="pl-6 text-2xl font-bold sm:text-xl">Profile</h2>



                        <div class="items-center mt-8 sm:mt-14 text-[#202142]">
                            <div class="mb-2 sm:mb-6">
                                <label for="first_name"
                                    class="block mb-2 text-sm font-medium text-indigo-900 dark:text-white">Your
                                    Name</label>
                                <input type="text" id="first_name"
                                    class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 "
                                    placeholder="Your name" value="{{ auth()->user()->name }}" required>
                            </div>

                            <div class="mb-2 sm:mb-6">
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-indigo-900 dark:text-white">Your
                                    email</label>
                                <input type="email" id="email"
                                    class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 "
                                    placeholder="your.email@mail.com" value="{{ auth()->user()->email }}" required>
                            </div>

                            <div class="mb-2 sm:mb-6">
                                <label for="profession"
                                    class="block mb-2 text-sm font-medium text-indigo-900 dark:text-white">Your
                                    Bio</label>
                                <input type="text" id="Bio"
                                    class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 "
                                    placeholder="Write your bio here..." required>
                            </div>

                            <div class="flex justify-end">
                                <button type="submit"
                                    class="text-white bg-indigo-700  hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">Save</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
