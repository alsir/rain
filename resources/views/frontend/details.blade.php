@extends((Session::get('locale') ==='ar'? 'layouts.main-rtl' : 'layouts.main'))
@section('content')
<div class="breadcrumb-area bg-grey">
<div class="container">
    <div class="ho-breadcrumb">
        <ul>
            <li><a href="index.html">{{__('frontend.home')}}</a></li>
            <li><a href="/products">{{__('frontend.shop')}}</a></li>
            @if (Session::get('locale') ==='ar')
                <li>{{$product->name_ar}}</li>
            @else
                <li>{{$product->name_en}}</li>
            @endif
        </ul>
    </div>
</div>
<div class="product-details-area bg-white ptb-30">
    <div class="container">

        <div class="pdetails">
            <div class="row">
                <div class="col-lg-6">
                    <div class="pdetails-images">
                        <div class="pdetails-largeimages pdetails-imagezoom">
                            <div class="pdetails-singleimage" data-src="images/product/lg/product-image-1.jpg">
                                <img src="{{ asset($product->photo) }}" alt="product image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="pdetails-content">
                        @if (Session::get('locale') ==='ar')
                           <h3>{{$product->name_ar}}</h3>
                        @else
                           <h3>{{$product->name_en}}</h3>
                        @endif
                        <div class="pdetails-pricebox">
                            @if($product->discount > 0)
                            <del class="oldprice">{{$product->price}}</del>
                            <span class="price">{{$product_price_after_discount}}</span>
                            <span class="badge">Save {{$product_discount}}%</span>
                            @else
                            <span class="price">{{$product->price}}</span>
                            @endif
                        </div>
                        @if (Session::get('locale') ==='ar')
                           <p>{{$product->description_ar}}</p>
                        @else
                           <p>{{$product->description_en}}</p>
                        @endif
                        <div class="pdetails-quantity">
                            <a href="shop-rightsidebar.html" class="ho-button">
                                <i class="lnr lnr-cart"></i>
                                <span>{{__('frontend.add_to_cart')}}</span>
                            </a>
                        </div>
                        <div class="pdetails-categories">
                            <span>{{__('frontend.categories')}} :</span>
                            <ul>
                                <li><a href="/products">
                                @if (Session::get('locale') ==='ar')
                                    {{$category->name_ar}}
                                @else
                                    {{$category->name_en}}
                                @endif</a></li>
                            </ul>
                        </div>
                        <div class="pdetails-socialshare">
                            <span>{{__('frontend.share')}} :</span>
                            <ul>
                                <li><a href="#"><i class="ion ion-logo-facebook"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection