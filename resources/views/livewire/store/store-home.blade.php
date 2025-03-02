<div>
    <header>
        <div class="w-full bg-center bg-cover h-[38rem]" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('images/grid-images/shelf3.jpg') }}');">
            <div class="flex items-center justify-center w-full h-full bg-gray-900/40">
                <div class="text-center">
                    <h1 class="text-3xl font-bold text-white lg:text-5xl">Custom Woodwork is Here</h1>
                    <p class="text-white max-w-2xl my-3 text-lg">Have a specific piece that you're looking for? We're able to turn your dream item into a reality. Check out the custom build page for more info.</p>
                    <button class="w-full px-6 py-2 mt-4 font-medium text-white text-md transition duration-300 bg-stone-500 rounded lg:w-auto hover:bg-stone-600 focus:outline-none focus:bg-stone-600">Custom Build</button>
                </div>
            </div>
        </div>
    </header>
    <section class="container mx-auto my-16">
        <h2 class="text-2xl font-bold">Shop by Category</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <a>

            </a>
        </div>
    </section>
    <section class="bg-stone-200">
        <div class="container mx-auto py-16 grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="flex flex-col gap-y-2 justify-center items-center text-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z" />
                </svg>
                <h3 class="font-bold text-lg">Customizable</h3>
                <p class="text-gray-700">We want this to be your dream item. We support fully custom builds, down to the finish and stain.</p>
            </div>
            <div class="flex flex-col gap-y-2 justify-center items-center text-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
                </svg>                  
                <h3 class="font-bold text-lg">Quick Response</h3>
                <p class="text-gray-700">No one likes waiting. We strive to respond to customers and ship orderes as quickly as possible.</p>
            </div>
            <div class="flex flex-col gap-y-2 justify-center items-center text-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                </svg>                  
                <h3 class="font-bold text-lg">Customer Service</h3>
                <p class="text-gray-700">We know this is a big purchase. Which is why we give personalized attention and tailored solutions for each customer.</p>
            </div>
        </div>
    </section>
    <section class="container mx-auto my-16">
        <h2 class="text-2xl font-bold">Shop All Products</h2>
        <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
            @foreach($products as $product)
                <div>
                    <div class="group relative">
                        <img src="{{ $product['images'][0]['src'] }}" alt="{{ $product['title'] }}" class="aspect-square w-full rounded bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80">
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-gray-700">
                                <a wire:navigate href="{{ route('product-detail', [$product['variants'][0]['product_id'], $product['handle']]) }}">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    {{ $product['title'] }}
                                </a>
                                </h3>
                            </div>
                            <p class="text-sm font-medium text-gray-900">${{ $product['variants'][0]['price'] }}</p>
                        </div>
                    </div>
                    <button type="button" wire:click="$dispatch('add-to-cart', { variantId: {{ $product['variants'][0]['product_id'] }}, productId: {{ $product['variants'][0]['id'] }} })" class="mt-2 flex items-center justify-center rounded border border-transparent bg-stone-500 px-6 py-2 text-sm font-medium text-white hover:bg-stone-600 focus:outline-hidden disabled:bg-stone-600" @if ($product['variants'][0]['available'] == false) disabled @endif>Add to Cart</button>
                </div>
            @endforeach
        </div>
    </section>
</div>