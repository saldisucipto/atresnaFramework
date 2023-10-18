@extends('layouts.front')

@section('konten')
    <div class="w-full flex flex-col gap-5  max-w-screen-lg mx-auto ">
        <div class="relative">
            <img class=" rounded-2xl " src="/assets/img/about-img.jpg" alt="">
            <div class="absolute bg-caa-primary top-0 h-full flex flex-col justify-center bg-opacity-50 w-full rounded-2xl">
                <div class=" mx-auto ">
                    <div class="  text-center text-gray-100 ">
                        <h1 class=" font-bold text-6xl  ">ABOUT <span class=" underline ">US</span></h1>
                    </div>
                </div>
            </div>
        </div>
        @include('components.nav-about')

        <div class="flex justify-between gap-2">
            <div class="flex-1  rounded-lg relative">
                <img class=" w-full max-[700]: object-cover rounded-lg " src="/assets/img/teams.jpg" alt="">
                <div class="absolute top-0 flex w-full bg-caa-primary bg-opacity-50 rounded-tl-lg rounded-tr-lg">
                    <p class="py-20 mx-auto w-full text-center font-semibold text-2xl text-white uppercase ">
                        Vision & Mission
                    </p>
                </div>
            </div>
            <div class="flex-1 bg-slate-50 rounded-lg flex flex-col gap-4 p-4">

                <div class="flex-1 bg-slate-50 rounded-lg flex flex-col gap-4 p-4">

                    <div class="flex flex-col gap-3">
                        <div class="flex flex-col">
                            <p class="underline text-3xl">Vision</p>
                            <span class="text-sm font-semibold">Our Vision</span>
                        </div>
                        <div class=" text-justify text-base ">
                            Being Recognized as a Total solutions for Pharmaceutical water industry in Indonesia.
                        </div>
                    </div>

                    <div class="flex flex-col gap-3">
                        <div class="flex flex-col">
                            <p class="underline text-3xl">Mission</p>
                            <span class="text-sm font-semibold">Our Mission</span>
                        </div>
                        <div class=" text-justify text-base flex flex-col gap-3 ">
                            <li>
                                CAA build a strong alliance network with our customers to gained trust and satisfaction from
                                our
                                customers.
                            </li>
                            <li>
                                CAA view human resource as an investment rather than a cost.
                            </li>
                            <li>
                                CAA constantly adopting latest technology and best practice management procedure to
                                guarantee
                                the quality of our products and services.
                            </li>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
