<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class DataController extends Controller
{
    public function index ()
    {
        $order = Order::with('productOrder')->where('no_order', $no_order)->first();

        return view ('data.index', compact('order'));
    }

}
