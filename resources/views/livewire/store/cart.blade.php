<div x-cloak x-data="{ showCart: @entangle('showCart') }" x-on:open-cart.window="showCart = true" class="relative z-[100]" aria-labelledby="slide-over-title" role="dialog" aria-modal="true">
    <div :class="[showCart ? 'opacity-100 visible' : 'opacity-0 invisible']" class="fixed inset-0 bg-gray-500/75 transition-all duration-300 ease-in-out" aria-hidden="true"></div>
    <div :class="[showCart ? 'translate-x-0 opacity-100 ' : 'opacity-0 translate-x-full']" class="fixed inset-0 overflow-hidden transition-all duration-300 ease-in-out">
        <div class="absolute inset-0 overflow-hidden">
            <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">
                <div x-on:click.away="showCart = false" class="pointer-events-auto w-screen max-w-md">
                    <div class="flex h-full flex-col overflow-y-scroll bg-white shadow-xl">
                        <div class="flex-1 overflow-y-auto px-4 py-6 sm:px-6">
                            <div class="flex items-start justify-between">
                                <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">Shopping Cart</h2>
                                <div class="ml-3 flex h-7 items-center">
                                    <button type="button" x-on:click="$dispatch('close-cart')"  class="relative -m-2 p-2 text-gray-400 hover:text-gray-500">
                                        <span class="absolute -inset-0.5"></span>
                                        <span class="sr-only">Close panel</span>
                                        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="mt-8">
                                <div class="flow-root">
                                    <ul role="list" class="-my-6 divide-y divide-gray-200">
                                        @if (empty($cart))
                                            <p class="text-center text-gray-500">Your cart is empty.</p>
                                        @else
                                            @foreach($cart as $cart_item)
                                                <li class="flex py-6">
                                                    <div class="size-24 shrink-0 overflow-hidden rounded-md border border-gray-200">
                                                        <img src="{{ $cart_item['image'] }}" alt="Coffee Table" class="size-full object-cover">
                                                    </div>
                                                    <div class="ml-4 flex flex-1 flex-col">
                                                        <div>
                                                            <div class="flex justify-between text-base font-medium text-gray-900">
                                                                <h3><a href="#">{{ $cart_item['title'] }}</a></h3>
                                                                <p class="ml-4">${{ $cart_item['total_price'] }}</p>
                                                            </div>
                                                            @if ($cart_item['quantity'] > 1)
                                                                <p class="text-xs text-gray-500 text-right">(${{ $cart_item['price'] }} x {{ $cart_item['quantity'] }})</p>
                                                            @endif
                                                        </div>
                                                        <div class="flex flex-1 items-end justify-between text-sm">
                                                            <p class="text-gray-500">Qty {{ $cart_item['quantity'] }}</p>
                                                            <div class="flex">
                                                                <button type="button" wire:click="removeFromCart({{ $cart_item['id'] }})" class="font-medium text-zinc-600 hover:text-zinc-500">Remove</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="border-t border-gray-200 px-4 py-6 sm:px-6">
                            <div class="flex justify-between text-base font-medium text-gray-900">
                                <p>Subtotal</p>
                                <p>${{ $cartTotal }}</p>
                            </div>
                            <p class="mt-0.5 text-sm text-gray-500">Shipping and taxes calculated at checkout.</p>
                            <div class="mt-6">
                                <button wire:click="checkout" type="button" class="w-full flex items-center justify-center rounded-md border border-transparent bg-zinc-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-zinc-700 disabled:bg-zinc-500" {{  $cartTotal == 0 ? 'disabled' : '' }}>Checkout</button>
                            </div>
                            <div class="mt-6 flex justify-center text-center text-sm text-gray-500">
                            <p>
                                or
                                <button type="button" x-on:click="$dispatch('close-cart')" class="font-medium text-slate-600 hover:text-zinc-500">
                                    Continue Shopping
                                    <span aria-hidden="true"> &rarr;</span>
                                </button>
                            </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>