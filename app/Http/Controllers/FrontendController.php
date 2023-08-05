<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Orderitem;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $new_arrival_products  = Product::orderBy('id','DESC')->limit(7);
        $best_products  = Product::orderBy('discount','DESC')->limit(7);
        $categories= Category::all();
        $products = Product::all();
        return view('frontend.index')->with('new_arrival_products' , $new_arrival_products)
        ->with('best_products' , $best_products)
        ->with('categories' , $categories)
        ->with('products' , $products);
    }
    public function checkout()
    {
        return view('frontend.checkout');
    }
    public function cart()
    {
        return view('frontend.cart');
    }
    public function check( request $request )
    {
        $order=new Order();
        $order->total = $request->total;
        $order->note = $request->note;
        $order->costumer_name = $request->costumer_name;
        $order->costumer_number = $request->costumer_number;
        $order->address = $request->address;
        $order->coupon_id=$request->coupon_id;
        $order ->save();

        $order_id = $order->id;
        foreach( $request->orderitems as $orderitem){
            $orderitem=new Orderitem();
            $orderitem->product_id = $request->product_id;
            $orderitem->order_id = $order_id;
            $orderitem->quantity = $request->quantity;
            $orderitem ->save();
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
        return view('frontend.products')->with('products' , $products);
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
