@extends('layouts.front')

@section('konten')
    <div>
        {{-- Slider Components --}}
        @include('components.slider')
        {{-- End Slider Components --}}

        {{-- Components --}}
        <div class=" text-white flex justify-center gap-16  ">
            <div class="flex flex-col gap-1">
                <div class=" h-52 w-52 bg-slate-400 rounded-full border-4 border-secondary1-color-mtma">
                    <img class="w-full h-full object-cover rounded-full" src="/assets/img/clean-water.png" alt="">
                </div>
                <div class="text-gray-800  w-52 overflow-hidden text-center flex flex-col gap-1 mx-auto">
                    <h1 class="font-semibold">Judul</h1>
                    <p class="font-thin leading-5 text-sm"> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Doloremque
                        nesciunt
                        nostrum
                    </p>
                </div>
            </div>
            <div class="flex flex-col gap-1">
                <div class=" h-52  w-52 bg-slate-400 rounded-full border-4 border-secondary1-color-mtma">
                    <img class="w-full h-full object-cover rounded-full" src="/assets/img/clean-water.png" alt="">
                </div>
                <div class="text-gray-800  w-52 overflow-hidden text-center flex flex-col gap-1 mx-auto">
                    <h1 class="font-semibold">Judul</h1>
                    <p class="font-thin leading-5 text-sm"> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Doloremque
                        nesciunt
                        nostrum
                    </p>
                </div>
            </div>
            <div class="flex flex-col gap-1">
                <div class=" h-52  w-52 bg-slate-400 rounded-full border-4 border-secondary1-color-mtma">
                    <img class="w-full h-full object-cover rounded-full" src="/assets/img/clean-water.png" alt="">
                </div>
                <div class="text-gray-800  w-52 overflow-hidden text-center flex flex-col gap-1 mx-auto">
                    <h1 class="font-semibold">Judul</h1>
                    <p class="font-thin leading-5 text-sm"> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Doloremque
                        nesciunt
                        nostrum
                    </p>
                </div>
            </div>
        </div>
        {{-- END Componets --}}
    </div>
@endsection
