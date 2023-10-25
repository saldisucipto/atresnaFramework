@extends('layouts.front')

@section('konten')
    <div class=" max-w-screen-xl mx-auto my-20 flex flex-col gap-10 ">
        {{-- Hirring Banner --}}
        <div class="  bg-slate-100 drop-shadow-lg h-slider rounded-2xl ">
            <img class="h-full w-full object-cover rounded-3xl" src="/assets/img/hiring.jpg" alt="">
        </div>
        {{-- End Hirring Banner --}}

        {{-- Latest Projects --}}
        <div class="flex flex-col gap-3 ">
            <h2 class="text-left text-xl text-gray-800">Available Position</h2>

            <div class="flex flex-col gap-2">

                <div class="bg-white drop-shadow-lg rounded-lg">
                    <div class="p-5 flex justify-between ">
                        <h2 class="text-xl text-gray-700 font-semibold">Accounting & Finance</h2>
                        <div class="flex justify-end gap-6">
                            <button class=" bg-caa-primary text-gray-100 px-3 py-1 rounded-lg ">Apply Now</button>
                            <button> <i class="fas fa-arrow-down"></i> </button>
                        </div>

                    </div>
                    <div class="px-5 pb-5 py-1">
                        <hr>
                        <div class="flex flex-col gap-3">
                            <div class="flex flex-col gap-2">
                                <h2 class="text-lg font-semibold text-gray-700">Job Highlights</h2>
                                <li>
                                    Working with Multinational Colleague
                                </li>
                                <li>
                                    Career as a Finance Manager
                                </li>
                            </div>

                            <div class="flex flex-col gap-2">
                                <h2 class="text-lg font-semibold text-gray-700">Technical Skills:</h2>
                                <li>Degree or equivalent professional qualification in IT and finance.</li>
                                <li>Through knowledge of ERP systems and database administration</li>
                                <li>Hands on experience dealing with day-to-day troubleshooting of IT issues in a large
                                    organization</li>
                                <li>Understanding the requirements of the stakeholders and the ability to suggest sortable
                                    solutions.</li>
                                <li>Strong communication skills to work with all levels of employees in the organization.
                                </li>
                                <li>Strong technical skills in IT systems such as SAP/Microsoft/HRIS</li>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        {{-- END Latest Produk --}}
    </div>
@endsection
