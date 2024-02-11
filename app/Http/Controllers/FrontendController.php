<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Order;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;
use App\Models\Orderitem;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

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
        $cartItems = Cart::content();
        return view('frontend.index')->with('new_arrival_products' , $new_arrival_products)
        ->with('best_products' , $best_products)
        ->with('sildering' , $sildering)
        ->with('cartItems',$cartItems)
        ->with('ading' , $ading)
        ->with('categories' , $categories)
        ->with('products' , $products);
    }
    public function checkout()
    {
        $cartItems = Cart::Content();

        return view('frontend.checkout')->with('cartItems', $cartItems);
    }
    public function cart()
    {
        return view('frontend.cart');
    }
    public function store ( request $request )
    {
        $cartItems = Cart::Content();
        $order=new Order();
        $order->total = $request->total;
        $order->note = $request->note;
        $order->costumer_name = $request->costumer_name;
        $order->costumer_number = $request->costumer_number;
        $order->address = $request->address;
        $order ->save();
        $order_id = $order->id;
        foreach( $cartItems as $cartItem){
            $product_id = $cartItem->id;
            $quantity = $cartItem->qty;
            $Orderitem=new Orderitem();
            $Orderitem->product_id = $product_id ;
            $Orderitem->order_id = $order_id;
            $Orderitem->quantity = $quantity;
            $Orderitem ->save();
        }
        Cart::destroy();
        $cartItems = Cart::Content();
        return view('frontend.cart')->with('cartItems', $cartItems);;
    }
    public function show($id)
    {
        
        $product = Product::find($id);
        $product_discount= $product->discount * 100;
        $product_price_after_discount= $product->price - ($product->discount *$product->price);
        $category = Category::find($product->category_id);
        $cartItems = Cart::content();
        return view('frontend.details')->with('product', $product)
        ->with('product_discount', $product_discount)
        ->with('cartItems',$cartItems)
        ->with('product_price_after_discount', $product_price_after_discount)
        ->with('category', $category);
    }
    public function product()
    {
        $products = Product::all();
        $cartItems = Cart::content();
        $products_count = $products->count();
        return view('frontend.products')->with('products' , $products)
        ->with('products_count' , $products_count)
        ->with('cartItems',$cartItems);
    }
    public function aboutus()
    {
        $cartItems = Cart::content();
        return view('frontend.aboutus')->with('cartItems',$cartItems);
    }
    public function contactus()
    {
        $cartItems = Cart::content();
        return view('frontend.contactus')->with('cartItems',$cartItems);
    }

}
