<?php


namespace App\Http\Livewire\Product;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $updateProduct = false;
    public $paginate = 3;
    public $search;

    protected $listeners = ['StoreProduct', 'newUpdateProduct'];
    protected $queryString = ['search'];

    public function getProduct($id)
    {
        $this->updateProduct = true;
        $product = Product::find($id);
        $this->emit('updateProduct', $product);
    }

    public function deleteProduct($id)
    {
        $product = Product::find($id);
        $product->delete();
        session()->flash('messsage', 'Product '. $product['nama_product'] .' Berhasil Dihapus');
    }

    public function render()
    {
        return view('livewire.product.index', [
            'products' => $this->paginate == null ?
            Product::where('nama_product', 'like', '%'.$this->search.'%')->orderBy('created_at', 'desc')->paginate($this->paginate) :
            Product::where('nama_product', 'like', '%'.$this->search.'%')->orderBy('created_at', 'desc')->paginate($this->paginate) 

        ]);
    }

    public function StoreProduct($product)
    {
        session()->flash('messsage', 'Product '. $product['nama_product'] .' Berhasil Ditambahkan');
    }

    public function newUpdateProduct($product)
    {
        session()->flash('messsage', 'Product '. $product['nama_product'] .' Berhasil diupdate');
    }
}
