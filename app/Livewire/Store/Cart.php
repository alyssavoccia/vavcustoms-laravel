<?php

namespace App\Livewire\Store;

use Livewire\Component;
use Livewire\Attributes\On; 
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class Cart extends Component {
    protected $listeners = ['open-cart' => 'showCart', 'close-cart' => 'hideCart', 'add-to-cart' => 'addToCart'];

    public $showCart = false;
    public $cart = [];

    public function mount() {
        $this->loadCart();
    }

    public function loadCart() {
        $this->cart = session()->get('cart', []);
    }

    #[On('add-to-cart')] 
    public function addToCart($variantId,$productId, $quantity = 1) {
        Log::info($productId);

        if (isset($this->cart[$productId])) {
            $this->cart[$productId] += $quantity;
        } else {
            $store_domain = env('SHOPIFY_STORE_DOMAIN');
            $response = Http::withHeaders([
                'X-Shopify-Access-Token' => env('SHOPIFY_ADMIN_API_ACCESS_TOKEN')
            ])->get("https://$store_domain/admin/api/2025-01/products/$variantId.json");

            Log::info(print_r($response->json(), true));

            $product = $response->json()['product'] ?? null;

            Log::info(print_r($product, true));

            if (!$product) return;

            $this->cart[$productId] = [
                'id' => $productId,
                'variant_id' => $variantId,
                'title' => $product['title'],
                'price' => $product['variants'][0]['price'],
                'quantity' => $quantity,
                'image' => $product['images'][0]['src'] ?? null,
            ];

            Log::info(print_r($product, true));        

            Session::put('cart', $this->cart);

            $this->loadCart();
        }
    }

    public function removeFromCart($productId) {
        unset($this->cart[$productId]);
        Session::put('cart', $this->cart);
        $this->loadCart();
    }

    public function checkout() {
        if (empty($this->cart)) {
            $this->showCart = false;
            return;
        }

        $store_domain = env('SHOPIFY_STORE_DOMAIN');

        foreach ($this->cart as $productId => $item) {
            $lineItems[] = "{$productId}:{$item['quantity']}";
        }
    
        $checkoutUrl = "https://$store_domain/cart/" . implode(',', $lineItems);
    
        return redirect()->away($checkoutUrl);
    }

    public function showCart() {
        $this->showCart = true;
    }

    public function hideCart() {
        $this->showCart = false;
    }

    public function render() {
        return view('livewire.store.cart');
    }
}