<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function cartList()
    {
        $cartItems = Cart::content();
        // dd($cartItems);
        return view('frontend.cart' , compact('cartItems'));
    }

    public function addToCart(Request $request)
    {
        
        Cart::add(array(
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'qty' => $request->quantity,
            'photo' =>$request->photo
        ));

        return back();
    }
    public function updateCart(Request $request)
    {
        Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }
}
