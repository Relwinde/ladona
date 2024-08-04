<?php

namespace App\Livewire\Elements;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class ProductsList extends Component
{
    public $search;

    public $category;

    use WithPagination;

    public function render()
    {

        $categories = Category::all();

        $products = Product::where('name', 'like', "%{$this->search}%")->where('category', 'like', "%{$this->category}%")->orderBy('name', 'ASC')->paginate(12);

        $products->links();

        return view('livewire.elements.products-list', ['categories'=>$categories, 'products'=>$products]);
    }
}
