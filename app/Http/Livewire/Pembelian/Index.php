<?php

namespace App\Http\Livewire\Pembelian;

use Livewire\Component;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\Order;
use App\Models\OrderProduct;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $paginate = 3;
    public $search;

    public function render()
    {
        return view('livewire.pembelian.index', [
            'products' => $this->paginate == null ?
            Product::where('supplier_product', 'like', '%'.$this->search.'%')->orderBy('created_at', 'desc')->paginate($this->paginate) :
            Product::where('supplier_product', 'like', '%'.$this->search.'%')->orderBy('created_at', 'desc')->paginate($this->paginate) 

        ]);
    }
}
