<div>
    <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
          <h2 class="sr-only">All Products</h2>
            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                @foreach($products as $product)
                    <div>
                        <div class="group relative">
                            <img src="{{ $product['images'][0]['src'] }}" alt="{{ $product['title'] }}" class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80">
                            <div class="mt-4 flex justify-between">
                                <div>
                                    <h3 class="text-sm text-gray-700">
                                    <a href="#">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        {{ $product['title'] }}
                                    </a>
                                    </h3>
                                </div>
                                <p class="text-sm font-medium text-gray-900">${{ $product['variants'][0]['price'] }}</p>
                            </div>
                        </div>
                        <button type="button" wire:click="$dispatch('add-to-cart', { variantId: {{ $product['variants'][0]['product_id'] }}, productId: {{ $product['variants'][0]['id'] }} })" class="mt-2 flex items-center justify-center rounded-md border border-transparent bg-stone-500 px-6 py-2 text-sm font-medium text-white hover:bg-stone-600 focus:outline-hidden">Add to Cart</button>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>