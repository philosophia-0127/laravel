<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class TopAboutController extends Controller
{
    public function top()
    {
        return view('homes.top')
            ->with('products', Product::get());
    }

    public function about()
    {
        return view('homes.about');
    }
}
