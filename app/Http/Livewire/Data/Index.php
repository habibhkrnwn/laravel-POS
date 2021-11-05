<?php

namespace App\Http\Livewire\Data;

use Livewire\Component;
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
        return view('livewire.data.index', [
            'orders' => $this->paginate == null ?
            Order::where('no_order', 'like', '%'.$this->search.'%')->orderBy('created_at', 'desc')->paginate($this->paginate) :
            Order::where('no_order', 'like', '%'.$this->search.'%')->orderBy('created_at', 'desc')->paginate($this->paginate) ,
            
        ]);
    }
    
}
