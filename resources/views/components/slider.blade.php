<div class="relative ">
    <div class="h-slider  ">
        <img class="h-full object-cover" src="/assets/img/hero-background.png" />
    </div>
    <div class="absolute  h-slider w-full inset-0 text-white text-xs leading-4 laptop:px-6 tablet:px-4 overflow-hidden ">
        <div class="flex flex-col justify-center h-slider ">
            <div class="mx-auto">
                <div class="max-w-screen-lg">
                    <div class="flex  justify-center gap-3">
                        <div class="flex flex-1 my-auto">
                            <div class="text-secondary">
                                <h1 class="text-3xl font-bold uppercase tablet:text-lg">
                                    {{ $sliders->slider_title }}
                                </h1>
                                <h2
                                    class="text-primary text-xl font-semibold capitalize text-justify leading-6 tablet:text-sm hape:text-xs">
                                    {{ $sliders->slider_desc }}
                                </h2>
                            </div>
                        </div>
                        <div class="flex-1 flex">
                            <div class="my-auto tablet:mx-auto">
                                <img class=" h-slider m-6 p-16 "
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
