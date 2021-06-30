<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    private $products = [
        'ichigo',
        'chocolate',
        'cocoa',
    ];


    public function index()
    {
        return view('products/index')
            ->with(['products' => $this->products]);
    }

    public function show($id)
    {
        return view('products/show')
            ->with(['product' => $this->products[$id]]);
    }

}
