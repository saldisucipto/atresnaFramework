<section class="max-w-screen-lg mx-auto relative pb-10">
    <div class="absolute flex flex-col justify-center h-full  w-hero">
        <div class="flex justify-between mx-2">
            <button
                class=" bg-white bg-opacity-50 hover:bg-opacity-75 text-3xl drop-shadow-lg h-20 px-3 rounded-full flex flex-col justify-center "
                id="slide-arrow-prev">
                <span class="my-auto"> &#8249;</span>
            </button>
            <button class=" bg-white text-3xl drop-shadow-lg px-3 rounded-full bg-opacity-50 hover:bg-opacity-75 "
                id="slide-arrow-next">
                &#8250;
            </button>
        </div>
    </div>
    <ul id="slides-container" class=" slides-container flex w-full overflow-scroll scroll-smooth">
        @foreach ($sliders as $item)
            <li style="flex: 1 0 100%" class="slide">
                <div class=" h-hero max-w-screen-lg bg-black overflow-hidden">
                    <img class="object-cover h-full w-hero" src="{{ '/storage/img/sliders/' . $item->slider_image }}"
                        alt="{{ $item->slider_title }}">
                </div>
            </li>
        @endforeach
    </ul>
</section>
