<div class="relative hape:py-5 mx-3 ">
    <div class="h-slider hape:hidden  ">
        <img class="h-full object-cover" src="/assets/img/hero-background.png" />
    </div>
    <div
        class="absolute hape:relative  h-slider w-full inset-0 text-white text-xs leading-4 laptop:px-6 tablet:px-4 overflow-hidden ">
        <div class="flex flex-col justify-center h-slider hape:h-full ">
            <div class="mx-auto">
                <div class="max-w-screen-lg">
                    <div class="flex justify-center hape:gap-0 gap-3 hape:flex-col-reverse">
                        <div class="flex flex-1 my-auto">
                            <div class="text-secondary hape:text-center">
                                <h1 class="text-3xl hape:text-lg font-bold uppercase tablet:text-lg">
                                    {{ $sliders->slider_title }}
                                </h1>
                                <h2
                                    class="text-primary text-xl font-semibold capitalize text-justify leading-6 tablet:text-sm hape:text-xs">
                                    {{ $sliders->slider_desc }}
                                </h2>
                            </div>
                        </div>
                        <div class="flex-1 flex z-0">
                            <div class="my-auto tablet:mx-auto  w-full">
                                <img class=" h-slider m-6 p-16 hape:max-h-80 hape:mx-auto "
                                    src="{{ '/storage/img/sliders/' . $sliders->slider_image }}"
                                    alt="Tax Illustrations" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
