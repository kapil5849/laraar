<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Page Route</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-900 text-white">
    <div class="flex flex-col items-center justify-center min-h-screen">
        <h1>About details</h1>
        <h2 class="text-3xl text-centre">{{$name}}</h2>
    </div>
</body>
</html>