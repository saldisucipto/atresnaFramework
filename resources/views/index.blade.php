@extends('layouts.front')

@section('konten')
    <div class="w-full ">
        {{-- Slider Components --}}
        @include('components.slider')
        {{-- End Slider Components --}}

        {{-- Components Panel Components --}}
        <livewire:panel />
        {{-- END Componets --}}

        {{-- introduction --}}
        <livewire:intro-section />

        {{-- End Introduction --}}
    </div>
@endsection
