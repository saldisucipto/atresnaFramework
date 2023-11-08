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
    @include('components.brand')
    {{-- END Authorized Dstributor --}}
    {{-- History Of 12 Years of CAA --}}
    @include('components.history')
    {{-- End History of Caa --}}
    {{-- Why Choose Us --}}
    @include('components.why-choose-us')
    {{-- End Why Choose Us --}}

    {{-- Product Explore --}}
    @include('components.produk-card')
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
