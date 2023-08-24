@extends('layouts.front')

@section('konten')
    <div class="w-full ">
        <div class="flex flex-col gap-20  mt-16 mb-20 ">
            {{-- Blog News Showcahse --}}
            <livewire:blog-news-showcase />
            {{-- End Blog News Showcase --}}
        </div>
    </div>
@endsection
