@extends('layouts.front')

@section('konten')
    <div>
        {{-- Slider Components --}}
        @include('components.slider')
        {{-- End Slider Components --}}

        {{-- Components --}}
        <livewire:panel />


        {{-- END Componets --}}
    </div>
@endsection
