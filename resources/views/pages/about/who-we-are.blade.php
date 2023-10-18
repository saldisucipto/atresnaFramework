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
            <div class="flex-1 bg-slate-50 rounded-lg relative">
                <img class=" w-full h-full object-cover rounded-lg " src="/assets/img/teams.jpg" alt="">
                <div class="absolute top-0 flex w-full bg-caa-primary bg-opacity-50 rounded-tl-lg rounded-tr-lg">
                    <p class="py-20 mx-auto w-full text-center font-semibold text-2xl text-white uppercase ">
                        Our Wonderful Teams
                    </p>
                </div>
            </div>
            <div class="flex-1 bg-slate-50 rounded-lg flex flex-col gap-4 p-4">
                <h2 class=" text-2xl font-semibold text-gray-700 ">Board Of Director</h2>
                <div class="flex flex-col gap-3">
                    <div class="flex flex-col">
                        <p class="underline">Dr. Rano Kartono, B.IT., M. Bus.</p>
                        <span class="text-sm font-semibold">Managing Director</span>
                    </div>
                    <div class=" text-justify text-base ">
                        Born in 1982, Board member since 2008
                        Graduated with degree in Bachelor of Information Technology (Business Information System) from
                        Charles Sturt University, Australia in 2002; Master of Business (Management Information System) in
                        2003 from University of South Australia, Australia; Doctor of Research in Management
                        (Entrepreneurship & Innovation) in 2017 from University of Bina Nusantara, Indonesia. He has lot of
                        experiences in managing few companies and beside that, He is one of the Faculty Member in Binus
                        Business School- University of Bina Nusantara, and also still active lecturing in few Universities
                        in Jakarta. At present, He is appointed by Board of Directors as Managing Director of PT. Cipta
                        Aneka Air.
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <div class="flex flex-col">
                        <p class="underline">Edy Kartono, B. Bus.</p>
                        <span class="text-sm font-semibold">Operational Director</span>
                    </div>
                    <div class=" text-justify text-base ">
                        Born in 1984, Board member since 2008
                        Graduated with degree in Bachelor of Business from Charles Sturt University, Australia in 2006.
                        After returned to Jakarta, He started working in one of multinational company as management and
                        operational manager. At present, He is appointed by Board of Directors as Operational Director of
                        PT. Cipta Aneka Air.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
