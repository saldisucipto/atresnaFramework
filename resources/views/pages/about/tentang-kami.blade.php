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
        <div class="flex justify-between gap-2 my-20">
            <div class="flex-1 bg-slate-50 rounded-lg flex flex-col gap-10 p-10 py-20">
                <img class=" px-20 object-cover "
                    src="{{ env('APP_URL') . '/storage/img/company/' . $companyInfo->company_logo }}" alt="">

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
    </div>
@endsection
