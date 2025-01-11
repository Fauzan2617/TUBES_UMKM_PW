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
    <link href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" rel="stylesheet" />








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

            antarmuka {
                display: none;
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
                <div class="relative isolate px-6 pt-20 lg:px-8">
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
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
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
        <div class="relative w-full px-3 sm:px-3 md:px-8 py-10 sm:py-12 md:py-16 mx-auto max-w-7xl">
            <h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-gray-900 text-center sm:text-left">
                <a href="#_">Noodles, Drink And Snack</a>
            </h1>
            <p class="mt-2 text-sm sm:text-base lg:text-lg text-gray-500 text-center sm:text-left">All Variant Noodles
                In Here</p>

            <!-- Promosi -->
            <div class="grid grid-cols-12 col-span-12 gap-6 mt-8">
                <!-- Card 1 -->
                <div
                    class="flex flex-col items-start col-span-12 overflow-hidden shadow-sm rounded-xl xs:col-span-12 sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-4">
                    <a href="/detailproduct"
                        class="block w-full transition duration-200 ease-out transform hover:scale-110">
                        <div class="relative w-full aspect-[4/3]">
                            <img class="absolute inset-0 object-cover object-center w-full h-full"
                                src="{{ asset('img/noodle.jpeg') }}" alt="Bangladesh Noodles">
                        </div>
                    </a>
                    <div
                        class="relative flex flex-col items-start px-6 bg-white border border-t-0 border-gray-200 py-7 rounded-b-2xl w-full">

                        <div
                            class="bg-red-400 absolute top-0 -mt-3 flex items-center px-3 py-1.5 leading-none w-auto inline-block rounded-full text-xs font-medium uppercase text-white">
                            <span> Bangladesh Noodles</span>
                        </div>
                        <h2 class="text-base font-bold sm:text-lg md:text-xl">
                            <a href="/detailproduct">Noodles</a>
                        </h2>
                        <p class="mt-2 text-sm text-gray-500">Authentic noodles with rich spices from Bangladesh.
                            Savory, spicy, and full of enticing aromas. Perfect for any time!</p>
                        <a href="/detailproduct"
                            class="inline-flex items-center justify-center w-full px-4 py-2 text-sm font-medium tracking-wide text-white transition-colors duration-200 rounded-md mt-3 bg-neutral-950 hover:bg-neutral-900 focus:ring-2 focus:ring-offset-2 focus:ring-neutral-900 focus:shadow-outline focus:outline-none">
                            <button type="button">
                                Produk
                            </button>
                        </a>
                    </div>
                </div>

                <div
                    class="flex flex-col items-start col-span-12 overflow-hidden shadow-sm rounded-xl xs:col-span-12 sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-4">
                    <a href="/detailproduct"
                        class="block w-full transition duration-200 ease-out transform hover:scale-110">
                        <div class="relative w-full aspect-[4/3]">
                            <img class="absolute inset-0 object-cover object-center w-full h-full"
                                src="{{ asset('img/drink.jpeg') }}" alt="Mojito Apple">
                        </div>
                    </a>
                    <div
                        class="relative flex flex-col items-start px-6 bg-white border border-t-0 border-gray-200 py-7 rounded-b-2xl w-full">
                        <div
                            class="bg-red-400 absolute top-0 -mt-3 flex items-center px-3 py-1.5 leading-none w-auto inline-block rounded-full text-xs font-medium uppercase text-white">
                            <span>Mojito Apple</span>
                        </div>
                        <h2 class="text-base font-bold sm:text-lg md:text-xl">
                            <a href="/detailproduct">Drinks</a>
                        </h2>
                        <p class="mt-2 text-sm text-gray-500">Traditional Indonesian noodles with bold spices and rich
                            flavors. A perfect blend of savory, spicy, and aromatic goodness!</p>
                        <a href="/detailproduct"
                            class="inline-flex items-center justify-center w-full px-4 py-2 text-sm font-medium tracking-wide text-white transition-colors duration-200 rounded-md mt-3 bg-neutral-950 hover:bg-neutral-900 focus:ring-2 focus:ring-offset-2 focus:ring-neutral-900 focus:shadow-outline focus:outline-none">
                            <button type="button">
                                Produk
                            </button>
                        </a>
                    </div>
                </div>

                <div
                    class="flex flex-col items-start col-span-12 overflow-hidden shadow-sm rounded-xl xs:col-span-12 sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-4">
                    <a href="/detailproduct"
                        class="block w-full transition duration-200 ease-out transform hover:scale-110">
                        <div class="relative w-full aspect-[4/3]">
                            <img class="absolute inset-0 object-cover object-center w-full h-full"
                                src="{{ asset('img/snack.jpeg') }}" alt="Sandwich">
                        </div>
                    </a>
                    <div
                        class="relative flex flex-col items-start px-6 bg-white border border-t-0 border-gray-200 py-7 rounded-b-2xl w-full">
                        <div
                            class="bg-red-400 absolute top-0 -mt-3 flex items-center px-3 py-1.5 leading-none w-auto inline-block rounded-full text-xs font-medium uppercase text-white">
                            <span>Sandwich</span>
                        </div>
                        <h2 class="text-base font-bold sm:text-lg md:text-xl">
                            <a href="/detailproduct">Snack</a>
                        </h2>
                        <p class="mt-2 text-sm text-gray-500">A snack is a small portion of food typically consumed
                            between meals. It can be sweet or savory, ranging from chips, cookies, and candies to
                            healthier. </p>
                        <a href="/detailproduct"
                            class="inline-flex items-center justify-center w-full px-4 py-2 text-sm font-medium tracking-wide text-white transition-colors duration-200 rounded-md mt-3 bg-neutral-950 hover:bg-neutral-900 focus:ring-2 focus:ring-offset-2 focus:ring-neutral-900 focus:shadow-outline focus:outline-none">
                            <button type="button">
                                Produk
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Promosi -->
        </div>
    </section>
    {{-- AKHIR MENU MAKANAN DAN MINUMAN  --}}




    {{-- MAPS --}}
    <div class="flex flex-wrap justify-center items-center h-auto p-5 pl-[6%] pt-[9%]">
        <div class="w-full md:w-2/5 p-4">
            <h2 class="text-xl md:text-7xl font-semibold mb-5">We Location 📍</h2>
            <form class="space-y-4" name="contact_form" id="myform">
                <div>
                    <input type="text" id="fullName" name="nama" placeholder="Full Name"
                        class="mt-1 p-4 w-full border rounded-md" required />
                </div>
                <div>
                    <input type="email" id="email" name="email" placeholder="Email"
                        class="mt-1 p-4 w-full border rounded-md" required />
                </div>
                <div>
                    <textarea id="message" name="pesan" placeholder="Message" class="mt-1 p-4 w-full border rounded-md"
                        rows="4" required></textarea>
                </div>
                <!-- Tombol Submit -->
                <button type="submit"
                    class="btn-kirim px-8 py-4 bg-blue-600 hover:bg-blue-700 focus:ring-blue-500 focus:ring-offset-blue-200 text-white rounded-lg">
                    Submit
                </button>

                <!-- Tombol Loading -->
                <button type="button"
                    class="btn-loading hidden px-8 py-4 flex justify-center items-center bg-gray-500 text-white rounded-lg">
                    <svg width="20" height="20" fill="currentColor" class="mr-2 animate-spin"
                        viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M526 1394q0 53-37.5 90.5t-90.5 37.5q-52 0-90-38t-38-90q0-53 37.5-90.5t90.5-37.5 90.5 37.5 37.5 90.5zm498 206q0 53-37.5 90.5t-90.5 37.5-90.5-37.5-37.5-90.5 37.5-90.5 90.5-37.5 90.5 37.5 37.5 90.5zm-704-704q0 53-37.5 90.5t-90.5 37.5-90.5-37.5-37.5-90.5 37.5-90.5 90.5-37.5 90.5 37.5 37.5 90.5zm1202 498q0 52-38 90t-90 38q-53 0-90.5-37.5t-37.5-90.5 37.5-90.5 90.5-37.5 90.5 37.5 37.5 90.5zm-964-996q0 66-47 113t-113 47-113-47-47-113 47-113 113-47 113 47 47 113zm1170 498q0 53-37.5 90.5t-90.5 37.5-90.5-37.5-37.5-90.5 37.5-90.5 90.5-37.5 90.5 37.5 37.5 90.5zm-640-704q0 80-56 136t-136 56-136-56-56-136 56-136 136-56 136 56 56 136zm530 206q0 93-66 158.5t-158 65.5q-93 0-158.5-65.5t-65.5-158.5q0-92 65.5-158t158.5-66q92 0 158 66t66 158z">
                        </path>
                    </svg>
                    Loading...
                </button>
            </form>

        </div>
        <div class="w-full md:w-1/2 p-4 flex justify-center ">
            <div class="overflow-hidden w-[35rem] h-[37rem] rounded-xl">
                <div id="osm-map" class="rounded-xl "></div>
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
    <script>
        const scriptURL =
            'https://script.google.com/macros/s/AKfycbxLx0jffrw-FYIuPf9gFhRqX0SmtEMDKR-VZLMfC-opreVkjz1Z0CLcw06mZTR4tU_N1w/exec';
        const form = document.forms['contact_form'];
        const submitButton = document.querySelector('.btn-kirim');
        const loadingButton = document.querySelector('.btn-loading');

        form.addEventListener('submit', e => {
            e.preventDefault(); // Mencegah reload halaman

            // Sembunyikan tombol submit dan tampilkan tombol loading
            submitButton.classList.add('hidden');
            loadingButton.classList.remove('hidden');

            // Kirim data ke Google Apps Script
            fetch(scriptURL, {
                    method: 'POST',
                    body: new FormData(form)
                })
                .then(response => {
                    console.log('Success!', response); // Log sukses di console
                    alert('Data berhasil dikirim!'); // Menampilkan pesan sukses
                    form.reset(); // Reset form setelah pengiriman
                })
                .catch(error => {
                    console.error('Error!', error.message); // Log error di console
                    alert('Terjadi kesalahan: ' + error.message); // Pesan kesalahan
                })
                .finally(() => {
                    // Kembalikan tombol submit dan sembunyikan tombol loading
                    submitButton.classList.remove('hidden');
                    loadingButton.classList.add('hidden');
                });
        });
    </script>






    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
    <script>
        // Where you want to render the map.
        var element = document.getElementById('osm-map');

        // Height has to be set. You can do this in CSS too.
        element.style = 'height:35rem; width:35rem; ';

        // Create Leaflet map on map element.
        var map = L.map(element);

        // Add OSM tile layer to the Leaflet map.
        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Target's GPS coordinates.
        var target = L.latLng('-6.919124025938159', '107.56366832641821');

        // Set map's center to target with zoom 14.
        map.setView(target, 14);

        // Place a marker on the same location.
        L.marker(target).addTo(map);
    </script>




</body>

</html>
