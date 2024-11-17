<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Default Title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-900 text-white">
    <div class="flex flex-col items-center justify-center min-h-screen">
        {{$slot}}   <!-- pre defined slot or variable...  -->
    </div>
</body>
</html>