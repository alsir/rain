<?php

namespace App\Http\Controllers\admin;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id','Desc')->get();
        $low_quantity=Product::where('quantity','<', 5)->count();
        $products_counter= $products->count();
        $out_off_stack=Product::where('is_available', 0)->count();
        $in_stack= Product::where('is_available', 1)->count();
        $orders = Order::orderBy('id','Desc')->get();
        $order_count= $orders->count();
        $new_order=Order::where('order_status',0)->count();
        $received_order=Order::where('order_status',1)->count();
        $delivered_order=Order::where('order_status',2)->count();

        return view('dashboard')
        ->with('products',$products)
        ->with('products_counter',$products_counter)
        ->with('low_quantity', $low_quantity)
        ->with('out_off_stack', $out_off_stack)
        ->with('in_stack', $in_stack)
        ->with('orders',$orders)
        ->with('order_count',$order_count)
        ->with('new_order',$new_order)
        ->with('received_order',$received_order)
        ->with('delivered_order',$delivered_order)
        ;
    }
}
