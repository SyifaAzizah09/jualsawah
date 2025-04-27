<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['id' => 1, 'produk' => 'Laptop ASUS'],
            ['id' => 2, 'produk' => 'Keyboard Logitech'],
            ['id' => 3, 'produk' => 'Monitor LG'],
        ];

        return view('list_product', ['data' => $products]);
    }
}
