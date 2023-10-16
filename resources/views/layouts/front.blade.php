<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,viewport-fit=cover">
    {!! \App\Http\Utils\Meta::render() !!}

    {{-- tailwind css --}}
    <title>{{ $title }}</title>

    @if ($companyInfo->company_logo == 'logo.png')
        <link rel="shortcut icon" href="/assets/img/logo.png" type="image/x-icon">
    @else
        <link rel="shortcut icon" href="{{ env('APP_URL') . '/storage/img/company/' . $companyInfo->company_logo }}"
            type="image/x-icon">
    @endif
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="/assets/css/atresnaStyle.css">
    {{-- add font awesome --}}
    <script src="https://kit.fontawesome.com/7a249e95a6.js" crossorigin="anonymous"></script>
    @livewireStyles
</head>

<body class="text-gray-800 pb-14">

    <div class="w-full h-full m-0 font-primary flex flex-col gap-10">
        {{-- Navigasi Components --}}
        <section>
            @include('components.navigasi')
        </section>

        {{-- End Navigasi Components --}}
        {{-- Slider Components --}}
        <section class="max-w-screen-lg mx-auto relative pb-10">
            <div class="absolute flex flex-col justify-center h-full  w-hero">
                <div class="flex justify-between mx-2">
                    <button
                        class=" bg-white bg-opacity-50 hover:bg-opacity-75 text-3xl drop-shadow-lg h-20 px-3 rounded-full flex flex-col justify-center "
                        id="slide-arrow-prev">
                        <span class="my-auto"> &#8249;</span>
                    </button>
                    <button
                        class=" bg-white text-3xl drop-shadow-lg px-3 rounded-full bg-opacity-50 hover:bg-opacity-75 "
                        id="slide-arrow-next">
                        &#8250;
                    </button>
                </div>
            </div>
            <ul id="slides-container" class=" slides-container flex w-full overflow-scroll scroll-smooth">
                <li style="flex: 1 0 100%" class="slide">
                    <div class=" h-hero max-w-screen-lg bg-black overflow-hidden">
                        <img class="object-cover h-full w-hero"
                            src="https://img.freepik.com/free-vector/mineral-water-bottle-ad-banner-flask-with-drink_107791-2565.jpg?w=1380&t=st=1695028307~exp=1695028907~hmac=a1aab9a6fbf36e4890d4456b59810f1572cebccf07bf27bf1917772c1e6a6df9"
                            alt="">
                    </div>
                </li>

                <li style="flex: 1 0 100%" class="slide">
                    <div class=" h-hero max-w-screen-lg bg-black overflow-hidden">
                        <img class="object-cover h-full w-hero"
                            src="https://img.freepik.com/free-vector/mineral-water-bottle-ad-banner-flask-with-drink_107791-2565.jpg?w=1380&t=st=1695028307~exp=1695028907~hmac=a1aab9a6fbf36e4890d4456b59810f1572cebccf07bf27bf1917772c1e6a6df9"
                            alt="">
                    </div>
                </li>
                <li style="flex: 1 0 100%" class="slide">
                    <div class=" h-hero max-w-screen-lg bg-black overflow-hidden">
                        <img class="object-cover h-full w-hero"
                            src="https://img.freepik.com/free-vector/mineral-water-bottle-ad-banner-flask-with-drink_107791-2565.jpg?w=1380&t=st=1695028307~exp=1695028907~hmac=a1aab9a6fbf36e4890d4456b59810f1572cebccf07bf27bf1917772c1e6a6df9"
                            alt="">
                    </div>
                </li>
                <li style="flex: 1 0 100%" class="slide">
                    <div class=" h-hero max-w-screen-lg bg-black overflow-hidden">
                        <img class="object-cover h-full w-hero"
                            src="https://img.freepik.com/free-vector/mineral-water-bottle-ad-banner-flask-with-drink_107791-2565.jpg?w=1380&t=st=1695028307~exp=1695028907~hmac=a1aab9a6fbf36e4890d4456b59810f1572cebccf07bf27bf1917772c1e6a6df9"
                            alt="">
                    </div>
                </li>
                <li style="flex: 1 0 100%" class="slide">
                    <div class=" h-hero max-w-screen-lg bg-black overflow-hidden">
                        <img class="object-cover h-full w-hero"
                            src="https://img.freepik.com/free-vector/mineral-water-bottle-ad-banner-flask-with-drink_107791-2565.jpg?w=1380&t=st=1695028307~exp=1695028907~hmac=a1aab9a6fbf36e4890d4456b59810f1572cebccf07bf27bf1917772c1e6a6df9"
                            alt="">
                    </div>
                </li>
            </ul>
        </section>
        {{-- End Slider Components --}}
        {{-- Intro Section --}}
        <section class="w-full bg-slate-100 max-w-screen-lg mx-auto relative rounded-br-panel1">
            <div class="max-w-screen-lg mx-auto py-8 text-gray-800">
                <div class="m-8 flex flex-col gap-5">
                    <div>
                        <h2 class="text-2xl text-gray-700">Complete Equipment Specialist</h2>
                        <span class="text-xl text-primary italic ">Trusted partner and authorized distributor for the
                            best
                            brand
                            and product in Water Technologies</span>
                    </div>
                    <p class=" text-gray-900 text-lg text-justify ">Founded in 2008, PT . CIPTA ANEKA AIR is a dynamic
                        and
                        forward-thinking
                        company that serves off
                        all kinds of water treatment equipments & At PT. CIPTA ANEKA AIR we take pride in our role as an
                        authorized distributor, which means that we have been officially recognized and entrusted by the
                        manufacturers to deliver their products or services to customers with the highest standards of
                        quality and authenticity. Our reputation as a reliable distributor is built on a foundation of
                        integrity, expertise, and customer-centric values.</p>
                </div>

            </div>
            <div class="absolute flex justify-end  -top-16 w-full ">
                <img class=" max-h-40  -mr-24  " src="./assets/img/caa-logo.png" alt="">
            </div>
            <div class="absolute -top-6  flex justify-start w-full ">
                <h1 class="py-2 px-10 bg-caa-primary text-xl text-gray-100">Introduction</h1>
            </div>
        </section>

        {{-- Authorized Dstributor --}}

        <section class=" bg-primary w-full relative ">
            <div class="max-w-screen-lg mx-auto py-8 text-gray-200 ">
                <h2 class="text-center text-3xl">Our Distributor Brand Product</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero dolorem ipsum modi dolore nemo, eius
                    laborum voluptatem laboriosam ratione neque numquam magni voluptatibus recusandae voluptate
                    cupiditate
                    sed labore veniam atque.</p>
            </div>

            <div class="absolute flex justify-center -top-4 w-full">
                <div class="h-10 w-10 bg-white rounded-br-3xl rounded-bl-3xl ">
                </div>
            </div>

        </section>

        {{-- END Authorized Dstributor --}}


        {{-- End Intro Section --}}
        @yield('konten')
        {{-- @include('components.footer') --}}

        {{-- <div id="modalMenubar" class="hidden  hape:flex-col absolute h-screen backdrop-blur-md w-full  top-20">
            <div class="flex justify-end ">
                <div class=" w-2/3 h-screen bg-white flex flex-col gap-3 p-6 ">
                    <div class="flex justify-between">
                        <div class="text-xl font-semibold text-primary">
                            Menu Navigasi
                        </div>
                        <button onclick="closedModal()"
                            class=" font-semibold px-2 rounded-xl text-xl text-red-600 ">x</button>
                    </div>



                    <ul class="flex flex-col gap-4 text-lg font-semibold text-gray-600">
                        <li class=" @if (url()->current() == env('APP_URL')) font-bold text-primary @endif ">
                            <a href="/">Beranda</a>
                        </li>
                        <li>
                            <a class=" @if (url()->current() == env('APP_URL') . '/servis') font-bold text-primary @endif"
                                href="/servis">Servis</a>
                        </li>
                        <li>
                            <a class=" @if (url()->current() == env('APP_URL') . '/news') font-bold text-primary @endif"
                                href="/news">News</a>
                        </li>
                        <li>
                            <a class=" @if (url()->current() == env('APP_URL') . '/about') font-bold text-primary @endif"
                                href="/about">About</a>
                        </li>

                    </ul>

                </div>
            </div>
        </div> --}}
    </div>

    <script src="/assets/js/atresnaScript.js"></script>
    @livewireScripts
</body>

</html>
