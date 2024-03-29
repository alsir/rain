@extends((Session::get('locale') ==='ar'? 'layouts.main-rtl' : 'layouts.main'))
@section('content')
<!-- Banners Area -->
<div class="banners-area pb-30 bg-grey">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <!-- Category Menu -->
                <div class="catmenu catmenu-2 mt-30">
                    <button class="catmenu-trigger is-active">
                        <span>{{__('frontend.categories')}}</span>
                    </button>
                    <nav class="catmenu-body">
                        <ul>
                            @foreach ($categories as $category)
                            @if (Session::get('locale')==='en')
                            <li><a href="/products"><i class="ion ion-logo-game-controller-b"></i>{{$category->name_en}}</a></li>
                            @else
                            <li><a href="/products"><i class="ion ion-logo-game-controller-b"></i>{{$category->name_ar}}</a></li>
                            @endif
                            @endforeach
                        </ul>
                    </nav>
                </div>
                <!--// Category Menu -->
            </div>
            @foreach ($sildering as  $slider)
            <div class="col-lg-9">
                <!-- Hero Area -->
                <div class="herobanner herobanner-3 slider-navigation slider-dots mt-30">

                    <!-- Herobanner Single -->
                    <div class="herobanner-single">
                        <img src="{{ asset($slider->ad_1_825)}}" alt="hero image">
                        <div class="herobanner-content">
                            <div class="herobanner-box">
                                <h4>{{$slider->sub_heading_1}}</h4>
                            </div>
                            <div class="herobanner-box">
                                <h1>{{$slider->heading_1}}</h1>
                            </div>
                            <div class="herobanner-box">
                                <p>{{$slider->description_1}}/p>
                            </div>
                            <div class="herobanner-box">
                                <a href="/products" class="ho-button ho-button-white">
                                    <i class="lnr lnr-cart"></i>
                                    <span>{{__('frontend.shop_now')}}</span>
                                </a>
                            </div>
                        </div>
                        <span class="herobanner-progress"></span>
                    </div>
                    <!--// Herobanner Single -->

                    <!-- Herobanner Single -->
                    <div class="herobanner-single">
                        <img src="{{ asset($slider->ad_2_825)}}" alt="hero image">
                        <div class="herobanner-content">
                            <div class="herobanner-box">
                                <h4>{{$slider->sub_heading_2}}</h4>
                            </div>
                            <div class="herobanner-box">
                                <h1>{{$slider->heading_2}}</h1>
                            </div>
                            <div class="herobanner-box">
                                <p>{{$slider->description_2}}</p>
                            </div>
                            <div class="herobanner-box">
                                <a href="/products" class="ho-button ho-button-white">
                                    <i class="lnr lnr-cart"></i>
                                    <span>{{__('frontend.shop_now')}}</span>
                                </a>
                            </div>
                        </div>
                        <span class="herobanner-progress"></span>
                    </div>
                    <!--// Herobanner Single -->
                    <div class="herobanner-single">
                        <img src="{{ asset($slider->ad_3_825)}}" alt="hero image">
                        <div class="herobanner-content">
                            <div class="herobanner-box">
                                <h4>{{$slider->sub_heading_3}}</h4>
                            </div>
                            <div class="herobanner-box">
                                <h1>{{$slider->heading_3}}</h1>
                            </div>
                            <div class="herobanner-box">
                                <p>{{$slider->description_3}}</p>
                            </div>
                            <div class="herobanner-box">
                                <a href="/products" class="ho-button ho-button-white">
                                    <i class="lnr lnr-cart"></i>
                                    <span>{{__('frontend.shop_now')}}</span>
                                </a>
                            </div>
                        </div>
                        <span class="herobanner-progress"></span>
                    </div>
                </div>
                @endforeach
                <!--// Hero Area -->
            </div>
            @foreach ($ading as  $ad)

            <div class="col-md-4">
                <div class="imgbanner mt-30">
                    <a href="/products">
                        <img src="{{ asset($ad->ad_1_350)}}" alt="banner">
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="imgbanner mt-30">
                    <a href="/products">
                        <img src="{{ asset($ad->ad_2_350)}}" alt="banner">
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="imgbanner mt-30">
                    <a href="/products">
                        <img src="{{ asset($ad->ad_3_350)}}" alt="banner">
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!--// Banners Area -->
<div class="ho-section categories-area mt-30">
    <div class="container">
        <div class="section-title">
            <h3>{{__('frontend.our_categories')}}</h3>
        </div>
        <div class="categories-slider-2 slider-navigation-2 slider-navigation-2-m0">
            @foreach ($categories as $category)
                
           
            <div class="category-wrapper">
                <!-- Single Category -->
                <div class="category">
                    <a href="/products" class="category-thumb">
                        {{-- <img src="{{ asset($category->photo)}}" alt="category image"> --}}
                    </a>
                    <div class="category-content">
                        @if (Session::get('locale')==='ar')
                        <h5 class="category-title">{{$category->name_ar}}</h5>
                        @else
                        <h5 class="category-title">{{$category->name_en}}</h5>
                        @endif
                        <span class="category-productcounter">{{$products->where('category_id', $category->id)->count()}}{{__('frontend.products')}}</span>
                        <a href="/products" class="category-productlink">{{__('frontend.shop_now')}} <i class="ion ion-md-arrow-dropleft"></i></a>
                    </div>
                </div>
                <!--// Single Category -->
            </div>
            @endforeach

        </div>
    </div>
</div>
<div class="ho-section deal-of-the-day-area bg-white pt-30">
    <div class="container">
        <div class="section-title">
            <h3>{{__('frontend.deal_of_the_day')}}</h3>
        </div>
        <div class="product-slider deal-of-the-day-slider slider-navigation-2 slider-dots">
            
                @foreach ($best_products as $product)
                <div class="product-slider-col">
                <!-- Single Product -->
                <article class="hoproduct">
                    
                    <div class="hoproduct-image">
                        <a class="hoproduct-thumb" href="/details/{{$product->id}}">
                            <img class="hoproduct-frontimage" src="{{ asset($product->photo)}}"
                                alt="product image">
                            <img class="hoproduct-backimage" src="{{ asset($product->photo)}}"
                                alt="product image">
                        </a>
                        <ul class="hoproduct-actionbox">
                            <li><i class="lnr lnr-cart"></i>
                                <form action="/cart" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="id">
                                    <input type="hidden" value="{{ $product->name_en }}" name="name">
                                    <input type="hidden" value="{{ $product->price }}" name="price">
                                    <input type="hidden" value="{{ $product->photo }}"  name="photo">
                                    <input type="hidden" value="1" name="quantity">
                                    <button class="px-4 py-1.5 text-white text-sm bg-blue-800 rounded"><i class="lnr lnr-cart"></i></button>
                                </form></li>
                            <li><a href="/details/{{$product->id}}" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                        </ul>
                        <ul class="hoproduct-flags">
                            <li class="flag-pack">{{__('frontend.new')}}</li>
                            <li class="flag-discount">-{{$product->discount * 100}}%</li>
                        </ul>
                    </div>
                    <div class="hoproduct-content">
                        @if (Session::get('locale')==='ar')
                        <h5 class="hoproduct-title"><a href="/details/{{$product->id}}">{{$product->name_ar}}</a></h5>
                        @else
                        <h5 class="hoproduct-title"><a href="/details/{{$product->id}}">{{$product->name_en}}</a></h5>
                        @endif
                        
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
                    </div>
                </article>
            </div>
                    @endforeach
                <!--// Single Product -->
            
            <!--// Single Product -->

        </div>
    </div>
</div>
<!-- Banner Area -->
<div class="banner-area">
    <div class="container">
        @foreach ($ading as  $ad)
        <div class="row">

            <div class="col-md-6">
                <div class="imgbanner imgbanner-2 mt-30">
                    <a href="/products">
                        <img src="{{ asset($ad->ad_1_555)}}" alt="banner">
                    </a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="imgbanner imgbanner-2 mt-30">
                    <a href="/products">
                        <img src="{{ asset($ad->ad_2_555)}}" alt="banner">
                    </a>
                </div>
            </div>

        </div>
        @endforeach
    </div>
</div>
<!--// Banner Area -->

<!-- Trending Products Area -->
<div class="trending-products-area pt-30">
    <div class="container">
        <div class="section-title">
            <h3>{{__('frontend.trending_products')}}</h3>
        </div>

        <div class="tab-content" id="bstab1-ontent">
            <div class="tab-pane fade show active" id="bstab1-area1" role="tabpanel" aria-labelledby="bstab1-area1-tab">
                <div class="product-slider trending-products-slider-2 slider-navigation-2">
                    
                        
                        <!-- Single Product -->
                        @foreach ($products as $product)
                        <div class="product-slider-col">
                        <article class="hoproduct hoproduct-3">
                            
                            <div class="hoproduct-image">
                                <a class="hoproduct-thumb" href="/detail/{{$product->id}}">
                                    <img class="hoproduct-frontimage" src="{{ asset($product->photo)}}"
                                        alt="product image">
                                    <img class="hoproduct-backimage" src="{{ asset($product->photo)}}"
                                        alt="product image">
                                </a>
                                <ul class="hoproduct-actionbox">
                                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                    <li>
                                        <form action="/cart" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" value="{{ $product->id }}" name="id">
                                            <input type="hidden" value="{{ $product->name_en }}" name="name">
                                            <input type="hidden" value="{{ $product->price }}" name="price">
                                            {{-- <input type="hidden" value="{{ $product->photo }}"  name="photo"> --}}
                                            <input type="hidden" value="1" name="quantity">
                                            <button class=" text-sm bg-blue-800 "><i class="lnr lnr-cart"></i></button>
                                        </form></li>
                                    </form>
                                    <li><a href="/details/{{$product->id}}" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                                </ul>
                                <ul class="hoproduct-flags">
                                    <li class="flag-pack">{{__('frontend.new')}}</li>
                                    <li class="flag-discount">-{{$product->discount * 100}}%</li>
                                </ul>
                            </div>
                            <div class="hoproduct-content">
                                @if (Session::get('locale')==='ar')
                                <h5 class="hoproduct-title"><a href="/details/{{$product->id}}">{{$product->name_ar}}</a></h5>
                                @else
                                <h5 class="hoproduct-title"><a href="/details/{{$product->id}}">{{$product->name_en}}</a></h5>
                                @endif
                                
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
                            </div>
                            
                        </article>
                    </div>

                        @endforeach
                            
                        <!--// Single Product -->
                    

                </div>
            </div>
            {{-- <div class="tab-pane fade" id="bstab1-area2" role="tabpanel" aria-labelledby="bstab1-area2-tab">
                <div class="product-slider trending-products-slider-2 slider-navigation-2">

            </div>
            <div class="tab-pane fade" id="bstab1-area3" role="tabpanel" aria-labelledby="bstab1-area3-tab">
                <div class="product-slider trending-products-slider-2 slider-navigation-2">

                </div>
            </div>
        </div> --}}
    </div>
</div>
<!--// Trending Products Area -->

<!-- Our Products Area -->
<div class="our-products-area pt-30">
    <div class="container">
        <div class="section-title">
            <h3>{{__('frontend.our_products')}}</h3>
        </div>

        <div class="tab-content" id="bstab2-ontent">
            <div class="tab-pane fade show active" id="bstab2-area1" role="tabpanel" aria-labelledby="bstab2-area1-tab">
                <div class="product-slider our-products-slider-3 slider-navigation-2">

                        
                        <!-- Single Product -->
                        @foreach ($products as $product)
                        <div class="product-slider-col">
                        <article class="hoproduct flex-row">
                            
                            <div class="hoproduct-image">
                                <a class="hoproduct-thumb" href="/details/{{$product->id}}">
                                    <img class="hoproduct-frontimage" src="{{ asset($product->photo)}}"
                                        alt="product image">
                                    <img class="hoproduct-backimage" src="{{ asset($product->photo)}}"
                                        alt="product image">
                                </a>
                                <ul class="hoproduct-actionbox">
                                    <li><form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                    <li>
                                        <form action="/cart" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" value="{{ $product->id }}" name="id">
                                            <input type="hidden" value="{{ $product->name_en }}" name="name">
                                            <input type="hidden" value="{{ $product->price }}" name="price">
                                            {{-- <input type="hidden" value="{{ $product->photo }}"  name="photo"> --}}
                                            <input type="hidden" value="1" name="quantity">
                                            <button class=" text-sm bg-blue-800 "><i class="lnr lnr-cart"></i></button>
                                        </form></li>
                                    </form></li>
                                    <li><a href="/details/{{$product->id}}" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                                </ul>
                                <ul class="hoproduct-flags">
                                    <li class="flag-pack">{{__('frontend.new')}}</li>
                                    <li class="flag-discount">-{{$product->discount * 100}}%</li>
                                </ul>
                            </div>
                            <div class="hoproduct-content">
                                @if (Session::get('locale')==='ar')
                                <h5 class="hoproduct-title"><a href="/details/{{$product->id}}">{{$product->name_ar}}</a></h5>
                                @else
                                <h5 class="hoproduct-title"><a href="/details/{{$product->id}}">{{$product->name_en}}</a></h5>
                                @endif
                                
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
                            </div>
                        </article>
                        </div>
                        @endforeach
                        

                
            </div>
        </div>
    </div>
</div>
<!--// Our Products Area -->

<!-- Banner Area -->
@foreach ($ading as  $ad)
<div class="banner-area">
    <div class="container">
        <div class="imgbanner imgbanner-2 mt-30">
            <a href="/products">
                <img src="{{ asset($ad->ad_1_110)}}" alt="banner">
            </a>
        </div>
    </div>
</div>
@endforeach
<!--// Banner Area -->

<!-- Newarrival, Best seller & Features Product -->
<div class="ho-section newarrival-bestseller-featured-product mtb-30">
    <div class="container">
        <div class="section-title-2">
            <ul class="nav" id="bstab3" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="bstab3-area1-tab" data-bs-toggle="tab" href="#bstab3-area1"
                        role="tab" aria-controls="bstab3-area1" aria-selected="true">{{__('frontend.new_arrival')}}</a>
                </li>
            </ul>
        </div>

        <div class="tab-content" id="bstab3-ontent">
            <div class="tab-pane fade show active" id="bstab3-area1" role="tabpanel" aria-labelledby="bstab3-area1-tab">
            <div class="product-slider new-best-featured-slider slider-navigation-2">
                
                    
                    <!-- Single Product -->
                    @foreach ($new_arrival_products as $product)
                    <div class="product-slider-col">
                    <article class="hoproduct">
                        
                        <div class="hoproduct-image">
                            <a class="hoproduct-thumb" href="/details/{{$product->id}}">
                                <img class="hoproduct-frontimage" src="{{ asset($product->photo)}}"
                                    alt="product image">
                                <img class="hoproduct-backimage" src="{{ asset($product->photo)}}"
                                    alt="product image">
                            </a>
                            <ul class="hoproduct-actionbox">
                                <li><a href="/cart"><i class="lnr lnr-cart"></i></a></li>
                                <li><a href="/details/{{$product->id}}" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                            </ul>
                            <ul class="hoproduct-flags">
                                <li class="flag-pack">{{__('frontend.new')}}</li>
                                <li class="flag-discount">-{{$product->discount * 100}}%</li>
                            </ul>
                        </div>
                        <div class="hoproduct-content">
                            @if (Session::get('locale')==='ar')
                            <h5 class="hoproduct-title"><a href="/details/{{$product->id}}">{{$product->name_ar}}</a></h5>
                            @else
                            <h5 class="hoproduct-title"><a href="/details/{{$product->id}}">{{$product->name_en}}</a></h5>
                            @endif
                            
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
                        </div>
                    </article>
                    </div>
                    @endforeach        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection