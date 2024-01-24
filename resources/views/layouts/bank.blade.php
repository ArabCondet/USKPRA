<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Bank</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-200">
    @include('components.bank')
    <main class="px-0 flex">
        @include('components.sidebarbank')
        <div class="container w-full flex pl-[16rem] justify-center pt-8">
            <div class="wrappers w-4/5">
                @yield('content')
            </div>
        </div>
    </main>
</body>

</html>
