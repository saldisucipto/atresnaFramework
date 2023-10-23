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
        {{-- Brand Product --}}
        <div class="flex flex-col gap-2">
            <h2 class="text-left text-xl text-gray-800">Our Experiences</h2>
            <div class="h-12 bg-slate-100 w-full rounded-lg flex flex-col justify-center px-3">
                <form class="" action="#">
                    <select class="p-2 rounded-lg" name="" id="">
                        <option value="">On Going Projects</option>
                        <option value="">Finished Projects</option>
                    </select>
                </form>
            </div>

        </div>
        {{-- END Brand Product --}}


        {{-- Latest Produk --}}
        <div class="flex flex-col gap-2">
            <h2 class="text-left text-xl text-gray-800">Latest Products</h2>
            <div class=" grid grid-flow-row grid-cols-5 gap-4 ">
                <div class=" h-96 bg-slate-100 drop-shadow-xl rounded-xl flex flex-col gap-2 ">
                    <div class=" h-56 ">
                        <img class=" h-full w-full object-cover rounded-tl-xl rounded-tr-xl "
                            src="/assets/img/cartridge-cobtter.jpg" alt="">
                    </div>
                    <div class="p-2 flex flex-col gap-2">
                        <a href="#" class=" text-gray-700 font-semibold ">Lorem ipsum dolor sit amet, consectetur
                            adipisicing
                            elit...</a>
                        <div class="flex gap-1">
                            <div
                                class="text-xs  px-3 bg-caa-primary text-white rounded-lg flex flex-col justify-center h-6 w-20 text-center ">
                                <span>C-Pure</span>
                            </div>
                            <div
                                class="text-xs  px-3 bg-caa-secondary  text-white rounded-lg flex flex-col justify-center h-6 w-20 text-center ">
                                <span>Cartridge</span>
                            </div>
                        </div>
                        <div>
                            <span class="text-gray-700">Ready Stok (60)</span>
                        </div>
                    </div>
                </div>
                <div class=" h-96 bg-slate-100 drop-shadow-xl rounded-xl flex flex-col gap-2 ">
                    <div class=" h-56 ">
                        <img class=" h-full w-full object-cover rounded-tl-xl rounded-tr-xl "
                            src="/assets/img/cartridge-cobtter.jpg" alt="">
                    </div>
                    <div class="p-2 flex flex-col gap-2">
                        <a href="#" class=" text-gray-700 font-semibold ">Lorem ipsum dolor sit amet, consectetur
                            adipisicing
                            elit...</a>
                        <div class="flex gap-1">
                            <div
                                class="text-xs  px-3 bg-caa-primary text-white rounded-lg flex flex-col justify-center h-6 w-20 text-center ">
                                <span>C-Pure</span>
                            </div>
                            <div
                                class="text-xs  px-3 bg-caa-secondary  text-white rounded-lg flex flex-col justify-center h-6 w-20 text-center ">
                                <span>Cartridge</span>
                            </div>
                        </div>
                        <div>
                            <span class="text-gray-700">Ready Stok (60)</span>
                        </div>
                    </div>
                </div>
                <div class=" h-96 bg-slate-100 drop-shadow-xl rounded-xl flex flex-col gap-2 ">
                    <div class=" h-56 ">
                        <img class=" h-full w-full object-cover rounded-tl-xl rounded-tr-xl "
                            src="/assets/img/cartridge-cobtter.jpg" alt="">
                    </div>
                    <div class="p-2 flex flex-col gap-2">
                        <a href="#" class=" text-gray-700 font-semibold ">Lorem ipsum dolor sit amet, consectetur
                            adipisicing
                            elit...</a>
                        <div class="flex gap-1">
                            <div
                                class="text-xs  px-3 bg-caa-primary text-white rounded-lg flex flex-col justify-center h-6 w-20 text-center ">
                                <span>C-Pure</span>
                            </div>
                            <div
                                class="text-xs  px-3 bg-caa-secondary  text-white rounded-lg flex flex-col justify-center h-6 w-20 text-center ">
                                <span>Cartridge</span>
                            </div>
                        </div>
                        <div>
                            <span class="text-gray-700">Ready Stok (60)</span>
                        </div>
                    </div>
                </div>
                <div class=" h-96 bg-slate-100 drop-shadow-xl rounded-xl flex flex-col gap-2 ">
                    <div class=" h-56 ">
                        <img class=" h-full w-full object-cover rounded-tl-xl rounded-tr-xl "
                            src="/assets/img/cartridge-cobtter.jpg" alt="">
                    </div>
                    <div class="p-2 flex flex-col gap-2">
                        <a href="#" class=" text-gray-700 font-semibold ">Lorem ipsum dolor sit amet, consectetur
                            adipisicing
                            elit...</a>
                        <div class="flex gap-1">
                            <div
                                class="text-xs  px-3 bg-caa-primary text-white rounded-lg flex flex-col justify-center h-6 w-20 text-center ">
                                <span>C-Pure</span>
                            </div>
                            <div
                                class="text-xs  px-3 bg-caa-secondary  text-white rounded-lg flex flex-col justify-center h-6 w-20 text-center ">
                                <span>Cartridge</span>
                            </div>
                        </div>
                        <div>
                            <span class="text-gray-700">Ready Stok (60)</span>
                        </div>
                    </div>
                </div>
                <div class=" h-96 bg-slate-100 drop-shadow-xl rounded-xl flex flex-col gap-2 ">
                    <div class=" h-56 ">
                        <img class=" h-full w-full object-cover rounded-tl-xl rounded-tr-xl "
                            src="/assets/img/cartridge-cobtter.jpg" alt="">
                    </div>
                    <div class="p-2 flex flex-col gap-2">
                        <a href="#" class=" text-gray-700 font-semibold ">Lorem ipsum dolor sit amet, consectetur
                            adipisicing
                            elit...</a>
                        <div class="flex gap-1">
                            <div
                                class="text-xs  px-3 bg-caa-primary text-white rounded-lg flex flex-col justify-center h-6 w-20 text-center ">
                                <span>C-Pure</span>
                            </div>
                            <div
                                class="text-xs  px-3 bg-caa-secondary  text-white rounded-lg flex flex-col justify-center h-6 w-20 text-center ">
                                <span>Cartridge</span>
                            </div>
                        </div>
                        <div>
                            <span class="text-gray-700">Ready Stok (60)</span>
                        </div>
                    </div>
                </div>
                <div class=" h-96 bg-slate-100 drop-shadow-xl rounded-xl flex flex-col gap-2 ">
                    <div class=" h-56 ">
                        <img class=" h-full w-full object-cover rounded-tl-xl rounded-tr-xl "
                            src="/assets/img/cartridge-cobtter.jpg" alt="">
                    </div>
                    <div class="p-2 flex flex-col gap-2">
                        <a href="#" class=" text-gray-700 font-semibold ">Lorem ipsum dolor sit amet, consectetur
                            adipisicing
                            elit...</a>
                        <div class="flex gap-1">
                            <div
                                class="text-xs  px-3 bg-caa-primary text-white rounded-lg flex flex-col justify-center h-6 w-20 text-center ">
                                <span>C-Pure</span>
                            </div>
                            <div
                                class="text-xs  px-3 bg-caa-secondary  text-white rounded-lg flex flex-col justify-center h-6 w-20 text-center ">
                                <span>Cartridge</span>
                            </div>
                        </div>
                        <div>
                            <span class="text-gray-700">Ready Stok (60)</span>
                        </div>
                    </div>
                </div>
                <div class=" h-96 bg-slate-100 drop-shadow-xl rounded-xl flex flex-col gap-2 ">
                    <div class=" h-56 ">
                        <img class=" h-full w-full object-cover rounded-tl-xl rounded-tr-xl "
                            src="/assets/img/cartridge-cobtter.jpg" alt="">
                    </div>
                    <div class="p-2 flex flex-col gap-2">
                        <a href="#" class=" text-gray-700 font-semibold ">Lorem ipsum dolor sit amet, consectetur
                            adipisicing
                            elit...</a>
                        <div class="flex gap-1">
                            <div
                                class="text-xs  px-3 bg-caa-primary text-white rounded-lg flex flex-col justify-center h-6 w-20 text-center ">
                                <span>C-Pure</span>
                            </div>
                            <div
                                class="text-xs  px-3 bg-caa-secondary  text-white rounded-lg flex flex-col justify-center h-6 w-20 text-center ">
                                <span>Cartridge</span>
                            </div>
                        </div>
                        <div>
                            <span class="text-gray-700">Ready Stok (60)</span>
                        </div>
                    </div>
                </div>
                <div class=" h-96 bg-slate-100 drop-shadow-xl rounded-xl flex flex-col gap-2 ">
                    <div class=" h-56 ">
                        <img class=" h-full w-full object-cover rounded-tl-xl rounded-tr-xl "
                            src="/assets/img/cartridge-cobtter.jpg" alt="">
                    </div>
                    <div class="p-2 flex flex-col gap-2">
                        <a href="#" class=" text-gray-700 font-semibold ">Lorem ipsum dolor sit amet, consectetur
                            adipisicing
                            elit...</a>
                        <div class="flex gap-1">
                            <div
                                class="text-xs  px-3 bg-caa-primary text-white rounded-lg flex flex-col justify-center h-6 w-20 text-center ">
                                <span>C-Pure</span>
                            </div>
                            <div
                                class="text-xs  px-3 bg-caa-secondary  text-white rounded-lg flex flex-col justify-center h-6 w-20 text-center ">
                                <span>Cartridge</span>
                            </div>
                        </div>
                        <div>
                            <span class="text-gray-700">Ready Stok (60)</span>
                        </div>
                    </div>
                </div>
                <div class=" h-96 bg-slate-100 drop-shadow-xl rounded-xl flex flex-col gap-2 ">
                    <div class=" h-56 ">
                        <img class=" h-full w-full object-cover rounded-tl-xl rounded-tr-xl "
                            src="/assets/img/cartridge-cobtter.jpg" alt="">
                    </div>
                    <div class="p-2 flex flex-col gap-2">
                        <a href="#" class=" text-gray-700 font-semibold ">Lorem ipsum dolor sit amet, consectetur
                            adipisicing
                            elit...</a>
                        <div class="flex gap-1">
                            <div
                                class="text-xs  px-3 bg-caa-primary text-white rounded-lg flex flex-col justify-center h-6 w-20 text-center ">
                                <span>C-Pure</span>
                            </div>
                            <div
                                class="text-xs  px-3 bg-caa-secondary  text-white rounded-lg flex flex-col justify-center h-6 w-20 text-center ">
                                <span>Cartridge</span>
                            </div>
                        </div>
                        <div>
                            <span class="text-gray-700">Ready Stok (60)</span>
                        </div>
                    </div>
                </div>
                <div class=" h-96 bg-slate-100 drop-shadow-xl rounded-xl flex flex-col gap-2 ">
                    <div class=" h-56 ">
                        <img class=" h-full w-full object-cover rounded-tl-xl rounded-tr-xl "
                            src="/assets/img/cartridge-cobtter.jpg" alt="">
                    </div>
                    <div class="p-2 flex flex-col gap-2">
                        <a href="#" class=" text-gray-700 font-semibold ">Lorem ipsum dolor sit amet, consectetur
                            adipisicing
                            elit...</a>
                        <div class="flex gap-1">
                            <div
                                class="text-xs  px-3 bg-caa-primary text-white rounded-lg flex flex-col justify-center h-6 w-20 text-center ">
                                <span>C-Pure</span>
                            </div>
                            <div
                                class="text-xs  px-3 bg-caa-secondary  text-white rounded-lg flex flex-col justify-center h-6 w-20 text-center ">
                                <span>Cartridge</span>
                            </div>
                        </div>
                        <div>
                            <span class="text-gray-700">Ready Stok (60)</span>
                        </div>
                    </div>
                </div>
                <div class=" h-96 bg-slate-100 drop-shadow-xl rounded-xl flex flex-col gap-2 ">
                    <div class=" h-56 ">
                        <img class=" h-full w-full object-cover rounded-tl-xl rounded-tr-xl "
                            src="/assets/img/cartridge-cobtter.jpg" alt="">
                    </div>
                    <div class="p-2 flex flex-col gap-2">
                        <a href="#" class=" text-gray-700 font-semibold ">Lorem ipsum dolor sit amet, consectetur
                            adipisicing
                            elit...</a>
                        <div class="flex gap-1">
                            <div
                                class="text-xs  px-3 bg-caa-primary text-white rounded-lg flex flex-col justify-center h-6 w-20 text-center ">
                                <span>C-Pure</span>
                            </div>
                            <div
                                class="text-xs  px-3 bg-caa-secondary  text-white rounded-lg flex flex-col justify-center h-6 w-20 text-center ">
                                <span>Cartridge</span>
                            </div>
                        </div>
                        <div>
                            <span class="text-gray-700">Ready Stok (60)</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        {{-- END Latest Produk --}}


    </div>
@endsection
