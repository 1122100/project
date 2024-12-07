@extends('client.layouts.main')

@section('container')
<div class="bg-white py-12">
    <div class="container mx-auto text-center">
        <!-- Title -->
        <h2 class="text-3xl font-bold text-gray-900">
            Get in <span class="text-orange-500">touch</span>
        </h2>
        <!-- Social Icons -->
        <div class="flex justify-center space-x-4 mt-4">
            <div class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 shadow-md">
                <i class="fab fa-facebook-f text-blue-600"></i>
            </div>
            <div class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 shadow-md">
                <i class="fab fa-instagram text-pink-600"></i>
            </div>
            <div class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 shadow-md">
                <i class="fab fa-twitter text-blue-400"></i>
            </div>
            <div class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 shadow-md">
                <i class="fab fa-linkedin-in text-blue-700"></i>
            </div>
            <div class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 shadow-md">
                <i class="fab fa-youtube text-red-600"></i>
            </div>
        </div>
        <!-- Locations -->
        <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-8 mt-10 text-left">
            <!-- Singapore -->
            <div>
                <div class="flex items-center space-x-2">
                    <img src="https://flagcdn.com/w40/sg.png" alt="Singapore Flag" class="w-8 h-8">
                    <h3 class="text-lg font-bold text-gray-800">Singapore</h3>
                </div>
                <p class="text-gray-600 mt-2">20 Science Park Road, <br>#01-28, Teletech Park, <br>Singapore – 117674</p>
                <div class="mt-2 text-orange-500">
                    <i class="fas fa-phone"></i> (+65) 6238 0096
                </div>
                <div class="mt-2 text-orange-500">
                    <i class="fas fa-envelope"></i> contact.ordazzle@etpgroup.com
                </div>
            </div>
            <!-- India -->
            <div>
                <div class="flex items-center space-x-2">
                    <img src="https://flagcdn.com/w40/in.png" alt="India Flag" class="w-8 h-8">
                    <h3 class="text-lg font-bold text-gray-800">India</h3>
                </div>
                <p class="text-gray-600 mt-2">ETP House, 124, Saki Vihar Road, <br>Andheri (East), Mumbai – 400 072, <br>India</p>
                <div class="mt-2 text-orange-500">
                    <i class="fas fa-phone"></i> (+91) 22 6678 2222
                </div>
                <div class="mt-2 text-orange-500">
                    <i class="fas fa-envelope"></i> contact.ordazzle@etpgroup.com
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
