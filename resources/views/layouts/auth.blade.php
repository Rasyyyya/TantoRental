<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100 font-manrope">
    <div class="w-full max-w-md px-4 py-8 bg-white md:max-w-lg lg:max-w-xl xl:max-w-2xl md:px-6">
        <!-- Header -->
        <div class="py-6 text-center">
            <h1 class="text-3xl font-bold">Tanto<b class="text-violet-500">Rent</b></h1>
        </div>
        <!-- Content -->
        <div>
            @yield('content')
        </div>
    </div>
</body>
</html>
