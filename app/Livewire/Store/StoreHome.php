<?php

namespace App\Livewire\Store;

use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

class StoreHome extends Component {
    public $products = [];
    
    public function mount() {
        $response = Http::withHeaders([
            'X-Shopify-Access-Token' => env('SHOPIFY_ACCESS_TOKEN')
        ])->get(env('SHOPIFY_STORE_DOMAIN') . '/products.json');

        $this->products = $response->json()['products'] ?? [];
        
        // $collections = Http::withHeaders([
        //     'X-Shopify-Access-Token' => env('SHOPIFY_ACCESS_TOKEN')
        // ])->get(env('SHOPIFY_STORE_DOMAIN') . '/collections.json');

        // Log::info($collections);
    }

    public function render() {
        return view('livewire.store.store-home')
            ->layout('layouts.store');
    }
}