<?php

namespace App\Livewire\Store;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class StoreHome extends Component {
    public $products = [];

    public function mount() {
        $response = Http::withHeaders([
            'X-Shopify-Access-Token' => env('SHOPIFY_ACCESS_TOKEN')
        ])->get(env('SHOPIFY_STORE_DOMAIN') . '/products.json');

        $this->products = $response->json()['products'] ?? [];
        // echo '<pre>';
        // echo print_r($this->products);
        // echo '</pre>';
    }

    public function render() {
        return view('livewire.store.store-home', [
            'products' => $this->products
        ])
            ->layout('layouts.store');
    }
}