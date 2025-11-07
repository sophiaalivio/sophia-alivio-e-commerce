<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Products - AlivioDev')]
class ProductsPage extends Component
{
    use WithPagination;

    public function render()
    {
        $productQuery = Product::query()->where('is_active', 1);

        return view('livewire.products-page', [
            'products' => $productQuery->paginate(6),
            'brands' => Brand::where('is_active', 1)
                            ->select('id', 'name', 'slug')
                            ->get(),
            'categories' => Category::where('is_active', 1)
                                   ->select('id', 'name', 'slug')
                                   ->get(),
        ]);
    }
}
