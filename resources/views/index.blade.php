<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $companyInfo->company_name }} | {{ $companyInfo->company_slogan }}</title>
    <meta name="description" content="Your description goes here">
    @if ($companyInfo->company_logo == 'logo.png')
        <link rel="shortcut icon" href="/assets/img/logo.png" type="image/x-icon">
    @else
        <link rel="shortcut icon" href="{{ '/storage/img/company/' . $companyInfo->company_logo }}" type="image/x-icon">
    @endif
    {{-- add font awesome --}}
    <script src="https://kit.fontawesome.com/7a249e95a6.js" crossorigin="anonymous"></script>
    {{-- tailwind css --}}
    @vite('resources/css/app.css')
</head>

<body>


</body>

</html>
