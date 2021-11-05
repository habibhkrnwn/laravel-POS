<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use App\Models\Product;

class Update extends Component
{
    

    public $productId;
    public $nama_product;
    public $stok_product;
    public $supplier_product;
    public $harga_product;
    

    protected $listeners = ['updateProduct'];

    protected $rules = [

        'nama_product' => 'required|min:6',
        'harga_product' => 'required',
        'stok_product' => 'required',
        'supplier_product' => 'required',

    ];


    public function updateProduct($product)
    {
        $this->productId = $product['id'];
        $this->nama_product = $product['nama_product'];
        $this->stok_product = $product['stok_product'];
        $this->supplier_product = $product['supplier_product'];
        $this->harga_product = $product['harga_product'];
    }

    public function update()
    {
        $this->validate();

        if($this->productId){
            $product = Product::where('id', $this->productId)->first();
            $product->update([
                'nama_product' => $this->nama_product,
                'stok_product' => $this->stok_product,
                'stok_product' => $this->stok_product,
                'harga_product' => $this->harga_product
            ]);
        }
        $this->deleteInput();

        $this->emit('newUpdateProduct', $product);
    }

    public function deleteInput()
    {
        $this->nama_product = null;
        $this->stok_product = null;
        $this->supplier_product = null;
        $this->harga_product = null;
    }

    public function render()
    {
        return view('livewire.product.update');
    }
}
