<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $companyInfo->company_name }} | {{ $companyInfo->company_slogan }}</title>
    <meta name="description" content="Your description goes here">
    @if ($companyInfo->company_logo == 'logo.png')
        <link rel="shortcut icon" href="/assets/img/logo.png" type="image/x-icon">
    @else
        <link rel="shortcut icon" href="{{ '/storage/img/company/' . $companyInfo->company_logo }}" type="image/x-icon">
    @endif
    {{-- add font awesome --}}
    <script src="https://kit.fontawesome.com/7a249e95a6.js" crossorigin="anonymous"></script>
    {{-- tailwind css --}}
    @vite('resources/css/app.css')
    {{-- custome css --}}
    <link rel="stylesheet" href="/assets/css/fonts.css">
</head>

<body class=" w-screen bg-bg-primary  ">
    <div class="m-10 max-w-screen-lg mx-auto flex flex-col gap-10">
        {{-- header --}}
        <section>
            <div class="flex flex-col gap-10">
                {{-- navigasi --}}

                <head>
                    <nav class="flex justify-between">
                        <a class="  " href="/"> <img class="max-h-10" src="/assets/img/logo-atresna.png"
                                alt=""> </a>
                        <div class="flex gap-4 my-auto text-text-primary">
                            <a class="font-semibold border-b-2" href="">Blog</a>
                            <a href="">Tips</a>
                            <a href="">Aplikasi Kami</a>
                        </div>
                    </nav>
                </head>
                {{-- end navigasi --}}
                {{-- header-main section --}}
                <main>
                    <div class="flex flex-col gap-3 h-hero overflow-hidden ">
                        <div class="flex justify-between">
                            <h1 class=" text-3xl ">Artikel Favorit</h1>
                            <div class=" text-right text-tiny text-gray-700 ">
                                <p>Atresna creative adalah web untuk berbagai tips serta trik dunia teknologi, <br>
                                    pembangunan
                                    aplikasi, dan infromasi lainya</p>
                                <p class=""><a class=" text-text-cta font-semibold " href="#">Lihat Apa
                                        yang
                                        kami kerjakan</a></p>
                            </div>
                        </div>
                        <div class="flex gap-5">
                            <div class=" flex flex-col flex-1 ">
                                <a href="#">
                                    <img class=" h-artikel-terbaru w-artikel-terbaru  rounded-xl "
                                        src="/assets/img/banner-picture.jpg" alt="">
                                </a>
                                <div class="leading-none ">
                                    <a href="#">
                                        <h1 class="text-xl font-semibold text-gray-800 ">Good Design Tools</h1>
                                    </a>
                                    <span class="text-xs text-text-primary  ">Development</span>
                                </div>
                            </div>
                            <div class=" flex flex-col flex-1 gap-3 ">
                                <div class="flex gap-2">
                                    <input
                                        class=" w-full  px-3 py-2 focus:outline-none text-sm rounded-2xl drop-shadow-sm"
                                        type="search" placeholder="Cari Artikel Yang Kamu Mau" name=""
                                        id="">
                                    <button
                                        class="text-sm py-2 px-5 text-center bg-text-primary  text-gray-100 drop-shadow-sm  rounded-full"
                                        type="submit">Search</button>
                                </div>
                                <div class="flex flex-col gap-3">
                                    <div class="flex gap-3 ">
                                        <div class="w-small-artikel-card h-small-artikel-card ">
                                            <img class=" h-small-artikel-card w-small-artikel-card rounded-xl "
                                                src="/assets/img/banner-picture.jpg" alt="">
                                        </div>
                                        <div class="flex w-fit flex-col gap-1 justify-start">
                                            <h2 class=" font-semibold text-gray-700 ">Good Design Make Prfect Design
                                            </h2>
                                            <p class=" text-tiny">Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit.
                                                Nihil
                                                perspiciatis
                                                natus placeat reiciendis ullam fugiat consequatur repudiandae. </p>
                                            <span class="text-tiny text-text-primary  ">Development</span>
                                        </div>
                                    </div>
                                    <div class="flex gap-3 ">
                                        <div class="w-small-artikel-card h-small-artikel-card ">
                                            <img class=" h-small-artikel-card w-small-artikel-card rounded-xl "
                                                src="/assets/img/banner-picture.jpg" alt="">
                                        </div>
                                        <div class="flex w-fit flex-col gap-1 justify-start">
                                            <h2 class=" font-semibold text-gray-700 ">Good Design Make Prfect Design
                                            </h2>
                                            <p class=" text-tiny">Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit.
                                                Nihil
                                                perspiciatis
                                                natus placeat reiciendis ullam fugiat consequatur repudiandae. </p>
                                            <span class="text-tiny text-text-primary  ">Development</span>
                                        </div>
                                    </div>
                                    <div class="flex gap-3 ">
                                        <div class="w-small-artikel-card h-small-artikel-card ">
                                            <img class=" h-small-artikel-card w-small-artikel-card rounded-xl "
                                                src="/assets/img/banner-picture.jpg" alt="">
                                        </div>
                                        <div class="flex w-fit flex-col gap-1 justify-start">
                                            <h2 class=" font-semibold text-gray-700 ">Good Design Make Prfect Design
                                            </h2>
                                            <p class=" text-tiny">Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit.
                                                Nihil
                                                perspiciatis
                                                natus placeat reiciendis ullam fugiat consequatur repudiandae. </p>
                                            <span class="text-tiny text-text-primary  ">Development</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                {{-- end header-main section --}}
            </div>
        </section>
        {{-- end header --}}
        {{-- Section Card Artikel --}}
        <section>
            <div class="flex flex-col gap-3">
                <div class="flex justify-between">
                    <h1 class=" text-3xl ">Artikel Terbaru</h1>
                </div>
                <div class=" grid grid-flow-row grid-cols-4 gap-10">
                    <div class="flex flex-col">
                        <div class=" flex flex-col gap-2">
                            <img class="rounded-xl h-medium-artikel-card w-medium-artikel-card"
                                src="/assets/img/banner-picture.jpg" alt="">
                            <div class="flex flex-col">
                                <a href="#">
                                    <h3 class=" font-semibold text-md ">Artikel Terbaik dan Terbaru</h3>
                                </a>
                                <span class="text-tiny text-text-primary  ">Development</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <div class=" flex flex-col gap-2">
                            <img class="rounded-xl h-medium-artikel-card w-medium-artikel-card"
                                src="/assets/img/banner-picture.jpg" alt="">
                            <div class="flex flex-col">
                                <a href="#">
                                    <h3 class=" font-semibold text-md ">Artikel Terbaik dan Terbaru</h3>
                                </a>
                                <span class="text-tiny text-text-primary  ">Development</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <div class=" flex flex-col gap-2">
                            <img class="rounded-xl h-medium-artikel-card w-medium-artikel-card"
                                src="/assets/img/banner-picture.jpg" alt="">
                            <div class="flex flex-col">
                                <a href="#">
                                    <h3 class=" font-semibold text-md ">Artikel Terbaik dan Terbaru</h3>
                                </a>
                                <span class="text-tiny text-text-primary  ">Development</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <div class=" flex flex-col gap-2">
                            <img class="rounded-xl h-medium-artikel-card w-medium-artikel-card"
                                src="/assets/img/banner-picture.jpg" alt="">
                            <div class="flex flex-col">
                                <a href="#">
                                    <h3 class=" font-semibold text-md ">Artikel Terbaik dan Terbaru</h3>
                                </a>
                                <span class="text-tiny text-text-primary  ">Development</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <div class=" flex flex-col gap-2">
                            <img class="rounded-xl h-medium-artikel-card w-medium-artikel-card"
                                src="/assets/img/banner-picture.jpg" alt="">
                            <div class="flex flex-col">
                                <a href="#">
                                    <h3 class=" font-semibold text-md ">Artikel Terbaik dan Terbaru</h3>
                                </a>
                                <span class="text-tiny text-text-primary  ">Development</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- End Card Section --}}
        {{-- Footer Section --}}
        <section class=" bg-gray-200 rounded-lg ">
            <div class="my-5 mx-5 flex flex-col gap-3">
                <div class="flex justify-between">
                    <h1 class=" text-3xl ">Yang Kami Kerjakan</h1>
                </div>
                <div class="grid grid-flow-col grid-cols-10 gap-2">
                    <div class="col-span-4">
                        <img class=" h-full rounded-lg " src="/assets/img/baanner-picture.jpg" alt="">
                    </div>
                    <div class="col-span-2">
                        <img class="h-full rounded-lg object-cover " src="/assets/img/banner-picture.jpg"
                            alt="">
                    </div>
                    <div class="col-span-2">
                        <img class=" h-full rounded-lg object-cover " src="/assets/img/banner-picture.jpg"
                            alt="">
                    </div>
                    <div class="col-span-2">
                        <img class=" h-full rounded-lg object-cover " src="/assets/img/banner-picture.jpg"
                            alt="">
                    </div>
                </div>
            </div>

        </section>
        {{-- End Footer Section --}}
    </div>
    <script src="./assets/js/atresna_home.js"></script>
</body>

</html>
