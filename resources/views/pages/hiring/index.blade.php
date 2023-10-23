@extends('layouts.front')

@section('konten')
    <div class=" max-w-screen-xl mx-auto my-20 flex flex-col gap-10 ">
        {{-- Hirring Banner --}}
        <div class="  bg-slate-100 drop-shadow-lg h-slider rounded-2xl ">
            <img class="h-full w-full object-cover rounded-3xl" src="/assets/img/banner-promotion.jpg" alt="">
        </div>
        {{-- End Hirring Banner --}}

        {{-- Latest Projects --}}
        <div class="flex flex-col ">
            <h2 class="text-left text-xl text-gray-800"></h2>
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
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 text-gray-900 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap ">
                                            Apple MacBook Pro 17"
                                        </th>
                                        <td class="px-6 py-4">
                                            Silver
                                        </td>
                                        <td class="px-6 py-4">
                                            Laptop
                                        </td>
                                        <td class="px-6 py-4">
                                            $2999
                                        </td>

                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- END Latest Produk --}}
    </div>
@endsection
