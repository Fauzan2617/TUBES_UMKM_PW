<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kedai Diens</title>
    <link rel="icon" href="{{ asset('img/KedaiDiens.png') }}" type="image/png" sizes="512x512">
    {{-- FOOTER --}}
    <style>
        /*
         *  This is the marquee animation styles.
         *  Instead of adding this CSS you may wish to implement in your tailwind config.
         *  Learn more in the marquee Tailwind Config section
         */
        @keyframes marquee {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        .animate-marquee {
            animation: marquee 20s linear infinite;
        }

        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
            background-color: white;
        }

        /*
         *  This is a container query used for the demo that does not need to be included
         */
        .container-block {
            container-type: inline-size;
        }

        @container (max-width: 1100px)

            {

            .container-block svg:nth-child(3),
            .container-block svg:nth-child(4) {
                display: none;
            }
        }

        .padding {
            padding-bottom: 10em 0 !important;
        }
    </style>
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

<body>



    {{-- HEADER/PEMBUKA --}}
    <header class="padding">
        <section class="w-full px-6 pb-12 antialiased bg-white">
            <div class="mx-auto max-w-7xl">
                <!-- Navbar -->
                <x-navbar></x-navbar>
                <!-- Navbar end -->

                <!-- Main Hero Content -->
                <div class="relative isolate px-6 pt-11 lg:px-8">
                    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
                        aria-hidden="true">
                        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#d66c7a] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                        </div>
                    </div>
                    <div class="mx-auto max-w-2xl py-32 sm:py-20 lg:py-5">
                        <div class="hidden sm:mb-8 sm:flex sm:justify-center">

                        </div>
                        <div class="text-center">
                            <h1 class="text-balance text-5xl font-semibold tracking-tight text-gray-900 sm:text-7xl">
                                About</h1>
                            <p class="mt-5 text-pretty sm:text-lg font-medium text-gray-500 p-2">
                                Selamat datang di Kedai Diens, tempat di mana cita rasa asli Indonesia bertemu dengan
                                kelezatan mie yang menggugah selera. Kami menyajikan mie dengan rempah-rempah bumbu
                                Indonesia yang kaya, memadukan tradisi kuliner lokal dengan sentuhan inovatif yang
                                membuat setiap suapan terasa istimewa.

                                Di Kedai Diens, kami mengutamakan kearifan lokal dengan menggunakan rempah-rempah
                                pilihan yang mengandung sejarah panjang dan kekayaan rasa. Kami percaya bahwa setiap
                                hidangan adalah sebuah perjalanan rasa yang membawa Anda lebih dekat dengan keindahan
                                budaya Indonesia. Dengan desain yang sederhana dan otentik, kedai kami menciptakan
                                suasana yang ramah dan nyaman, sehingga Anda dapat menikmati makanan dengan santai
                                bersama orang-orang terdekat.

                                Kami berkomitmen untuk menyajikan mie lezat yang dipadukan dengan rempah-rempah khas
                                Indonesia, memberikan pengalaman kuliner yang tidak hanya menggugah selera, tetapi juga
                                merayakan kekayaan tradisi kuliner tanah air. Di Kedai Diens, setiap hidangan adalah
                                tentang kehangatan, kenikmatan, dan keunikan yang akan membuat Anda kembali lagi.

                                Selamat menikmati!</p>
                            <div class="mt-10 flex items-center justify-center gap-x-6 py-5">
                                <a href="/home"
                                    class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get
                                    started</a>
                                <a href="/home"
                                    class="text-sm/6 font-semibold text-gray-900">Our Product<span
                                        aria-hidden="true">→</span></a>
                            </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                                    <!-- End Main Hero Content -->






                                      {{-- COMMENT --}}
                             <div class="border border-gray-300 p-3 rounded-lg relative w-full mx-auto">

                                    {{-- COMMENT ALL PEOPLE --}}
                                    <section class="bg-white px-4 py-12 md:py-24">
                                        <div class="max-w-screen-xl mx-auto">
                                        <h2 class="font-black text-black text-center text-3xl leading-none uppercase max-w-2xl mx-auto mb-12">What Listeners
                                            Are Saying</h2>
                                        <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4 relative">
                                            <div class="bg-gray-200 rounded-lg p-8 text-center md:w-1/3">
                                            <p class="font-bold uppercase">John Doe</p>
                                            <p class="text-xl font-light italic text-gray-700">This podcast is amazing! The storytelling and production
                                                quality are top-notch. I can't wait for the next episode!</p>
                                            </div>
                                            <div class="bg-gray-200 rounded-lg p-8 text-center md:w-1/3">
                                            <p class="font-bold uppercase">Jane Smith</p>
                                            <p class="text-xl font-light italic text-gray-700">This podcast kept me on the edge of my seat. It's a
                                                must-listen for true crime enthusiasts!</p>
                                            </div>
                                            <div class="bg-gray-200 rounded-lg p-8 text-center md:w-1/3">
                                            <p class="font-bold uppercase">Emily Johnson</p>
                                            <p class="text-xl font-light italic text-gray-700">I can't get enough of this podcast! The host's voice is so
                                                soothing, and the stories are gripping. Highly recommend!</p>
                                            </div>
                                        </div>
                                        </div>
                                    </section>
                                    {{-- END COMMENT ALL PEOPLE --}}






                                        <h2 class="text-lg font-medium mb-2">Leave a comment</h2>

                                        <form action="{{ route('about.comment') }}" method="POST">
                                            @csrf
                                            <div class="mb-4">
                                                <label class="block text-gray-700 font-medium mb-2" for="name">
                                                    Name
                                                </label>
                                                <input
                                                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-gray-500"
                                                    id="name" name="name" type="text" placeholder="Enter your name" required>
                                            </div>
                                            <div class="mb-4">
                                                <label class="block text-gray-700 font-medium mb-2" for="comment">
                                                    Comment
                                                </label>
                                                <textarea rows="4"
                                                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-gray-500"
                                                    id="comment" name="comment" placeholder="Enter your comment" required></textarea>
                                            </div>
                                            <div class="flex justify-end">
                                                <button
                                                    class="bg-blue-500 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                                    type="submit">Post Comment</button>
                                            </div>
                                        </form>

                                    </div>




                        </div>

                    </div>


                </div>
        </section>
    </header>






    {{-- Perusahaan kepercayaan --}}
    <section class="bg-white pb-14 ">
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