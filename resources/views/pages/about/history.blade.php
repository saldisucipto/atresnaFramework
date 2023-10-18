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
            <div class="flex-1  rounded-lg relative">
                <img class=" w-full max-[700]: object-cover rounded-lg " src="/assets/img/teams.jpg" alt="">
                <div class="absolute top-0 flex w-full bg-caa-primary bg-opacity-50 rounded-tl-lg rounded-tr-lg">
                    <p class="py-20 mx-auto w-full text-center font-semibold text-2xl text-white uppercase ">
                        History About our Company
                    </p>
                </div>
            </div>
            <div class="flex-1 bg-slate-50 rounded-lg flex flex-col gap-4 p-4">

                <ol class="relative border-l border-gray-200 dark:border-gray-900">
                    <li class="mb-10 ml-4">
                        <div
                            class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-200 dark:bg-primary">
                        </div>
                        <time class="mb-1 text-lg font-semibold leading-none text-caa-primary">2008</time>
                        <h3 class="text-sm font-semibold text-gray-900 ">Established
                        </h3>
                        <p class="mb-4 text-base font-normal text-gray-800 dark:text-gray-600 text-justify">In the beginning
                            of
                            establishment of PT. Cipta Aneka Air; CAA company were built to compete in Water Treatment for
                            “Pharmaceutical industries” specialized in purified water generation system & distribution
                            looping system.</p>

                    </li>
                    <li class="mb-10 ml-4">
                        <div
                            class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-200 dark:bg-primary">
                        </div>
                        <time class="mb-1 text-lg font-semibold leading-none text-caa-primary">
                            2009</time>
                        <p class="text-base font-normal text-gray-800 dark:text-gray-600 text-justify">CAA begun to compete
                            in all kinds
                            of water treatment industries especially in membrane technology such as: Ultra Filtration (UF);
                            Brackish Water Reverse Osmosis (BWRO); Sea Water Reverse Osmosis (SWRO); Electro-Deionization
                            (EDI); and also Recycle water and Waste Water Treatment using Membrane Biological Reactor
                            (MBR)..</p>
                    </li>
                    <li class="mb-10 ml-4">
                        <div
                            class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-200 dark:bg-primary">
                        </div>
                        <time class="mb-1 text-lg font-semibold leading-none text-caa-primary">
                            2010</time>
                        <p class="text-base font-normal text-gray-800 dark:text-gray-600 text-justify">CAA begun to
                            gathering professional welders and fitters that specially in designing, installation of piping
                            system such as: cooling water piping installation; chiller piping installation; compressor
                            installation; auto feeding plastic material piping installation; fresh water installation;
                            product piping installation; gas piping installation; nitrogen piping installation and others
                            piping installation.</p>
                    </li>
                    <li class="mb-10 ml-4">
                        <div
                            class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-200 dark:bg-primary">
                        </div>
                        <time class="mb-1 text-lg font-semibold leading-none text-caa-primary">
                            2011</time>
                        <p class="text-base font-normal text-gray-800 dark:text-gray-600 text-justify">Started from 2011 CAA
                            begun to manufacture water storage tank; mixer tank and homogenizers tank. During CAA company
                            development, CAA has working on technological collaboration with PureTech Process System Ltd a
                            Major UK based company that specialized in purified water generation; Siemens Water Technology.
                            Pte. Ltd. a Major Singapore based company that specialized in Water Treatment Company and
                            CANPURE Pte., Ltd. a Major Canada based company that specialized in ultrafiltration membrane and
                            Electro-Deionization system. </p>
                    </li>
                    <li class="mb-10 ml-4">
                        <div
                            class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-200 dark:bg-primary">
                        </div>
                        <time class="mb-1 text-lg font-semibold leading-none text-caa-primary">
                            2015</time>
                        <p class="text-base font-normal text-gray-800 dark:text-gray-600 text-justify">
                            Started from 2015; CAA has working on technological collobaration with TOPSYSTEM Co., Ltd., a
                            Japanese company that specialized in design and manufacture of pharmaceutical manufacturing
                            units for preparation system, culture system and inactivation equipment for pharmaceutical
                            industrial. </p>
                    </li>
                    <li class="mb-10 ml-4">
                        <div
                            class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-200 dark:bg-primary">
                        </div>
                        <time class="mb-1 text-lg font-semibold leading-none text-caa-primary">
                            2015 - NOW</time>
                        <p class="text-base font-normal text-gray-800 dark:text-gray-600 text-justify">

                            CAA has grown into one of the best pharmaceutical water and looping-system engineering and
                            manufacturing leader within Indonesia market. And today, CAA has approximately 100 dedicated
                            skill workforces in our team and operating approximately 18,000 feet square workshop in Banten,
                            Indonesia. </p>
                    </li>
                </ol>

            </div>
        </div>
    </div>
@endsection
