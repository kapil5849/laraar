<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ar Lab Cafes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css">
    @vite('resources/css/app.css')
</head>
<body>
    <ul> 
        @foreach($cafes as $cafe)
            <li>
                <a href="/cafes/{{$cafe['id']}}">{{$cafe['name']}}</a>
            </li>
        @endforeach
    </ul>
</body>
</html> -->

<x-layout>
    @section('title','Ar lab Cafes')  <!-- setting the title of the page...  -->
    <h1 class="text-2xl">Ar lab Cafes</h1>
    <ul class="text-3xl text-centre"> 
        @foreach($cafes as $cafe)
            <li>
                <a href="/cafes/{{$cafe['id']}}">{{$cafe['name']}}</a>
            </li>
        @endforeach
    </ul>
    <a class="bg-yellow-400 p-2 m-2 rounded-2xl text-2xl font-bold" href="/about">About Page</a>
</x-layout>