<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Logo Situs --}}
    <link rel="icon" href="{{ asset('img/KedaiDiens.png') }}" type="image/png" sizes="512x512">

    {{-- End Logo --}}
    <title>Kedai Diens</title>
    {{-- font aws --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- font aws --}}
    {{-- UI PINES --}}
    <script src="https://unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- END PINES  --}}
    <style>
        .padding {
            padding-bottom: 20px;
            /* Default padding */
        }

        @media (max-width: 1669px) {
            .padding {
                padding-bottom: 10em;
                /* Mengurangi padding-bottom pada layar kecil */
            }
        }

        @media (max-width: 480px) {
            .padding {
                padding-bottom: 20em;
                /* Padding lebih kecil untuk perangkat sangat kecil */
            }

            @media (max-width: 768px) {
                .box {
                    flex: 1 1 100%;
                }

                header {
                    padding: 0.5rem;
                }
            }

        }
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




                <!-- Main Hero Content -->
                <div class="relative isolate px-6 pt-14 lg:px-8">
                    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
                        aria-hidden="true">
                        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#d66c7a] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                        </div>
                    </div>
                    <div class="mx-auto max-w-2xl py-32 sm:py-20 lg:py-5">
                        <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                        </div>
                        <div
                            class="container max-w-sm py-30 mx-auto mt-px text-left sm:max-w-md md:max-w-lg sm:px-4 md:max-w-none md:text-center">
                            <h1
                                class="mx-auto text-3xl font-bold leading-10 tracking-tight text-left text-gray-900 md:text-center sm:text-4xl md:text-7xl lg:text-8xl">
                                Welcome to Kedai Diens<br class="hidden sm:block"> Noodles for Every Taste !</h1>
                            <div class="mx-auto mt-5 text-gray-400 md:mt-8 md:max-w-lg md:text-center md:text-xl">Enjoy
                                All
                                Noodle Variants at Kedai Diens !</div>
                            <div
                                class="flex flex-col items-center justify-center mt-8 space-y-4 text-center sm:flex-row sm:space-y-0 sm:space-x-4">
                                <span class="relative inline-flex w-full md:w-auto">
                                    <a href="{{ route('halamanproduct') }}"
                                        class="inline-flex items-center justify-center w-full px-8 py-4 text-base font-medium leading-6 text-white bg-gray-900 border border-transparent rounded-full xl:px-10 md:w-auto hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800">
                                        Purchase Now
                                    </a>
                                </span>
                                <span class="relative inline-flex w-full md:w-auto">
                                    <a href="{{ route('about') }}"
                                        class="inline-flex items-center justify-center w-full px-8 py-4 text-base font-medium leading-6 text-gray-900 bg-gray-100 border border-transparent rounded-full xl:px-10 md:w-auto hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-200">Learn
                                        About Us</a>
                                </span>
                            </div>
                        </div>
                        <!-- End Main Hero Content -->

                    </div>
        </section>
    </header>





    {{-- MENU MENU MAKANAN DAN MINUMAN --}}
    <section class="relative w-full bg-white">
        <div class="absolute w-full h-32 bg-gradient-to-b from-gray-100 to-white"></div>
        <div class="relative w-full px-5 py-10 mx-auto sm:py-12 md:py-16 md:px-10 max-w-7xl">

            <h1 class="mb-1 text-4xl font-extrabold leading-none text-gray-900 lg:text-5xl xl:text-6xl sm:mb-3"><a
                    href="#_">Noodles,Drink And Snack</a></h1>
            <p class="text-lg font-medium text-gray-500 sm:text-2xl">All Variant Noodles In Here</p>
            <div class="flex grid h-full grid-cols-12 gap-10 pb-10 mt-8 sm:mt-16">
                <div
                    class="relative flex flex-col items-start justify-end h-full col-span-12 overflow-hidden rounded-xl group md:col-span-6 xl:col-span-4">
                    <a href="{{ route('halamanproduct') }}#noodles"> <img src="{{ asset('img/KedaiDiens.png') }}"
                            class="block w-full transition duration-300 ease-in-out transform bg-center bg-cover h-96 hover:scale-110"
                            alt="">
                    </a>
                    <div
                        class="relative z-20 w-full h-auto py-8 text-white bg-purple-500 border-t-0 border-yellow-200 px-7">
                        <a href="#_"
                            class="inline-block text-xs font-semibold absolute top-0 -mt-3.5 rounded-full px-4 py-2 uppercase text-purple-500 bg-white">Kedai
                            Diens</a>
                        <h2 class="mb-5 text-5xl font-bold"><a href="#_">Noodles</a></h2>
                        <p class="mb-2 text-lg font-normal text-purple-100 opacity-100">Savor the rich flavors and
                            perfect texture of our premium noodles, crafted to satisfy every craving.</p>

                    </div>
                </div>

                <div
                    class="relative flex flex-col items-start justify-end h-full col-span-12 overflow-hidden rounded-xl group md:col-span-6 xl:col-span-4">
                    <a href="{{ route('halamanproduct') }}#drinks"
                        class="block w-full transition duration-300 ease-in-out transform bg-center bg-cover h-96 hover:scale-110"
                        style="background-image:url('https://cdn.devdojo.com/images/may2021/orange.jpg')">
                    </a>
                    <div
                        class="relative z-20 w-full h-auto py-8 text-white bg-blue-400 border-t-0 border-yellow-200 px-7">
                        <a href="{{ route('halamanproduct') }}#drinks"
                            class="inline-block text-xs font-semibold absolute top-0 -mt-3.5 rounded-full px-4 py-2 uppercase text-blue-500 bg-white">Kedai
                            Diens</a>
                        <h2 class="mb-5 text-5xl font-bold"><a href="{{ route('halamanproduct') }}#drinks">Drinks</a>
                        </h2>
                        <p class="mb-2 text-lg font-normal text-blue-100 opacity-100">Refresh your day with our
                            flavorful drinks, from fruity delights to creamy indulgences.</p>

                    </div>
                </div>

                <div
                    class="relative flex flex-col items-start justify-end h-full col-span-12 overflow-hidden rounded-xl group md:col-span-6 xl:col-span-4">
                    <a href="{{ route('halamanproduct') }}#snacks"
                        class="block w-full transition duration-300 ease-in-out transform bg-center bg-cover h-96 hover:scale-110"
                        style="background-image:url('https://cdn.devdojo.com/images/may2021/orange.jpg')">
                    </a>
                    <div
                        class="relative z-20 w-full h-auto py-8 text-white bg-blue-400 border-t-0 border-yellow-200 px-7">
                        <a href="{{ route('halamanproduct') }}#snacks"
                            class="inline-block text-xs font-semibold absolute top-0 -mt-3.5 rounded-full px-4 py-2 uppercase text-blue-500 bg-white">Kedai
                            Diens</a>
                        <h2 class="mb-5 text-5xl font-bold"><a href="{{ route('halamanproduct') }}#snacks">Snacks</a>
                        </h2>
                        <p class="mb-2 text-lg font-normal text-blue-100 opacity-100">Enjoy our crispy, savory, and
                            sweet snacks—perfect for any moment. And Enjoy with Family.</p>

                    </div>
                </div>

                <div class="grid grid-cols-12 col-span-12 gap-7">
                    <div
                        class="flex flex-col items-start col-span-12 overflow-hidden shadow-sm rounded-xl md:col-span-6 lg:col-span-4">
                        <a href="#_" class="block transition duration-200 ease-out transform hover:scale-110">
                            <img class="object-cover w-full shadow-sm max-h-56"
                                src="https://cdn.devdojo.com/images/may2021/workstation.jpg">
                        </a>
                        <div
                            class="relative flex flex-col items-start px-6 bg-white border border-t-0 border-gray-200 py-7 rounded-b-2xl">
                            <div
                                class="bg-indigo-400 absolute top-0 -mt-3 flex items-center px-3 py-1.5 leading-none w-auto inline-block rounded-full text-xs font-medium uppercase text-white inline-block">
                                <span>Noodles</span>
                            </div>
                            <h2 class="text-base font-bold sm:text-lg md:text-xl"><a href="#_">Bangladesh
                                    Noodles</a></h2>
                            <p class="mt-2 text-sm text-gray-500">Authentic noodles with rich spices from Bangladesh.
                                Savory, spicy, and full of enticing aromas. Perfect for any time!</p>
                            <button type="button"
                                class="inline-flex items-center justify-center w-full px-4 py-2 text-sm font-medium tracking-wide text-white transition-colors duration-200 rounded-md mt-3 bg-neutral-950 hover:bg-neutral-900 focus:ring-2 focus:ring-offset-2 focus:ring-neutral-900 focus:shadow-outline focus:outline-none">
                                Detail Produk
                            </button>
                        </div>
                    </div>

                    <div
                        class="flex flex-col items-start col-span-12 overflow-hidden shadow-sm rounded-xl md:col-span-6 lg:col-span-4">
                        <a href="#_" class="block transition duration-200 ease-out transform hover:scale-110">
                            <img class="object-cover w-full shadow-sm max-h-56"
                                src="https://cdn.devdojo.com/images/may2021/snacks.jpg">
                        </a>
                        <div
                            class="relative flex flex-col items-start px-6 bg-white border border-t-0 border-gray-200 py-7 rounded-b-2xl">
                            <div
                                class="bg-red-400 absolute top-0 -mt-3 flex items-center px-3 py-1.5 leading-none w-auto inline-block rounded-full text-xs font-medium uppercase text-white inline-block">
                                <span>Noodles</span>
                            </div>
                            <h2 class="text-base font-bold sm:text-lg md:text-xl"><a href="#_">Aceh Noodlesgit
                                </a></h2>
                            <p class="mt-2 text-sm text-gray-500">Traditional Indonesian noodles with bold spices and
                                rich flavors. A perfect blend of savory, spicy, and aromatic goodness!</p>
                            <button type="button"
                                class="inline-flex items-center justify-center w-full px-4 py-2 text-sm font-medium tracking-wide text-white transition-colors duration-200 rounded-md mt-3 bg-neutral-950 hover:bg-neutral-900 focus:ring-2 focus:ring-offset-2 focus:ring-neutral-900 focus:shadow-outline focus:outline-none">
                                Detail Produk
                            </button>
                        </div>
                    </div>

                    <div
                        class="flex flex-col items-start col-span-12 overflow-hidden shadow-sm rounded-xl md:col-span-6 lg:col-span-4">
                        <a href="#_" class="block transition duration-200 ease-out transform hover:scale-110">
                            <img class="object-cover w-full shadow-sm max-h-56"
                                src="https://cdn.devdojo.com/images/may2021/snacks.jpg">
                        </a>
                        <div
                            class="relative flex flex-col items-start px-6 bg-white border border-t-0 border-gray-200 py-7 rounded-b-2xl">
                            <div
                                class="bg-red-400 absolute top-0 -mt-3 flex items-center px-3 py-1.5 leading-none w-auto inline-block rounded-full text-xs font-medium uppercase text-white inline-block">
                                <span>Drink</span>
                            </div>
                            <h2 class="text-base font-bold sm:text-lg md:text-xl"><a href="#_">Red Genuine</a>
                            </h2>
                            <p class="mt-2 text-sm text-gray-500">A refreshing mix of mint, lime, and sparkling soda.
                                Perfect to cool you down and brighten your day! And cool in your mounth</p>
                            <button type="button"
                                class="inline-flex items-center justify-center w-full px-4 py-2 text-sm font-medium tracking-wide text-white transition-colors duration-200 rounded-md mt-3 bg-neutral-950 hover:bg-neutral-900 focus:ring-2 focus:ring-offset-2 focus:ring-neutral-900 focus:shadow-outline focus:outline-none">
                                Detail Produk
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- AKHIR MENU MAKANAN DAN MINUMAN  --}}

    {{-- MAPS --}}
    <div class="flex flex-wrap justify-center items-center h-auto p-5 pl-[6%] pt-[9%]">
        <div class="w-full md:w-2/5 p-4">
            <h2 class="text-xl md:text-7xl font-semibold mb-5">We Location 📍</h2>
            <form class="space-y-4">
                <div>
                    <input type="text" id="fullName" name="fullName" placeholder='Full Name'
                        class="mt-1 p-4 w-full border rounded-md" />
                </div>
                <div>
                    <input type="email" id="email" name="email" placeholder='Email'
                        class="mt-1 p-4 w-full border rounded-md" />
                </div>
                <div>
                    <textarea id="message" name="message" placeholder='Message' class="mt-1 p-4 w-full border rounded-md"
                        rows="4"></textarea>
                </div>
                <button type="submit" class="px-8 py-4 bg-black text-white hover:bg-blue-700">Submit</button>
            </form>
        </div>
        <div class="w-full md:w-1/2 p-4 flex justify-center">
            <div class="rounded-full overflow-hidden w-[35rem] h-[35rem]">
                <iframe class="w-[35rem] h-[35rem]"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7613778346804!2d107.56109567483539!3d-6.919105493080502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e52b14079f63%3A0x4415d90d080d6829!2sKEDAI%20DIEN&#39;S!5e0!3m2!1sid!2sid!4v1733150776172!5m2!1sid!2sid"
                    allowFullScreen="" loading="lazy" referrerPolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    {{-- MAPS --}}


    {{-- Perusahaan kepercayaan --}}
    <section class="bg-white pt-7 pb-14">
        <div class="container px-8 mx-auto sm:px-12 lg:px-20">
            <h1 class="text-sm font-bold tracking-wide text-center text-gray-800 uppercase mb-7">Trusted by top-leading
                companies.</h1>
            <div class="flex grid items-center justify-center grid-cols-4 grid-cols-12 gap-y-8">
                <div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-3 xl:col-span-2">
                    <img src="https://cdn.devdojo.com/tails/images/disney-plus.svg" alt="Disney Plus"
                        class="block object-contain h-12" />
                </div>
                <div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-3 xl:col-span-2">
                    <img src="https://cdn.devdojo.com/tails/images/google.svg" alt="Google"
                        class="block object-contain h-9" />
                </div>
                <div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-3 xl:col-span-2">
                    <img src="https://cdn.devdojo.com/tails/images/hubspot.svg" alt="Hubspot"
                        class="block object-contain h-9" />
                </div>
                <div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-3 xl:col-span-2">
                    <img src="https://cdn.devdojo.com/tails/images/youtube.svg" alt="Youtube"
                        class="block object-contain h-7 lg:h-8" />
                </div>
                <div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-6 xl:col-span-2">
                    <img src="https://cdn.devdojo.com/tails/images/slack.svg" alt="Slack"
                        class="block object-contain h-9" />
                </div>
                <div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-6 xl:col-span-2">
                    <img src="https://cdn.devdojo.com/tails/images/shopify.svg" alt="Shopify"
                        class="block object-contain h-9" />
                </div>
            </div>
        </div>
    </section>
    {{-- End Perusahaan --}}


    {{-- FOOTER --}}
    <section class="text-gray-700 bg-white body-font" {!! $attributes ?? '' !!}>
        <div class="container flex flex-col items-center px-8 py-8 mx-auto max-w-7xl sm:flex-row">
            <a href="#_" class="text-xl font-black leading-none text-gray-900 select-none logo">KedaiDiens<span
                    class="text-indigo-600">.</span></a>
            <p class="mt-4 text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l sm:border-gray-200 sm:mt-0">&copy; 2024
                KedaiDiens - Enjoy All Noodle Variants at Kedai Diens!
            </p>
            <span class="inline-flex justify-center mt-4 space-x-5 sm:ml-auto sm:mt-0 sm:justify-start">
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Facebook</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                            clip-rule="evenodd" />
                    </svg>
                </a>

                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Instagram</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                            clip-rule="evenodd" />
                    </svg>
                </a>

                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Twitter</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path
                            d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                    </svg>
                </a>

                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">GitHub</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                            clip-rule="evenodd" />
                    </svg>
                </a>

                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Dribbble</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </span>
        </div>
    </section>





    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
