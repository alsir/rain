@extends((Session::get('locale') ==='ar'? 'layouts.main-rtl' : 'layouts.main'))
@section('content')
<div class="breadcrumb-area bg-grey">
    <div class="container">
        <div class="ho-breadcrumb">
            <ul>
                <li><a href="index.html">{{__('frontend.home')}}</a></li>
                <li>{{__('frontend.shop')}}</li>
            </ul>
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="p-4 mb-3 bg-green-400 rounded">
    <p class="text-green-800">{{ $message }}</p>
</div>
@endif
<div class="shop-page-area bg-white ptb-30">
    <div class="container">

        <div class="banner-area">
            <div class="imgbanner imgbanner-2">
                <a href="product-details.html">
                    <img src="{{ asset('frontend/ltr/images/banner/banner-image-20.jpg')}}" alt="banner">
                </a>
            </div>
        </div>

        <div class="shop-filters mt-30">
            <div class="shop-filters-viewmode">
                <button class="is-active" data-view="grid"><i class="ion ion-ios-keypad"></i></button>
                <button data-view="list"><i class="ion ion-ios-list"></i></button>
            </div>
            <span class="shop-filters-viewitemcount">{{__('frontend.there_are')}} {{$products_count}} {{__('frontend.products')}}</span>
            <div class="shop-filters-sortby">
                <b>{{__('frontend.sort_by')}}:</b>
                
            </div>
        </div>

        <div class="shop-page-products mt-30">
            <div class="row no-gutters">
                
                                        
               
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    @foreach ($products as $product)
                    <!-- Single Product -->
                    <article class="hoproduct">
                        <div class="hoproduct-image">
                            <a class="hoproduct-thumb" href="product-details.html">
                                <img class="hoproduct-frontimage" src="{{ asset($product->photo) }}"
                                    alt="product image">
                                <img class="hoproduct-backimage" src="{{ asset($product->photo) }}"
                                    alt="product image">
                            </a>
                            <ul class="hoproduct-actionbox">
                                <li><a href="#"><i class="lnr lnr-cart">
                                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="id">
                                    <input type="hidden" value="{{ $product->name }}" name="name">
                                    <input type="hidden" value="{{ $product->price }}" name="price">
                                    <input type="hidden" value="{{ $product->image }}"  name="image">
                                    <input type="hidden" value="1" name="quantity">
                                    <button class="px-4 py-1.5 text-white text-sm bg-blue-800 rounded">Add To Cart</button>
                                </form></i></a></li>
                                <li><a href="/details/{{$product->id}}" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                            </ul>
                            <ul class="hoproduct-flags">
                                <li class="flag-pack">{{__('frontend.new')}}</li>
                                <li class="flag-discount">-{{$product->discount * 100}}%</li>
                            </ul>
                        </div>
                        <div class="hoproduct-content">
                            @if (Session::get('locale') ==='ar')
                            <h5 class="hoproduct-title"><a href="product-details.html">{{$product->name_ar}}</a></h5>
                            <div class="hoproduct-pricebox">
                                <div class="pricebox">
                                    @if($product->discount != 0)
                                    <del class="oldprice">{{$product->price}}</del>
                                    <span class="price">{{$product->price - ( $product->price * $product->discount)}}</span>
                                    @else
                                    <span class="price">{{$product->price}}</span>
                                    @endif
                                </div>
                            </div>
                            <p class="hoproduct-content-description">
                                {{$product->description_ar}}
                            </p>
                            @else
                            <h5 class="hoproduct-title"><a href="product-details.html">{{$product->name_en}}</a></h5>
                            <div class="hoproduct-pricebox">
                                <div class="pricebox">
                                    @if($product->discount !=  0)
                                    <del class="oldprice">{{$product->price}}</del>
                                    <span class="price">{{$product->price - ( $product->price * $product->discount)}}</span>
                                    @else
                                    <span class="price">{{$product->price}}</span>
                                    @endif
                                </div>
                            </div>
                            <p class="hoproduct-content-description">
                                {{$product->description_en}}
                            </p>
                            @endif
                        
                        </div>
                    </article>
                    @endforeach
                    <!--// Single Product -->
                </div>
            </div>
        </div>

    </div>
</div>
    
@endsection