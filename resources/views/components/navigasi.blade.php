<div>
    <div class="drop-shadow-lg border-b-2 relative">
        <div
            class="w-56 h-screen absolute right-0 top-10 z-10 rounded-tl-lg rounded-bl-lg drop-shadow-lg bg-primary hidden">
            <div class="my-1
            mx-2 flex justify-between mt-4">
                <div>
                    <button class="h-8 w-8 bg-white rounded-full flex justify-center">
                        <span class="text-lg font-bold text-primary text-center">x</span>
                    </button>
                </div>
                <div class="text-white my-auto text-sm">
                    <span>MENU</span>
                </div>
            </div>
            <hr class="my-2 mx-2" />
            <div class="mx-2">
                <div class="my-auto">
                    <ul class="flex flex-col gap-4 text-base font-semibold text-white">
                        <li class="">
                            <a href="/">Beranda</a>
                        </li>
                        <li>
                            <a href="/services">Services</a>
                        </li>
                        <li>
                            <a href="/news">News</a>
                        </li>
                        <li>
                            <a href="/about">About</a>
                        </li>
                        <li>
                            <a href="/contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bg-white">
            <div class="flex flex-col justify-start ">
                <div class="bg-primary w-full">
                    <div class="max-w-screen-xl mx-auto">
                        <div class="flex justify-between text-white py-2 gap-2">
                            <div class="my-auto text-xs pl-5 tablet:px-5 tablet:w-full">
                                <div class="flex gap-2 tablet:flex tablet:justify-between">
                                    <div>
                                        <i class="fas fa-phone-alt"></i>
                                        <a href="{{ 'tel:' . $companyInfo->company_phone }}" class="mx-2">Hubungi Kami
                                            : {{ $companyInfo->company_phone }}</a>
                                    </div>
                                    <div class="mx-">
                                        <i class="fas fa-map"></i>
                                        {{ $companyInfo->company_address }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mx-auto max-w-screen-xl ">
                    <div class="container mx-auto">
                        <div class="flex py-7 justify-between">
                            <div class="pl-2 flex flex-col jus\  h-full ">
                                <a href="/" class="mx-2 flex ">
                                    <div class=" h-16">
                                        <img class="  h-16  cursor-pointer mx-3"
                                            src="{{ '/storage/img/company/' . $companyInfo->company_logo }}"
                                            alt="Narayana Consulting" />
                                        <div class="flex flex-col justify-center h-16  ">
                                            <h1 class="uppercase font-bold text-1xl">{{ $companyInfo->company_name }}
                                            </h1>
                                        </div>
                                </a>
                            </div>
                        </div>
                        <div class="h-full my-auto">
                            <ul class="flex gap-4 text-lg font-semibold text-gray-600">
                                <li class=" @if (url()->current() == env('APP_URL')) font-bold text-primary @endif ">
                                    <a href="/">Beranda</a>
                                </li>
                                <li>
                                    <a href="/services">Services</a>
                                </li>
                                <li>
                                    <a href="/news">News</a>
                                </li>
                                <li>
                                    <a href="/about">About</a>
                                </li>
                                <li>
                                    <a href="/contact">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tablet:flex tablet:my-5 tablet:mx-6 justify-between hidden desktop:hidden">
                <div>
                    <a href="/">
                        <img class="w-44 tablet:w-28 cursor-pointer"
                            src="{{ '/storage/img/company/' . $companyInfo->company_logo }}"
                            alt="{{ $companyInfo->company_name }}" /></a>
                </div>
                <div class="my-auto ">
                    <button>
                        <i class="fas fa-bars fa-1x font-thin text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
