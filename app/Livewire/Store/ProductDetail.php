<?php

namespace App\Livewire\Store;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ProductDetail extends Component {
    public $product = null;
    public $main_image = null;

    public function mount($variantId, $productHandle) {
        Log::info("Livewire ProductDetail mounted with: ID = $variantId, Handle = $productHandle");
        $store_domain = env('SHOPIFY_STORE_DOMAIN');
        $response = Http::withHeaders([
            'X-Shopify-Access-Token' => env('SHOPIFY_ADMIN_API_ACCESS_TOKEN')
        ])->get("https://$store_domain/admin/api/2025-01/products/$variantId.json");

        $this->product = $response->json()['product'] ?? null;

        if (!$this->product) {
            abort(404);
        } else {
            $this->main_image = $this->product['images'][0]['src'];
        }

        Log::info(print_r($this->product, true));
    }

    public function render() {
        return view('livewire.store.product-detail')
            ->layout('layouts.store');
    }
}