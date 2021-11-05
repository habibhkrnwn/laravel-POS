<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use App\Models\Product;

class Create extends Component
{
    public $nama_product;
    public $harga_product;
    public $stok_product;
    public $supplier_product;

    protected $rules = [

        'nama_product' => 'required|min:6',
        'harga_product' => 'required',
        'stok_product' => 'required',
        'supplier_product' => 'required',

    ];

    public function submit()
    {
        $this->validate();

        $product = product::create([

            'nama_product' => $this->nama_product,
            'harga_product' => $this->harga_product,
            'stok_product' => $this->stok_product,
            'supplier_product' => $this->supplier_product,

        ]);
        $this->emit('StoreProduct', $product);
        $this->deleteInput();
    }

    public function deleteInput()
    {
        $this->nama_product = null;
        $this->harga_product = null;
        $this->stok_product = null;
        $this->supplier_product = null;
    }

    public function render()
    {
        return view('livewire.product.create');
    }
}
