<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Book;
use App\Models\Product;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;

class ShopLivewireController extends Component
{
    use WithPagination;

    public string $searchBook = "";

    public function render()
    {
        $products = Product::with('images')
        ->when($this->searchBook !== '', fn(Builder $query) => $query->where('name', 'like', '%'. $this->searchBook .'%'))
        ->paginate(10);
        return view('livewire.shop-livewire-controller', [
            'products' => $products
        ]);

    }

    public function updating($key): void
    {
        if ($key === 'searchBook') {
            $this->resetPage();
        }
    }
}
