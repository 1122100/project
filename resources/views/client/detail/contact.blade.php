@extends('client.layouts.main')

@section('container')
<div class="container">
        <div class="flex flex-col pb-10 lg:flex-row lg:items-center justify-center lg:space-x-8">
            <!-- Left Column -->
            <div class="lg:w-5/12 text-center lg:text-left" style="color: #2486CB">
                <h2 class="text-3xl lg:text-4xl font-bold border-b-4 border-blue-400 pb-2 mb-4">
                    Your business deserves great design
                </h2>
                <div class="mb-6">
                    <p class="text-lg">
                        Logos, websites, packaging design and more. Our trusted designer community has helped thousands of
                        businesses launch, grow, expand, and rebrand with custom, professional design.
                    </p>
                </div>
                <a href="/branding-design/get-started" class="inline-block bg-blue-600 text-white text-lg font-semibold py-3 px-6 rounded-lg hover:bg-blue-700 transition duration-300">
                    Start your brand
                </a>
            </div>

            <!-- Right Column -->
            <div class="lg:w-7/12 mt-8 lg:mt-0 relative">
                <div class="relative mb-6">
                    <img class="rounded-lg" src="https://99designs-start-static.imgix.net/homepage/business-deserves-great-design.png?auto=format&q=45&w=818&dpr=2"
                        alt="Colorful logo, packaging and website designs for beverage brand Zappyo"
                        title="Colorful logo, packaging and website designs for beverage brand Zappyo">
                </div>

                <!-- Attribution Links -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <a href="/profiles/dunychi99" class="flex items-center space-x-2 text-gray-800 text-sm" style="--tw-text-opacity:1;color:#CC9BFF">
                        <img class="w-8 h-8 rounded-full" src="https://99designs-start-static.imgix.net/homepage/avatar-dunychi.jpg?auto=format&w=32&h=32&q=65&dpr=2" alt="Profile image of designer :Dunychi">
                        <span>Logo by :Dunychi</span>
                    </a>
                    <a href="/profiles/setupshop" class="flex items-center space-x-2 text-gray-800 text-sm justify-self-center" style="--tw-text-opacity:1;color:#51AFF4">
                        <img class="w-8 h-8 rounded-full" src="https://99designs-start-static.imgix.net/homepage/avatar-setupshop.jpg?auto=format&w=32&h=32&q=65&dpr=2" alt="Profile image of designer SetupShop™">
                        <span>Website by SetupShop™</span>
                    </a>
                    <a href="/profiles/gusz" class="flex items-center space-x-2 text-gray-800 text-sm justify-self-end" style="--tw-text-opacity:1;color:#FF9000">
                        <img class="w-8 h-8 rounded-full" src="https://99designs-start-static.imgix.net/homepage/avatar-gusz.jpg?auto=format&w=32&h=32&q=65&dpr=2" alt="Profile image of designer Gusz">
                        <span>Packaging by Gusz</span>
                    </a>
                </div>
            </div>
        </div>

</div>

@endsection
