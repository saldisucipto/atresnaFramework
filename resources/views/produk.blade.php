@extends('layouts.front')

@section('konten')
    <div class="w-full ">
        <div class="flex flex-col gap-20  mt-16 mb-20 ">
            {{-- Produk Head --}}
            @include('components.grid-produk-head')
            {{-- End Produk Head --}}
            <livewire:produk-banner-pages />

            {{-- introduction --}}
            <livewire:intro-section />
            {{-- End Introduction --}}

            {{-- Produk Showcahse --}}
            <livewire:produk-showcase />
            {{-- End Produk Showcase --}}

            {{-- Blog News Showcahse --}}
            <livewire:blog-news-showcase />
            {{-- End Blog News Showcase --}}

            {{-- Customer Session Showcahse --}}
            <livewire:customer-showcase />
            {{-- End Customer Session Showcase --}}
        </div>
    </div>
@endsection
