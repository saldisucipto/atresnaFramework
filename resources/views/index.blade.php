@extends('layouts.front')

@section('konten')
    {{-- Slider Components --}}
    @include('components.slider')
    {{-- End Slider Components --}}
    {{-- Intro Section --}}
    <section class="w-full bg-slate-100 max-w-screen-lg mx-auto relative rounded-br-panel1">
        <div class="max-w-screen-lg mx-auto py-8 text-gray-800">
            <div class="m-8 flex flex-col gap-5">
                <div>
                    <h2 class="text-2xl text-gray-700">{{ $intro->title }}</h2>
                    <span class="text-xl text-primary italic ">Trusted partner and authorized distributor for the
                        best
                        brand
                        and product in Water Technologies</span>
                </div>
                <p class=" text-gray-900 text-lg text-justify "> {!! $intro->content !!}</p>
            </div>

        </div>
        <div class="absolute flex justify-end  -top-16 w-full ">
            <img class="max-h-40 -mr-24 drop-shadow-lg" src="./assets/img/caa-logo.png" alt="">
        </div>
        <div class="absolute -top-6  flex justify-start w-full ">
            <h1 class="py-2 px-10 bg-caa-primary text-xl text-gray-100">Introduction</h1>
        </div>
    </section>
    {{-- END  Intro Section --}}


    {{-- Authorized Dstributor --}}
    <section class=" bg-primary w-full relative ">
        <div class="max-w-screen-lg mx-auto py-14 text-gray-200 flex flex-col gap-7 ">
            <h2 class="text-center text-3xl">Authorized Dristributor Product</h2>
            <div class="grid grid-flow-row grid-cols-4 gap-5 max-w-4xl  mx-auto">
                <div
                    class=" h-52 drop-shadow-lg rounded-tr-2xl rounded-bl-3xl bg-white flex flex-col justify-center relative">
                    <div class="w-full mx-auto">
                        <img class="p-4 drop-shadow-md" src="/assets/img/veolia-logo.png" alt="">
                    </div>
                    <button
                        class="absolute h-10 w-10 hover:bg-caa-primary m-2 bottom-0 bg-primary rounded-full text-gray-200 flex flex-col justify-center">
                        <i class="fas fa-arrow-right mx-auto"></i>
                    </button>
                </div>
                <div
                    class=" h-52 drop-shadow-lg rounded-tr-2xl rounded-bl-3xl bg-white flex flex-col justify-center relative">
                    <div class="w-full mx-auto">
                        <img class="p-4 drop-shadow-md" src="/assets/img/cobetter-logo.png" alt="">
                    </div>
                    <button
                        class="absolute h-10 w-10 hover:bg-caa-primary m-2 bottom-0 bg-primary rounded-full text-gray-200 flex flex-col justify-center">
                        <i class="fas fa-arrow-right mx-auto"></i>
                    </button>
                </div>
                <div
                    class=" h-52 drop-shadow-lg rounded-tr-2xl rounded-bl-3xl bg-white flex flex-col justify-center relative">
                    <div class="w-full mx-auto">
                        <img class="p-4 drop-shadow-md" src="/assets/img/cpure-logo.png" alt="">
                    </div>
                    <button
                        class="absolute h-10 w-10 hover:bg-caa-primary m-2 bottom-0 bg-primary rounded-full text-gray-200 flex flex-col justify-center">
                        <i class="fas fa-arrow-right mx-auto"></i>
                    </button>
                </div>
                <div
                    class=" h-52 drop-shadow-lg rounded-tr-2xl rounded-bl-3xl bg-white flex flex-col justify-center relative">
                    <div class="w-full mx-auto">
                        <img class="p-4 drop-shadow-md" src="/assets/img/chemcon-logo.png" alt="">
                    </div>
                    <button
                        class="absolute h-10 w-10 hover:bg-caa-primary m-2 bottom-0 bg-primary rounded-full text-gray-200 flex flex-col justify-center">
                        <i class="fas fa-arrow-right mx-auto"></i>
                    </button>
                </div>

            </div>
            <p class="text-center">An authorized distributor of a product is a trusted and officially recognized
                entity that has been
                granted the legal rights and permissions to distribute and sell a particular product or range of
                products. These distributors play a pivotal role in the supply chain, ensuring that the products
                reach the intended market and consumers efficiently and reliably. </p>
        </div>

        <div class="absolute flex justify-center -top-4 w-full">
            <div class="h-10 w-10 bg-white rounded-br-3xl rounded-bl-3xl ">
            </div>
        </div>
    </section>
    {{-- END Authorized Dstributor --}}
    {{-- History Of 12 Years of CAA --}}
    @php
        $thisYear = date('Y') - 2008;
    @endphp
    {{-- End History of Caa --}}
    <section class=" w-full relative text-gray-900 ">
        <div class="max-w-screen-lg mx-auto py-14  flex flex-col gap-7 ">
            <h2 class="text-left text-3xl text-primary italic font-semibold"> {{ $thisYear }} Years of
                PT.
                Cipta
                Aneka
                Air</h2>
            <div>

                <ol class="items-center sm:flex">
                    <li class="relative mb-6 sm:mb-0">
                        <div class="flex items-center">
                            <div
                                class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-200 shrink-0">
                                <svg class="w-2.5 h-2.5 text-white dark:text-blue-300" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </div>
                            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                        </div>
                        <div class="mt-3 sm:pr-8">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Flowbite Library v1.0.0
                            </h3>
                            <time
                                class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released
                                on December 2, 2021</time>
                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Get started with
                                dozens of web components and interactive elements.</p>
                        </div>
                    </li>
                    <li class="relative mb-6 sm:mb-0">
                        <div class="flex items-center">
                            <div
                                class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-200 shrink-0">
                                <svg class="w-2.5 h-2.5 text-white dark:text-blue-300" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </div>
                            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                        </div>
                        <div class="mt-3 sm:pr-8">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Flowbite Library v1.2.0
                            </h3>
                            <time
                                class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released
                                on December 23, 2021</time>
                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Get started with
                                dozens of web components and interactive elements.</p>
                        </div>
                    </li>
                    <li class="relative mb-6 sm:mb-0">
                        <div class="flex items-center">
                            <div
                                class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-200 shrink-0">
                                <svg class="w-2.5 h-2.5 text-white dark:text-blue-300" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </div>
                            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                        </div>
                        <div class="mt-3 sm:pr-8">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Flowbite Library v1.3.0
                            </h3>
                            <time
                                class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released
                                on January 5, 2022</time>
                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Get started with
                                dozens of web components and interactive elements.</p>
                        </div>
                    </li>
                    <li class="relative mb-6 sm:mb-0">
                        <div class="flex items-center">
                            <div
                                class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-200 shrink-0">
                                <svg class="w-2.5 h-2.5 text-white dark:text-blue-300" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </div>
                            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                        </div>
                        <div class="mt-3 sm:pr-8">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Flowbite Library v1.3.0
                            </h3>
                            <time
                                class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released
                                on January 5, 2022</time>
                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Get started with
                                dozens of web components and interactive elements.</p>
                        </div>
                    </li>
                </ol>

            </div>
        </div>
    </section>
    {{-- End Intro Section --}}
    {{-- Why Choose Us --}}
    <section class=" w-full relative text-gray-900 ">
        <div class="max-w-screen-lg mx-auto py-14  flex flex-col gap-20 ">
            <h2 class="text-left text-3xl text-primary italic font-semibold"> Why Choose Us ?</h2>
            <div class="grid grid-cols-3  justify-items-center max-w-3xl mx-auto gap-10 ">
                <div class="  h-80   bg-slate-100 drop-shadow-lg rounded-3xl relative  ">
                    <div class="p-5  text-primary flex flex-col justify-center  h-full z-10">
                        <div>
                            We focus on being highly innovative and creative in developing our products and services
                            as
                            well as offering broad coverage with competitive terms
                        </div>
                    </div>


                    <div class="w-full  absolute -top-10 flex justify-center">
                        <div
                            class="h-16 w-16 bg-slate-100  drop-shadow-lg rounded-full flex flex-col justify-center outline-primary border-primary border-4 ">
                            <div class="mx-auto text-primary font-semibold text-3xl">
                                <span>1</span>
                            </div>
                        </div>
                    </div>

                    <div class="absolute bottom-2 overflow-hidden">
                        <img class="opacity-10 px-5" src="/assets/img/caa-logo.png" alt="">
                    </div>
                </div>
                <div class=" h-80  bg-slate-100 drop-shadow-lg rounded-3xl relative ">
                    <div class="p-5  text-primary flex flex-col justify-center  h-full">
                        <div>
                            Best prices and unwavering quality assurance. Our mission is to deliver value to our
                            customers without compromising on the excellence of our products and services.
                        </div>
                    </div>
                    <div class="w-full  absolute -top-10 flex justify-center">
                        <div
                            class="h-16 w-16 bg-slate-100  drop-shadow-lg rounded-full flex flex-col justify-center outline-primary border-primary border-4 ">
                            <div class="mx-auto text-primary font-semibold text-3xl">
                                <span>2</span>
                            </div>
                        </div>
                    </div>

                    <div class="absolute bottom-2 overflow-hidden">
                        <img class="opacity-10 px-5" src="/assets/img/caa-logo.png" alt="">
                    </div>
                </div>
                <div class=" h-80  bg-slate-100 drop-shadow-lg rounded-3xl relative  ">
                    <div class="p-5  text-primary flex flex-col justify-center  h-full">
                        <div class=" capitalize ">
                            our commitment to you extends far beyond the point of sale. We believe that your journey
                            with us is just beginning when you make a purchase. That's why we take pride in offering
                            'Excellent After Sales Service' to ensure your complete satisfaction.
                        </div>
                    </div>
                    <div class="w-full  absolute -top-10 flex justify-center">
                        <div
                            class="h-16 w-16 bg-slate-100  drop-shadow-lg rounded-full flex flex-col justify-center outline-primary border-primary border-4 ">
                            <div class="mx-auto text-primary font-semibold text-3xl">
                                <span>3</span>
                            </div>
                        </div>
                    </div>

                    <div class="absolute bottom-2 ">
                        <img class="opacity-10 px-5" src="/assets/img/caa-logo.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Why Choose Us --}}

    {{-- Product Explore --}}
    <section class=" w-full relative text-gray-900 ">
        <div class="max-w-screen-lg mx-auto py-14  flex flex-col gap-10 ">
            <div>
                <h2 class="text-left text-3xl text-primary font-semibold"> Product Explore</h2>
                <span class="text-left text-sm italic text-primary font-semibold">Our Categories Produk</span>
            </div>
            <div class="grid grid-cols-4 grid-flow-row gap-6">
                <div class=" h-48 bg-slate-50 drop-shadow-lg rounded-3xl overflow-hidden relative ">
                    <div class="text-primary flex flex-col justify-start h-full">
                        <div class=" h-48 ">
                            <img class=" object-cover h-full w-full " src="/assets/img/cartridge-cobtter.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="absolute top-0 flex flex-col justify-center h-48 w-full px-6">
                        <div class=" bg-primary-color bg-opacity-80 text-white rounded-tl-2xl rounded-br-2xl ">
                            <h2 class="mx-auto text-center py-2">Cartidge Filter Cobetter</h2>
                        </div>
                    </div>
                </div>
                <div class=" h-48 bg-slate-50 drop-shadow-lg rounded-3xl overflow-hidden relative ">
                    <div class="text-primary flex flex-col justify-start h-full">
                        <div class=" h-48 ">
                            <img class=" object-cover h-full w-full " src="/assets/img/cartridge-cobtter.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="absolute top-0 flex flex-col justify-center h-48 w-full px-6">
                        <div class=" bg-primary-color bg-opacity-80 text-white rounded-tl-2xl rounded-br-2xl ">
                            <h2 class="mx-auto text-center py-2">Cartidge Filter Cobetter</h2>
                        </div>
                    </div>
                </div>
                <div class=" h-48 bg-slate-50 drop-shadow-lg rounded-3xl overflow-hidden relative ">
                    <div class="text-primary flex flex-col justify-start h-full">
                        <div class=" h-48 ">
                            <img class=" object-cover h-full w-full " src="/assets/img/cartridge-cobtter.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="absolute top-0 flex flex-col justify-center h-48 w-full px-6">
                        <div class=" bg-primary-color bg-opacity-80 text-white rounded-tl-2xl rounded-br-2xl ">
                            <h2 class="mx-auto text-center py-2">Cartidge Filter Cobetter</h2>
                        </div>
                    </div>
                </div>
                <div class=" h-48 bg-slate-50 drop-shadow-lg rounded-3xl overflow-hidden relative ">
                    <div class="text-primary flex flex-col justify-start h-full">
                        <div class=" h-48 ">
                            <img class=" object-cover h-full w-full " src="/assets/img/cartridge-cobtter.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="absolute top-0 flex flex-col justify-center h-48 w-full px-6">
                        <div class=" bg-primary-color bg-opacity-80 text-white rounded-tl-2xl rounded-br-2xl ">
                            <h2 class="mx-auto text-center py-2">Cartidge Filter Cobetter</h2>
                        </div>
                    </div>
                </div>
                <div class=" h-48 bg-slate-50 drop-shadow-lg rounded-3xl overflow-hidden relative ">
                    <div class="text-primary flex flex-col justify-start h-full">
                        <div class=" h-48 ">
                            <img class=" object-cover h-full w-full " src="/assets/img/cartridge-cobtter.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="absolute top-0 flex flex-col justify-center h-48 w-full px-6">
                        <div class=" bg-primary-color bg-opacity-80 text-white rounded-tl-2xl rounded-br-2xl ">
                            <h2 class="mx-auto text-center py-2">Cartidge Filter Cobetter</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center text-sm">
                <button class="bg-primary text-white rounded-tl-xl rounded-br-xl">
                    <p class="py-2 px-3 ">Show All Product</p>
                </button>
            </div>
        </div>
    </section>
    {{-- End Product Explore --}}

    {{-- Latest News --}}
    <section class=" w-full relative text-gray-900 ">
        <div class="max-w-screen-lg mx-auto py-14  flex flex-col gap-10 ">
            <div>
                <h2 class="text-left text-3xl text-primary font-semibold">Latest News</h2>
                <span class="text-left text-sm italic text-primary font-semibold">Our Update & Latest News</span>
            </div>
            <div class="grid grid-cols-2 grid-flow-row gap-6">
                <div class=" h-96 bg-slate-50 drop-shadow-lg rounded-3xl overflow-hidden ">
                    <div class="text-primary flex flex-col justify-start h-full">
                        <div class=" h-56  ">
                            <img class=" object-cover h-full w-full " src="/assets/img/cartridge-cobtter.jpg"
                                alt="">
                        </div>
                        <div class=" text-gray-800 p-3 flex flex-col gap-3">
                            <h2 class=" font-semibold text-xl ">Our Latest News Update</h2>
                            <span>20 Oktober 2023 | By Saldi Sucipto</span>
                            <p class="text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum
                                hic excepturi
                                illum ipsam doloribus ducimus officiis ab fugiat laboriosam aperiam!..</p>
                        </div>
                    </div>
                </div>
                <div class=" h-96 bg-slate-50 drop-shadow-lg rounded-3xl overflow-hidden ">
                    <div class="text-primary flex flex-col justify-start h-full">
                        <div class=" h-56  ">
                            <img class=" object-cover h-full w-full " src="/assets/img/cartridge-cobtter.jpg"
                                alt="">
                        </div>
                        <div class=" text-gray-800 p-3 flex flex-col gap-3">
                            <h2 class=" font-semibold text-xl ">Our Latest News Update</h2>
                            <span>20 Oktober 2023 | By Saldi Sucipto</span>
                            <p class="text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum
                                hic excepturi
                                illum ipsam doloribus ducimus officiis ab fugiat laboriosam aperiam!..</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="flex justify-center text-sm">
                <button class="bg-primary text-white rounded-tl-xl rounded-br-xl">
                    <p class="py-2 px-3 ">Read All News</p>
                </button>
            </div>
    </section>
    {{-- End Latest News --}}

    {{-- Download Center Section --}}
    <section class="w-full bg-slate-100 max-w-screen-lg mx-auto relative rounded-3xl">
        <div class="max-w-screen-lg mx-auto py-8 text-gray-800">
            <div class="m-8 flex flex-col gap-5">
                <div class="grid grid-flow-row grid-cols-3 gap-2">
                    <div class="bg-white  h-28  rounded-xl flex">
                        <img src="/assets/img/pdf-icon.png" alt="">
                        <div class="flex flex-col justify-center">
                            <div class="flex flex-col gap-2">
                                <div class="flex flex-col">
                                    <h1 class="text-xl">Company Profile</h1>
                                    <span class="text-xs">Company Profile PT. Cipta Aneka Air</span>
                                </div>
                                <button class="text-sm text-caa-primary text-left">Download</button>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white  h-28  rounded-xl flex">
                        <img src="/assets/img/pdf-icon.png" alt="">
                        <div class="flex flex-col justify-center">
                            <div class="flex flex-col gap-2">
                                <div class="flex flex-col">
                                    <h1 class="text-xl">Company Profile</h1>
                                    <span class="text-xs">Company Profile PT. Cipta Aneka Air</span>
                                </div>
                                <button class="text-sm text-caa-primary text-left">Download</button>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white  h-28  rounded-xl flex">
                        <img src="/assets/img/pdf-icon.png" alt="">
                        <div class="flex flex-col justify-center">
                            <div class="flex flex-col gap-2">
                                <div class="flex flex-col">
                                    <h1 class="text-xl">Company Profile</h1>
                                    <span class="text-xs">Company Profile PT. Cipta Aneka Air</span>
                                </div>
                                <button class="text-sm text-caa-primary text-left">Download</button>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white  h-28  rounded-xl flex">
                        <img src="/assets/img/pdf-icon.png" alt="">
                        <div class="flex flex-col justify-center">
                            <div class="flex flex-col gap-2">
                                <div class="flex flex-col">
                                    <h1 class="text-xl">Company Profile</h1>
                                    <span class="text-xs">Company Profile PT. Cipta Aneka Air</span>
                                </div>
                                <button class="text-sm text-caa-primary text-left">Download</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute flex justify-end  -top-16 w-full ">
            <img class="max-h-40 -mr-24 drop-shadow-lg" src="./assets/img/caa-logo.png" alt="">
        </div>
        <div class="absolute -top-6  flex justify-start w-full ">
            <h1 class="py-2 px-10 bg-caa-primary text-xl text-gray-100">Download Center</h1>
        </div>
    </section>
    {{-- END  Download Center Section --}}
@endsection
