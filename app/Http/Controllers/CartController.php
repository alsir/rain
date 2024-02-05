<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cartList()
    {
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        return view('frontend.cart' , compact('cartItems'));
    }


    public function addToCart(Request $request)
    {
        $Product = Product::find($request->id); // assuming you have a Product model with id, name, description & price

        $userID = 1;
        \Cart::session($userID)->add(array(
            'id' => $Product->id,
            'name' => $Product->name_en,
            'price' => $Product->price,
            'quantity' => $request->quantity,
        ));

        toastr()->success('تم حفظ بيانات الطلب بنجاح !!');

        return back();
    }
    public function updateCart(Request $request)
    {
        \Cart::update(
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
        \Cart::remove($request->id);
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
