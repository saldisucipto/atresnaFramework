@extends('layouts.front')

@section('konten')
    <div class="w-full h-hero">
        {{-- navigasi --}}
        @livewire('navigasi', ['companyInfo' => $companyInfo])
        {{-- end navigasi --}}
    </div>
@endsection
