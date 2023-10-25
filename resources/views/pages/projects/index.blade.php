@extends('layouts.front')

@section('konten')
    <div class=" max-w-screen-xl mx-auto my-20 flex flex-col gap-10 ">

        {{-- Katgeori Procuk --}}
        <div class="flex flex-col gap-2">
            <h2 class="text-left text-xl text-gray-800">Our Valued Customer</h2>
            <div class="grid grid-flow-col  bg-slate-100 rounded-xl ">
                <div class="p-10 grid grid-flow-row grid-cols-4 gap-4">
                    <div class=" bg-white rounded-full drop-shadow-lg h-72 ">
                        <img class=" w-full h-full object-cover rounded-full " src="/assets/img/logo-ot.png" alt="">
                        <div class="flex flex-col justify-center ">
                            <div class="w-full text-center -mt-9 ">
                                <a class=" bg-caa-primary p-4 rounded-full text-white bg-opacity-60 hover:text-caa-primary hover:bg-white font-semibold hover:drop-shadow-xl "
                                    href="#">PT. CS2 POLA SEHAT</a>
                            </div>
                        </div>
                    </div>
                    <div class=" bg-white rounded-full drop-shadow-lg h-72 ">
                        <img class=" w-full h-full object-cover rounded-full " src="/assets/img/logo-gof.png"
                            alt="">
                        <div class="flex flex-col justify-center ">
                            <div class="w-full text-center -mt-9 ">
                                <a class=" bg-caa-primary p-4 rounded-full text-white bg-opacity-60 hover:text-caa-primary hover:bg-white font-semibold hover:drop-shadow-xl "
                                    href="#">PT. GLOBAL ONKOLAB FARMA</a>
                            </div>
                        </div>
                    </div>
                    <div class=" bg-white rounded-full drop-shadow-lg h-72 ">
                        <img class=" w-full h-full object-cover rounded-full p-3 " src="/assets/img/logo-bbi.jpg"
                            alt="">
                        <div class="flex flex-col justify-center ">
                            <div class="w-full text-center -mt-9 ">
                                <a class=" bg-caa-primary uppercase text-sm p-4 rounded-full text-white bg-opacity-60 hover:text-caa-primary hover:bg-white font-semibold hover:drop-shadow-xl "
                                    href="#">PT. BBI</a>
                            </div>
                        </div>
                    </div>
                    <div class=" bg-white rounded-full drop-shadow-lg h-72 ">
                        <img class=" w-full h-full object-cover rounded-full " src="/assets/img/logo-kalbe.jpg"
                            alt="">
                        <div class="flex flex-col justify-center ">
                            <div class="w-full text-center -mt-9 ">
                                <a class=" bg-caa-primary p-4 rounded-full text-white bg-opacity-60 hover:text-caa-primary hover:bg-white font-semibold hover:drop-shadow-xl "
                                    href="#">PT. KALBIO GLOBAL MEDIKA</a>
                            </div>
                        </div>
                    </div>
                    <div class=" bg-white rounded-full drop-shadow-lg h-72 ">
                        <img class=" w-full h-full object-cover rounded-full " src="/assets/img/logo-otsuka.png"
                            alt="">
                        <div class="flex flex-col justify-center ">
                            <div class="w-full text-center -mt-9 ">
                                <a class=" bg-caa-primary p-4 rounded-full text-white bg-opacity-60 hover:text-caa-primary hover:bg-white font-semibold hover:drop-shadow-xl "
                                    href="#">PT. OTSUKA INDONESIA</a>
                            </div>
                        </div>
                    </div>
                    <div class=" bg-white rounded-full drop-shadow-lg h-72 ">
                        <img class=" w-full h-full object-cover rounded-full " src="/assets/img/logo-dankos.png"
                            alt="">
                        <div class="flex flex-col justify-center ">
                            <div class="w-full text-center -mt-9 ">
                                <a class=" bg-caa-primary p-4 rounded-full text-white bg-opacity-60 hover:text-caa-primary hover:bg-white font-semibold hover:drop-shadow-xl "
                                    href="#">PT. DANKOS FARMA</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- END Kategori --}}
        {{-- Latest Projects --}}
        <div class="flex flex-col ">
            <h2 class="text-left text-xl text-gray-800">List Of Project</h2>
            <div class="p-3 grid grid-flow-col grid-cols-12  max-w-screen-xl rounded-lg mx-auto bg-slate-100 w-full gap-3">
                <div class="col-span-3 w-full  flex justify-end">
                    <form class="w-full" action="">
                        <select name="" id="" class=" p-2 rounded-lg drop-shadow-lg w-full ">
                            <option value="">On Going Projects</option>
                            <option value="">Finish Projects</option>
                        </select>
                    </form>
                </div>
                <div class="col-span-9 w-full">
                    <div class="p-3 bg-white drop-shadow-lg rounded-lg">
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-100 uppercase bg-caa-primary rounded-lg ">
                                    <tr class="">
                                        <th scope="col" class="px-6 py-3 rounded-tl-lg">
                                            Project Names
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Customer
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Project Details
                                        </th>
                                        <th scope="col" class="px-6 py-3 rounded-tr-lg ">
                                            Years
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white border-b  text-gray-900  hover:bg-gray-50">
                                        <th class="px-6 py-4 font-medium  whitespace-nowrap w-28 ">
                                            Purified Generation System
                                        </th>
                                        <td class="px-6 py-4">
                                            PT. DANKOS FARMA
                                        </td>
                                        <td class="px-6 py-4">
                                            PW Distribution Loop, WFI Distribution Loop, Puresteam Distribution Installation
                                        </td>
                                        <td class="px-6 py-4">
                                            2021
                                        </td>
                                    </tr>

                                    <tr class="bg-white border-b  text-gray-900  hover:bg-gray-50">
                                        <th class="px-6 py-4 font-medium  whitespace-nowrap w-28 ">
                                            MBR System
                                        </th>
                                        <td class="px-6 py-4">
                                            PT. CISARUA MOUNTAIN DIARY
                                        </td>
                                        <td class="px-6 py-4">
                                            Waste Water Treatment Plant System
                                        </td>
                                        <td class="px-6 py-4">
                                            2022
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
