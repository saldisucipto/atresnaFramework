<div class="max-w-screen-lg mx-auto my-20">
    <div class="flex gap-5 h-slider">
        <div class="flex-1">
            <img class="w-full h-full object-cover hover:rounded-tb-panel hover:rounded-br-panel1 hover:rounded-tl-panel1 hover:rounded-tr-none  rounded-tr-panel rounded-bl-panel1  border-4 border-secondary1-color-mtma "
                src="/storage/img/static-pages/{{ $staticData->image }}" alt="">
        </div>
        <div class="flex-1 flex flex-col gap-2 justify-start">
            <div>
                <h1 class="font-semibold text-gray-800 text-xl">{{ $staticData->title }}</h1>
            </div>
            {!! $staticData->content !!}
        </div>
    </div>
</div>
