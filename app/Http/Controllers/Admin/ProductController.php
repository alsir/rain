<?php

namespace App\Http\Controllers\Admin;

use App\Models\Type;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Manfacturer;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id','Desc')->get();
        $products_counter= $products->count();
        $out_off_stack=Product::where('is_available', 0)->count();
        $in_stack= Product::where('is_available', 1)->count();
        $types = Type::all();
        $categories = Category::all();
        $manfacturers = Manfacturer::all();

        return view('admin.product.index')
        ->with('products',$products)
        ->with('products_counter',$products_counter)
        ->with('out_off_stack', $out_off_stack)
        ->with('in_stack', $in_stack)
        ->with('types', $types)
        ->with('categories', $categories)
        ->with('manfacturers', $manfacturers)
        ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $product=new product();
        $product->name_ar = $request->name_ar;
        $product->name_en = $request->name_en;
        $product->type_id = $request->type_id;
        $product->category_id = $request->category_id;
        $product->manfacturer_id = $request->manfacturer_id;
        $product->description_ar = $request->description_ar;
        $product->description_en = $request->description_en;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->is_available = $request->is_available;
        $product->discount = $request->discount;
        if ($request->hasFile('photo')) {
            if ($request->file('photo')->isValid()) {
                $path = $request->file('photo')->store('users','public_file');
                $product->photo = 'files/'.$path;
            }
        }
        $product ->save();
        toastr()->success('تم حفظ بيانات المنتج بنجاح !!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = product::find($id);
        $type = Type::find($product->type_id);
        $category = Category::find($product->category_id);
        $manfacturer = Manfacturer::find($product->manfacturer_id );
        return view('admin.product.show')->with('product', $product)
        ->with('type', $type)
        ->with('category', $category)
        ->with('manfacturer', $manfacturer)
        ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = product::find($id);
        $types = Type::all();
        $categories = Category::all();
        $manfacturers = Manfacturer::all();
        return view('admin.product.edit')->with('product', $product)
        ->with('types', $types)
        ->with('categories', $categories)
        ->with('manfacturers', $manfacturers);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, $id)
    {
        $product= Product::find($id);
        $product->name_ar = $request->name_ar;
        $product->name_en = $request->name_en;
        $product->type_id = $request->type_id;
        $product->category_id = $request->category_id;
        $product->manfacturer_id = $request->manfacturer_id;
        $product->description_ar = $request->description_ar;
        $product->description_en = $request->description_en;
        $product->quantity = $request->quantity;
        $product->discount = $request->discount;
        $product->is_available = $request->is_available;
        if ($request->hasFile('photo')) {
            if ($request->file('photo')->isValid()) {
                $path = $request->file('photo')->store('users','public_file');
                $product->photo = 'files/'.$path;
            }
        }
        $product ->save();
        toastr()->success('تم حفظ بيانات المنتج بنجاح !!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product =  product::find($id)->delete();
        toastr()->success('تم حذف بيانات المنتج بنجاح !!');
        return back();
    }
}
