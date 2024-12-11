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
                                    <a href="/halamanproduct"
                                        class="inline-flex items-center justify-center w-full px-8 py-4 text-base font-medium leading-6 text-white bg-gray-900 border border-transparent rounded-full xl:px-10 md:w-auto hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800">
                                        Purchase Now
                                    </a>
                                </span>
                                <span class="relative inline-flex w-full md:w-auto">
                                    <a href="/about"
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
                    <a href="/halamanproduct#noodles"> <img src="{{ asset('img/KedaiDiens.png') }}"
                            class="block w-full transition duration-300 ease-in-out transform bg-center bg-cover h-96 hover:scale-110"
                            alt="">
                    </a>
                    <div
                        class="relative z-20 w-full h-auto py-8 text-white bg-purple-500 border-t-0 border-yellow-200 px-7">
                        <a href="/halamanproduct"
                            class="inline-block text-xs font-semibold absolute top-0 -mt-3.5 rounded-full px-4 py-2 uppercase text-purple-500 bg-white">Kedai
                            Diens</a>
                        <h2 class="mb-5 text-5xl font-bold"><a href="/halamanproduct">Noodles</a></h2>
                        <p class="mb-2 text-lg font-normal text-purple-100 opacity-100">Savor the rich flavors and
                            perfect texture of our premium noodles, crafted to satisfy every craving.</p>

                    </div>
                </div>

                <div
                    class="relative flex flex-col items-start justify-end h-full col-span-12 overflow-hidden rounded-xl group md:col-span-6 xl:col-span-4">
                    <a href="/halamanproduct#drinks"
                        class="block w-full transition duration-300 ease-in-out transform bg-center bg-cover h-96 hover:scale-110"
                        style="background-image:url('https://cdn.devdojo.com/images/may2021/orange.jpg')">
                    </a>
                    <div
                        class="relative z-20 w-full h-auto py-8 text-white bg-blue-400 border-t-0 border-yellow-200 px-7">
                        <a href="/halamanproduct#drinks"
                            class="inline-block text-xs font-semibold absolute top-0 -mt-3.5 rounded-full px-4 py-2 uppercase text-blue-500 bg-white">Kedai
                            Diens</a>
                        <h2 class="mb-5 text-5xl font-bold"><a href="/halamanproduct#drinks">Drinks</a>
                        </h2>
                        <p class="mb-2 text-lg font-normal text-blue-100 opacity-100">Refresh your day with our
                            flavorful drinks, from fruity delights to creamy indulgences.</p>

                    </div>
                </div>

                <div
                    class="relative flex flex-col items-start justify-end h-full col-span-12 overflow-hidden rounded-xl group md:col-span-6 xl:col-span-4">
                    <a href="/halamanproduct#snacks"
                        class="block w-full transition duration-300 ease-in-out transform bg-center bg-cover h-96 hover:scale-110"
                        style="background-image:url('https://cdn.devdojo.com/images/may2021/orange.jpg')">
                    </a>
                    <div
                        class="relative z-20 w-full h-auto py-8 text-white bg-blue-400 border-t-0 border-yellow-200 px-7">
                        <a href="/halamanproduct#snacks"
                            class="inline-block text-xs font-semibold absolute top-0 -mt-3.5 rounded-full px-4 py-2 uppercase text-blue-500 bg-white">Kedai
                            Diens</a>
                        <h2 class="mb-5 text-5xl font-bold"><a href="/halamanproduct#snacks">Snacks</a>
                        </h2>
                        <p class="mb-2 text-lg font-normal text-blue-100 opacity-100">Enjoy our crispy, savory, and
                            sweet snacks—perfect for any moment. And Enjoy with Family.</p>

                    </div>
                </div>

                {{-- Best Seller --}}
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
                            <a href="/halamanproduct"
                                class="inline-flex items-center justify-center w-full px-4 py-2 text-sm font-medium tracking-wide text-white transition-colors duration-200 rounded-md mt-3 bg-neutral-950 hover:bg-neutral-900 focus:ring-2 focus:ring-offset-2 focus:ring-neutral-900 focus:shadow-outline focus:outline-none">
                                Detail Produk
                            </a>
                        </div>
                    </div>
                    {{-- Best Seller --}}




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
    <x-footer></x-footer>





    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
