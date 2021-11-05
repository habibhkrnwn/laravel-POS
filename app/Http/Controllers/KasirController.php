<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class KasirController extends Controller
{
    public function index ()
    {
        return view ('kasir.index');
    }

    public function invoice($no_order)
    {
        $order = Order::with('productOrder')->where('no_order', $no_order)->first();

        return view ('kasir.invoice', compact('order'));
    }
}
