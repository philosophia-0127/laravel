<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function input()
    {
        return view('orders/input');
    }
}
