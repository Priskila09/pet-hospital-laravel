<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    // cart, addToCart, checkout
    public function cart()
    {
        $cart = Order::where('user_id', Auth::user()->id)
            ->where('status', 'Keranjang')->first();

        return view('pages.home.shop.cart', [
            'title' => 'Keranjang',
            'cart' => $cart
        ]);
    }

    public function addToCart($id)
    {
        $product = Product::find($id);
        $cart = Order::where('user_id', Auth::user()->id)
            ->where('status', 'Keranjang')->first();

        if ($cart == null) {
            // buat cart
            $cart = Order::create([
                'user_id' => Auth::user()->id,
                'status' => 'Keranjang'
            ]);

            OrderDetail::create([
                'order_id' => $cart->id,
                'product_id' => $product->id,
                'quantity' => 1,
                'price' => $product->discount > 0 ? $product->discount : $product->price
            ]);
        } else {
            // tambah keranjang
            $cartDetail = OrderDetail::where('product_id', $product->id)->where('order_id', $cart->id)->first();
            if ($cartDetail != null) {
                $cartDetail->update(['quantity' => $cartDetail->quantity + 1]);
            } else {
                OrderDetail::create([
                    'order_id' => $cart->id,
                    'product_id' => $product->id,
                    'quantity' => 1,
                    'price' => $product->discount > 0 ? $product->discount : $product->price
                ]);
            }
        }

        return redirect()->route('home.cart');
    }
}
