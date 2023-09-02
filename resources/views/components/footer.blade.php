<div class="w-full h-72 bg-primary relative hape:-mt-10">
    <!-- <div class="flex justify-between"> -->
    <div class="absolute hape:max-h-20 hape:max-w-20 h-56 w-56 bg-secondary rounded-br-full"></div>
    <div class="absolute right-0 bottom-0 rounded-tl-full hape:max-h-20 hape:max-w-20 h-56 w-56 bg-secondary"></div>
    <!-- </div> -->
    <div>
        <div class="absolute w-full">
            <div class=" hape:h-72 hape:flex hape:flex-col hape:my-4 hape:justify-center hape:gap-2 hape:mx-2 hidden">
                <div class=" flex flex-col ">
                    <img class=" hidden " src="{{ '/storage/img/company/' . $companyInfo->company_logo }}"
                        alt="Logo Narayana Consulting" />

                </div>
                <div class="mt-4 hape:-mt-3 text-gray-200">
                    <h1 class="font-bold">Head Office :</h1>
                    <p class="text-sm">
                        {{ $companyInfo->company_address }}
                    </p>
                </div>
                <div class="text-gray-200 hape:flex hape:gap-2">
                    <h1 class="font-bold hape:hidden">Contact Us :</h1>
                    <table>
                        <tr>
                            <td><i class="fas fa-phone mx-1"></i></td>
                            <td>
                                <a :href="'+' + $companyInfo - > company_phone">
                                    {{ $companyInfo->company_phone }}</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fas fa-envelope mx-1"></i>
                            </td>
                            <td>
                                <a :href="'mailto:' + $companyInfo - > company_email">
                                    {{ $companyInfo->company_email }}</a>
                            </td>
                        </tr>
                    </table>
                    <livewire:sosial-media-showcase />
                </div>
            </div>
            <div class="max-w-screen-lg mx-auto hape:hidden ">
                <div class="h-72  flex flex-wrap content-center justify-items-center gap-3">
                    <div class="flex-1 flex flex-col">
                        <img class="object-cover hape:object-contain" src="{{ '/assets/img/footer-logo.png' }}"
                            alt="Narayana Consulting" />
                    </div>
                    <div class="flex-1 hape:flex-none text-gray-200">
                        <div class="m-1">
                            <h1 class="font-bold">Head Office :</h1>
                            <p class="text-sm">
                                {{ $companyInfo->company_address }}
                            </p>
                        </div>
                    </div>
                    <div class="flex-1 hape:flex-none flex flex-col text-gray-200">
                        <div class="m-1">
                            <h1 class="font-bold">Contact Us :</h1>
                            <table>
                                <tr>
                                    <td><i class="fas fa-phone mx-1"></i></td>
                                    <td>
                                        <a :href="'+' + $companyInfo - > company_phone">
                                            {{ $companyInfo->company_phone }}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fas fa-envelope mx-1"></i>
                                    </td>
                                    <td>
                                        <a :href="'mailto:' + $companyInfo - > company_email">
                                            {{ $companyInfo->company_email }}</a>
                                    </td>
                                </tr>
                            </table>

                        </div>

                        <livewire:sosial-media-showcase />

                    </div>
                    <div class="flex-1 text-gray-200 hape:hidden">
                        <div class="m-1">
                            <h1 class="font-bold">Quick Links :</h1>
                            <ul class="text-sm">
                                <li>Beranda</li>
                                <li>Services</li>
                                <li>About</li>
                                <li>News</li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hape:absolute hape:bottom-0">
                <div class="text-xs bg-yellow-600 text-gray-200">
                    <div class="max-w-screen-lg mx-auto">
                        <div class="py-1 flex justify-between">
                            <div>
                                <i class="font-bold far fa-copyright"></i>
                                copyright 2022
                                <b class="capitalize">Narayana Consulting</b>
                            </div>
                            <div class="text-xs">
                                Produksi Dan Design By.
                                <a href="mailto:atreesnacreative@gmail.com">Atresna Creative</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
