@extends('client.layouts.main')

@section('container')
<body class="bg-gray-100">
    <!-- Hero Section -->
    <section class="bg-green-900 text-white py-16">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-6">
            <div class="md:w-1/2">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Toko Tanaman Modern</h1>
                <p class="mb-6">
                    Temukan keindahan tanaman dalam ruangan. Tingkatkan ruang hidup Anda dengan koleksi tanaman pilihan kami.
                </p>
                <div>
                    <button class="bg-yellow-500 text-black px-6 py-2 rounded-full mr-4">Belanja Sekarang</button>
                    <button class="bg-gray-700 text-white px-6 py-2 rounded-full">Jelajahi</button>
                </div>
            </div>
            <div class="md:w-1/2 mt-8 md:mt-0">
                <img
                    src="https://storage.googleapis.com/a1aa/image/sRKoVzNINvaaDVwNJxVbBGsCPLJpB0ioXpWSKVZPk4R2SSeJA.jpg"
                    alt="Tanaman hijau di studio desain interior modern"
                    width="600"
                    height="400"
                />
            </div>
        </div>
    </section>

    <!-- Crafted Section -->
    <section class="py-16">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">Dirawat dengan sangat baik.</h2>
                <p class="text-gray-600">Tanaman kami dirawat dengan sangat baik untuk memastikan mereka tumbuh subur di rumah Anda.</p>
                <button class="bg-gray-800 text-white px-6 py-2 rounded-full mt-4">Jelajahi</button>
            </div>
            <div class="flex flex-col md:flex-row justify-center items-center space-y-8 md:space-y-0 md:space-x-8">
                @foreach ($products as $product)
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img
                            src="{{ $product['image'] }}"
                            alt="{{ $product['name'] }}"
                            class="mb-4"
                            width="100"
                            height="100"
                        />
                        <h3 class="text-xl font-bold">{{ $product['name'] }}</h3>
                        <p class="text-gray-600">Rp {{ number_format($product['price'], 0, ',', '.') }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-12 md:mb-0">
                    <h2 class="text-3xl font-bold mb-4">Mengapa Memilih Kami</h2>
                    <p class="text-gray-600 mb-8">
                        Kami menyediakan tanaman berkualitas terbaik dan layanan pelanggan yang luar biasa untuk memastikan kepuasan Anda.
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        @foreach ($features as $feature)
                            <div class="flex items-start">
                                <i class="{{ $feature['icon'] }} text-2xl text-green-900 mr-4"></i>
                                <div>
                                    <h3 class="text-xl font-bold">{{ $feature['title'] }}</h3>
                                    <p class="text-gray-600">{{ $feature['description'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="md:w-1/2">
                    <img
                        src="https://storage.googleapis.com/a1aa/image/cqtuXD2QH1LmJVePfFP3KLLfqeSf0nJtZxE5HY4MjdJrbJJfE.jpg"
                        alt="Desain interior modern dengan tanaman"
                        width="600"
                        height="400"
                    />
                </div>
            </div>
        </div>
    </section>

    <!-- We Help You Section -->
    <section class="py-16">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-12 md:mb-0">
                    <img
                        src="https://storage.googleapis.com/a1aa/image/ZrYcy5Kt03J3H5MHhNGqwAkOEbUG08WkPFtgZXIT0Cb1SSeJA.jpg"
                        alt="Desain interior modern dengan tanaman dan furnitur"
                        class="mb-4"
                        width="600"
                        height="400"
                    />
                </div>
                <div class="md:w-1/2">
                    <h2 class="text-3xl font-bold mb-4">Kami Membantu Anda Membuat Desain Tanaman Modern</h2>
                    <p class="text-gray-600 mb-8">
                        Para ahli kami siap membantu Anda menciptakan taman dalam ruangan yang indah dan subur.
                    </p>
                    <ul class="list-disc list-inside text-gray-600 mb-8">
                        @foreach ($benefits as $benefit)
                            <li>{{ $benefit }}</li>
                        @endforeach
                    </ul>
                    <button class="bg-gray-800 text-white px-6 py-2 rounded-full">Jelajahi</button>
                </div>
            </div>
        </div>
    </section>
</body>
@endsection
