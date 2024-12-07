@extends('client.layouts.main')

@section('container')
    <div class="bg-gray-200 w-full rounded-lg font-[Poppins] overflow-hidden max-w-full mx-auto">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 items-center">
            <div class="lg:col-span-2 p-10">
                <h1 class="text-6xl font-bold text-gray-800">PLANT WORLD IS HERE</h1>
                <p class="mt-4 text-sm text-gray-500 leading-relaxed">
                    Selamat datang ditoko kami,disini kami menyediakan tempat berbelanja mengenai sebuah tumbuhan,
                    dan juga merekomendasikan tumbuhan apa yang cocok pada halaman rumah anda!
                </p>
                <a href="/about">
                    <button type="button"
                        class="px-6 py-3 mt-8 rounded-full text-white text-sm tracking-wider border-none outline-none transition ease-in-out delay-150 bg-teal-800 hover:-translate-y-1 hover:scale-110 hover:bg-emerald-500 duration-300">Tap
                        Here!</button></a>

            </div>
            <img src="{{ asset('img/plantcontent.jpg') }}" class="w-full h-full object-cover shrink-0" />
        </div>
    </div>
{{-- content awal --}}
<div class="w-full max-w-6xl mx-auto grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6 py-8">
    <a href="/categories/programming-tech?source=hplo_cat_sec_TOP&pos=1" class="flex flex-col items-center text-center">
        <div class="w-24 h-24 flex items-center justify-center bg-gray-100 rounded-full">
            <img src="https://fiverr-res.cloudinary.com/npm-assets/@fiverr/logged_out_homepage_perseus/programming-tech-thin.56382a2.svg" alt="Programming & Tech" class="h-16">
        </div>
        <p class="mt-4 text-lg font-semibold text-gray-800">Programming & Tech</p>
    </a>

    <a href="/categories/graphics-design?source=hplo_cat_sec_TOP&pos=2" class="flex flex-col items-center text-center">
        <div class="w-24 h-24 flex items-center justify-center bg-gray-100 rounded-full">
            <img src="https://fiverr-res.cloudinary.com/npm-assets/@fiverr/logged_out_homepage_perseus/graphics-design-thin.ff38893.svg" alt="Graphics & Design" class="h-16">
        </div>
        <p class="mt-4 text-lg font-semibold text-gray-800">Graphics & Design</p>
    </a>

    <a href="/categories/online-marketing?source=hplo_cat_sec_TOP&pos=3" class="flex flex-col items-center text-center">
        <div class="w-24 h-24 flex items-center justify-center bg-gray-100 rounded-full">
            <img src="https://fiverr-res.cloudinary.com/npm-assets/@fiverr/logged_out_homepage_perseus/digital-marketing-thin.68edb44.svg" alt="Digital Marketing" class="h-16">
        </div>
        <p class="mt-4 text-lg font-semibold text-gray-800">Digital Marketing</p>
    </a>

    <a href="/categories/writing-translation?source=hplo_cat_sec_TOP&pos=4" class="flex flex-col items-center text-center">
        <div class="w-24 h-24 flex items-center justify-center bg-gray-100 rounded-full">
            <img src="https://fiverr-res.cloudinary.com/npm-assets/@fiverr/logged_out_homepage_perseus/writing-translation-thin.fd3699b.svg" alt="Writing & Translation" class="h-16">
        </div>
        <p class="mt-4 text-lg font-semibold text-gray-800">Writing & Translation</p>
    </a>

    <a href="/categories/video-animation?source=hplo_cat_sec_TOP&pos=5" class="flex flex-col items-center text-center">
        <div class="w-24 h-24 flex items-center justify-center bg-gray-100 rounded-full">
            <img src="https://fiverr-res.cloudinary.com/npm-assets/@fiverr/logged_out_homepage_perseus/video-animation-thin.9d3f24d.svg" alt="Video & Animation" class="h-16">
        </div>
        <p class="mt-4 text-lg font-semibold text-gray-800">Video & Animation</p>
    </a>



</div>

    <br>
    <!--product-->
    <div class="container flex justify-center items-center">
        <div class="text-4xl font-bold text-center">
            <h1> Our Products </h1>
        </div>
    </div>
    <br>

    <div class="container">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <div class="card bg-base-100 shadow-xl transform transition duration-300 hover:scale-105 hover:shadow-2xl ">
                <figure>
                    <img src="{{ asset('img/product1.jpg')}}" alt="Shoes" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">thats plant!</h2>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>
            <div class="card bg-base-100 shadow-xl transform transition duration-300 hover:scale-105 hover:shadow-2xl">
                <figure>
                    <img src="{{ asset('img/product2.jpg')}}" alt="Shoes" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">thats plant</h2>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>
            <div class="card bg-base-100 shadow-xl transform transition duration-300 hover:scale-105 hover:shadow-2xl">
                <figure>
                    <img src="{{ asset('img/product3.jpg')}}" alt="Shoes" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">thats plant</h2>
                    <p>ini adalah tanaman crousan yang </p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="card bg-base-100 shadow-xl transform transition duration-300 hover:scale-105 hover:shadow-2xl">
                <figure>
                    <img src="{{ asset('img/product1.jpg')}}" alt="Shoes" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">thats plant!</h2>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>
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


    <!--foooter-->
    <foote class="bg-white dark:bg-gray-900">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="#" class="flex items-center">

                        <span class="self-center text-2xl font-bold whitespace-nowrap text-teal-900">Plantworld</span>
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                mahendra
                            </li>
                            <li>
                                sadad
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                               @sadadfathoni
                            </li>
                            <li>
                                @rahmatmaliki
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href=""
                        class="hover:underline">Flowbite™</a>. All Rights Reserved.
                </span>
                <div class="flex mt-4 sm:justify-center sm:mt-0">
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 8 19">
                            <path fill-rule="evenodd"
                                d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 21 16">
                            <path
                                d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                        </svg>
                        <span class="sr-only">Discord community</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 17">
                            <path fill-rule="evenodd"
                                d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Twitter page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">GitHub account</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Dribbble account</span>
                    </a>
                </div>
            </div>
        </div>
        </footer>
    @endsection
