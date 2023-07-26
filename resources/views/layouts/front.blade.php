<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,viewport-fit=cover">
    <title>{{ $title }}</title>

    {!! \App\Http\Utils\Meta::render() !!}
    {{-- add font awesome --}}
    <script src="https://kit.fontawesome.com/7a249e95a6.js" crossorigin="anonymous"></script>
    {{-- tailwind css --}}
    @if ($companyInfo->company_logo == 'logo.png')
        <link rel="shortcut icon" href="/assets/img/logo.png" type="image/x-icon">
    @else
        <link rel="shortcut icon" href="{{ '/storage/img/company/' . $companyInfo->company_logo }}" type="image/x-icon">
    @endif
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="/assets/css/atresnaStyle.css">
    @livewireStyles
</head>

<body>


    <div class="w-full h-full m-0">
        {{-- Navigasi Components --}}
        @include('components.navigasi')

        {{-- End Navigasi Components --}}
        @yield('konten')

    </div>


    <script src="/assets/js/atresnaScript.js"></script>
    @livewireScripts
</body>

</html>