<section class="mt-28" id="product-info">
    <div class="container mx-auto">
        <div class="py-6">
            <div class="flex flex-col lg:flex-row gap-6">
                <!-- Image Section -->
                <div class="w-full lg:w-1/2">
                    <div class="grid gap-4">
                        <!-- Big Image -->
                        <div id="main-image-container">
                            <img id="main-image"
                                class="h-auto w-full max-w-full rounded object-cover object-center md:h-[480px]"
                                src="{{ $main_image }}"
                                alt="{{ $product['title'] }}"
                            />
                        </div>
                        <!-- Small Images -->
                        <div class="grid grid-cols-5 gap-4">
                            @foreach ($product['images'] as $image)
                                <div>
                                    <img 
                                        onclick="changeImage(this)"
                                        data-full="/assets/images/single-product/1.jpg"
                                        src="{{ $image['src'] }}"
                                        class="object-cover object-center h-full w-full rounded cursor-pointer"
                                        alt="Gallery Image 1"
                                    />
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Product Details Section -->
                <div class="w-full lg:w-1/2 flex flex-col justify-between">
                    <div class="pb-8 border-b border-gray-line">
                        <h1 class="text-3xl font-bold mb-4">{{ $product['title'] }}</h1>
                        <div class="flex items-center mb-8">
                            <span>★★★★★</span>
                            <span class="ml-2">(0 Reviews)</span>
                            <a href="#" class="ml-4 text-primary font-semibold">Write a review</a>
                        </div>
                        <div class="mb-4 pb-4 border-b border-gray-line">
                            <p class="mb-2">Availability: <strong>@if ($product['variants'][0]['inventory_quantity'] > 0)In Stock @else Out of Stock @endif</strong></p>
                        </div>
                        <div class="text-2xl font-semibold mb-8">${{ $product['variants'][0]['price'] }}</div>
                        <div class="flex items-center mb-8">
                            <button id="decrease"
                                class="bg-primary hover:bg-transparent border border-transparent hover:border-primary text-white hover:text-primary font-semibold w-10 h-10 rounded-full flex items-center justify-center focus:outline-none"
                                disabled>-</button>
                            <input id="quantity" type="number" value="1"
                                class="w-16 py-2 text-center focus:outline-none" readonly>
                            <button id="increase"
                                class="bg-primary hover:bg-transparent border border-transparent hover:border-primary text-white hover:text-primary font-semibold  w-10 h-10 rounded-full focus:outline-none">+</button>
                        </div>
                        <button
                            class="bg-primary border border-transparent hover:bg-transparent hover:border-primary text-white hover:text-primary font-semibold py-2 px-4 rounded-full">Add
                            to Cart</button>
                    </div>
                    <!-- Social sharing -->
                    {{-- <div class="flex space-x-4 my-6">
                        <a href="#" class="w-4 h-4 flex items-center justify-center">
                            <img src="assets/images/social_icons/facebook.svg" alt="Facebook"
                                class="w-4 h-4 transition-transform transform hover:scale-110">
                        </a>
                        <a href="#" class="w-4 h-4 flex items-center justify-center">
                            <img src="assets/images/social_icons/instagram.svg" alt="Instagram"
                                class="w-4 h-4 transition-transform transform hover:scale-110">
                        </a>
                        <a href="#" class="w-4 h-4 flex items-center justify-center">
                            <img src="assets/images/social_icons/pinterest.svg" alt="Pinterest"
                                class="w-4 h-4 transition-transform transform hover:scale-110">
                        </a>
                        <a href="#" class="w-4 h-4 flex items-center justify-center">
                            <img src="assets/images/social_icons/twitter.svg" alt="Twitter"
                                class="w-4 h-4 transition-transform transform hover:scale-110">
                        </a>
                        <a href="#" class="w-4 h-4 flex items-center justify-center">
                            <img src="assets/images/social_icons/viber.svg" alt="Viber"
                                class="w-4 h-4 transition-transform transform hover:scale-110">
                        </a>
                    </div> --}}
                    <!-- Additional Information -->
                    <div>
                        <h3 class="text-lg font-semibold mb-2">Product Description</h3>
                        <div>{!! $product['body_html'] !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>