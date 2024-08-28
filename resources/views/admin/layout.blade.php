<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | {{ env('APP_NAME') }}</title>
    {{-- flowbite css  linking here --}}
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    @vite('resources/css/app.css')

</head>

<body>
    {{-- header here --}}
    @include('admin.utilities.header')

    <div class="flex gap-5">
        {{-- sidebar here --}}
        <div class="flex w-2/12 bg-slate-200 h-screen">
            @include('admin.utilities.side-bar')
        </div>


        {{-- main content --}}
        <div class="w-9/12">
            @section('content')
            </div>
        </div>

    @show

    {{-- flowbite js linking here --}}
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
</body>

</html>
