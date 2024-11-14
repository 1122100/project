@extends('client.layouts.main')

@section('container')

<!-- Hero Section -->
<div class="bg-gray-200">
<div class=" mx-auto text-center py-20 font-[Poppins]  bg-no-repeat">
    <h1 class="text-5xl font-bold text-gray-900 mb-6">Galery collection <br> sebuah tempat rekomendasian untuk pelanggan</h1>
    <button class="px-6 py-3 bg-green-600 text-white rounded-full shadow-lg hover:bg-green-700 transition">
        Jelajahi Sekarang
    </button>
</div>
<div class="">
    <figure class="px-20">
        <img src="{{ asset('img/asset/noun-leaf-7189034.svg')}}" alt="" width="100px">
    </figure>
</div>
</div>

<!-- TOP 5 OF THE WEEK -->
<div class="container mx-auto py-16">
    <h2 class="text-3xl font-semibold text-gray-800 text-center mb-12">Top 5 of the week</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8">

        <!-- Card 1 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:transform hover:scale-105 transition duration-300">
            <img src="{{ asset('img/productcollection1.jpg')}}" alt="Dracaena Trifasciata" class="w-full h-64 object-cover">
            <div class="p-4 text-center">
                <h3 class="text-xl font-bold text-gray-800">Dracaena Trifasciata</h3>
                <p class="text-gray-600">Air purifier plant.</p>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:transform hover:scale-105 transition duration-300">
            <img src="{{ asset ('img/productcollection2.jpg')}}" alt="Crassula Ovata" class="w-full h-64 object-cover">
            <div class="p-4 text-center">
                <h3 class="text-xl font-bold text-gray-800">Crassula Ovata</h3>
                <p class="text-gray-600">Good luck plant.</p>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:transform hover:scale-105 transition duration-300">
            <img src="{{ asset ('img/productcollection3.jpg')}}" alt="Haworthia Attenuata" class="w-full h-64 object-cover">
            <div class="p-4 text-center">
                <h3 class="text-xl font-bold text-gray-800">Haworthia Attenuata</h3>
                <p class="text-gray-600">Easy to grow succulent.</p>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:transform hover:scale-105 transition duration-300">
            <img src="{{ asset ('img/productcollection4.jpg')}}" alt="Browningia Hertlingiana" class="w-full h-64 object-cover">
            <div class="p-4 text-center">
                <h3 class="text-xl font-bold text-gray-800">Browningia Hertlingiana</h3>
                <p class="text-gray-600">Unique cactus plant.</p>
            </div>
        </div>

        <!-- Card 5 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:transform hover:scale-105 transition duration-300">
            <img src="{{ asset ('img/productcollection5.jpg')}}" alt="Chlorophytum Comosum" class="w-full h-64 object-cover">
            <div class="p-4 text-center">
                <h3 class="text-xl font-bold text-gray-800">Chlorophytum Comosum</h3>
                <p class="text-gray-600">Spider plant.</p>
            </div>
        </div>

    </div>
</div>

<!-- Featured Product Section -->
<div class="bg-gray-50 py-16">
    <div class="container mx-auto flex flex-col lg:flex-row items-center space-y-8 lg:space-y-0 lg:space-x-12">
        <div class="lg:w-1/2">
            <img src="{{ asset ('img/allplant1.jpg')}}" alt="Feature Plant" class="rounded-lg shadow-lg">
        </div>
        <div class="lg:w-1/2">
            <h2 class="text-4xl font-bold text-gray-800 mb-6">Nullam Ultrices Purus</h2>
            <p class="text-gray-600 mb-6">
                Temukan tanaman eksklusif yang akan menyegarkan rumah Anda.
            </p>
            <button class="px-6 py-3 bg-green-600 text-white rounded-full shadow-lg hover:bg-green-700 transition">
                Beli Sekarang
            </button>
        </div>
    </div>
</div>

<!-- TOP 5 IKLIM TROPIS -->
<div class="container mx-auto py-16">
    <h2 class="text-3xl font-semibold text-gray-800 text-center mb-12">Top 5 Iklim Tropis</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8">

        <!-- Card 1 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:transform hover:scale-105 transition duration-300">
            <img src="{{ asset('img/productcollection1a.jpg')}}" alt="Dracaena Trifasciata" class="w-full h-64 object-cover">
            <div class="p-4 text-center">
                <h3 class="text-xl font-bold text-gray-800">Dracaena Trifasciata</h3>
                <p class="text-gray-600">Air purifier plant.</p>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:transform hover:scale-105 transition duration-300">
            <img src="{{ asset ('img/productcollection1c.jpg')}}" alt="Crassula Ovata" class="w-full h-64 object-cover">
            <div class="p-4 text-center">
                <h3 class="text-xl font-bold text-gray-800">Crassula Ovata</h3>
                <p class="text-gray-600">Good luck plant.</p>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:transform hover:scale-105 transition duration-300">
            <img src="{{ asset ('img/productcollection1d.jpg')}}" alt="Haworthia Attenuata" class="w-full h-64 object-cover">
            <div class="p-4 text-center">
                <h3 class="text-xl font-bold text-gray-800">Haworthia Attenuata</h3>
                <p class="text-gray-600">Easy to grow succulent.</p>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:transform hover:scale-105 transition duration-300">
            <img src="{{ asset ('img/productcollection1e.jpg')}}" alt="Browningia Hertlingiana" class="w-full h-64 object-cover">
            <div class="p-4 text-center">
                <h3 class="text-xl font-bold text-gray-800">Browningia Hertlingiana</h3>
                <p class="text-gray-600">Unique cactus plant.</p>
            </div>
        </div>

        <!-- Card 5 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:transform hover:scale-105 transition duration-300">
            <img src="{{ asset ('img/productcollection1f.jpg')}}" alt="Chlorophytum Comosum" class="w-full h-64 object-cover">
            <div class="p-4 text-center">
                <h3 class="text-xl font-bold text-gray-800">Chlorophytum Comosum</h3>
                <p class="text-gray-600">Spider plant.</p>
            </div>
        </div>
    </div>
</div>

<!-- Featured Product Section -->
<div class="bg-gray-50 py-16">
    <div class="container mx-auto flex flex-col lg:flex-row items-center space-y-8 lg:space-y-0 lg:space-x-12">
        <div class="lg:w-1/2">
            <h2 class="text-4xl font-bold text-gray-800 mb-6">Nullam Ultrices Purus</h2>
            <p class="text-gray-600 mb-6">
                Temukan tanaman eksklusif yang akan menyegarkan rumah Anda.
            </p>
            <button class="px-6 py-3 bg-green-600 text-white rounded-full shadow-lg hover:bg-green-700 transition">
                Beli Sekarang
            </button>
        </div>
        <div class="lg:w-1/2">
            <img src="{{ asset ('img/allplant2.jpg')}}" alt="Feature Plant" class="rounded-lg shadow-lg">
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-gray-800 py-8">
    <div class="container mx-auto text-center text-white">
        <p>&copy; 2024 Lorem Ipsum. All rights reserved.</p>
    </div>
</footer>

@endsection
