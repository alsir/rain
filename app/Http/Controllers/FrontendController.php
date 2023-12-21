<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use App\Models\Orderitem;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $new_arrival_products  = Product::orderBy('id','DESC')->limit(7);
        $best_products  = Product::orderBy('discount','DESC')->limit(7);
        $categories= Category::all();
        $sildering= Slider::all();
        $ading= Ad::all();
        $products = Product::all();
        return view('frontend.index')->with('new_arrival_products' , $new_arrival_products)
        ->with('best_products' , $best_products)
        ->with('sildering' , $sildering)
        ->with('sildering' , $sildering)
        ->with('categories' , $categories)
        ->with('products' , $products);
    }
    public function checkout()
    {
        $cartItems = \Cart::getContent();

        return view('frontend.checkout')->with('cartItems', $cartItems);
    }
    public function cart()
    {
        return view('frontend.cart');
    }
    public function check( request $request )
    {
        $cartItems = Cart::getContent();
        $order=new Order();
        $order->total = $request->total;
        $order->note = $request->note;
        $order->costumer_name = $request->costumer_name;
        $order->costumer_number = $request->costumer_number;
        $order->address = $request->address;
        $order->coupon_id=$request->coupon_id;
        $order ->save();
        $order_id = $order->id;
        foreach( $cartItems as $cartItem){
            $product_id = $cartItem->id;
            $quantity = $cartItem->quantity;
            $cartItem=new Orderitem();
            $cartItem->product_id = $product_id ;
            $cartItem->order_id = $order_id;
            $cartItem->quantity = $quantity;
            $cartItem ->save();
        }
    }
    public function show($id)
    {
        $product = Product::find($id);
        $product_discount= $product->discount *100;
        $product_price_after_discount= $product->price - ($product->discount *$product->price);
        $category = Category::find($product->category_id);

        return view('frontend.details')->with('product', $product)
        ->with('product_discount', $product_discount)
        ->with('product_price_after_discount', $product_price_after_discount)
        ->with('category', $category);
    }
    public function product()
    {
        $products = Product::all();
        $products_count = $products->count();
        return view('frontend.products')->with('products' , $products)
        ->with('products_count' , $products_count);
    }
    public function aboutus()
    {
        return view('frontend.aboutus');
    }
    public function contactus()
    {
        return view('frontend.contactus');
    }

}
