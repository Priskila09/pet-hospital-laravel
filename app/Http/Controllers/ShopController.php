<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        return view(
            'pages.home.shop.index',
            [
                'title' => 'Shop',
                'products' => Product::all()
            ]
        );
    }
    public function detail($id)
    {
        $product = Product::find($id);
        return view(
            'pages.home.shop.detail',
            [
                'title' => 'Detail Produk',
                'product' => $product
            ]
        );
    }
}
