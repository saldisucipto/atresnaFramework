@extends('layouts.front')

@section('konten')
    <div class="w-full ">
        {{-- Slider Components --}}
        @include('components.slider')
        {{-- End Slider Components --}}

        <div class="flex flex-col gap-20 mb-20 ">
            {{-- Components Panel Components --}}
            <livewire:panel />
            {{-- END Componets --}}

            {{-- Components Panel Components --}}
            <livewire:why-choose-us />
            {{-- END Componets --}}

            {{-- Blog News Showcahse --}}
            <livewire:blog-news-showcase />
            {{-- End Blog News Showcase --}}

            {{-- Customer Session Showcahse --}}
            <livewire:customer-showcase />
            {{-- End Customer Session Showcase --}}
        </div>
    </div>
@endsection
