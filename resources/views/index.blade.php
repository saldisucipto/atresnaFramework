@extends('layouts.front')

@section('konten')
    <div class="w-full ">
        {{-- Slider Components --}}
        @include('components.slider')
        {{-- End Slider Components --}}


        <div class="flex flex-col gap-20  mt-16 mb-20 ">
            {{-- Components Panel Components --}}
            <livewire:panel />
            {{-- END Componets --}}

            {{-- introduction --}}
            <livewire:intro-section />

            {{-- End Introduction --}}
        </div>

    </div>
@endsection
