<x-layout>
    @section('title','Cafes - '.$cafe['name'])      <!-- setting the title of the page...  -->
    <h1 class="text-4xl font-bold">Café Details</h1>
    <div class="flex flex-col items-center space-y-4 mt-8">
        <h2 class="text-3xl text-centre">Name of cafe : {{$cafe['name']}}</h2>
        <h2 class="text-3xl text-centre">Address of City : {{$cafe['city']}}</h2>
        <h2 class="text-3xl text-centre">Rating of cafe : {{$cafe['rating']}}</h2>
        <h2 class="text-3xl text-centre">Status : {{$cafe['status']}}</h2>
        <h2 class="text-3xl text-centre">Price : {{$cafe['price']}}</h2>
    </div>
    <a class="bg-yellow-400 p-2 m-2 rounded-2xl text-2xl font-bold" href="/cafes">Go Back</a>
</x-layout> 

