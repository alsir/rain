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
                        <span>Categories</span>
                    </button>
                    <nav class="catmenu-body">
                        <ul>
                            <li class="catmenu-dropdown"><a href="#"><i class="ion ion-ios-power"></i>Fashion</a>
                            </li>
                            <li class="catmenu-dropdown"><a href="#"><i class="ion ion-md-headset"></i>Electronics</a>
                            </li>
                            <li class="catmenu-dropdown"><a href="#"><i class="ion ion-ios-infinite"></i>Toys &
                                    Hobbies</a>
                            </li>
                            <li><a href="#"><i class="ion ion-logo-game-controller-b"></i>Sports & Outdoors</a></li>
                            <li><a href="#"><i class="ion ion-ios-tablet-landscape"></i>Smartphone & Tablets</a></li>
                            <li><a href="#"><i class="ion ion-ios-volume-high"></i>Health & Beauty</a></li>
                            <li><a href="#"><i class="ion ion-ios-desktop"></i>Computers & Networking</a></li>
                            <li><a href="#"><i class="ion ion-md-watch"></i>Accessories</a></li>
                            <li><a href="#"><i class="ion ion-ios-camera"></i>Jewelry & Watches</a></li>
                            <li class="catmenu-hidden"><a href="#"><i class="ion ion-ios-desktop"></i>Automative</a></li>
                            <li class="catmenu-hidden"><a href="#"><i class="ion ion-md-watch"></i>Flashlights
                                    & Lamps</a></li>
                            <li class="catmenu-hidden"><a href="#"><i class="ion ion-ios-camera"></i>Cameras &
                                    Photo</a></li>
                            <li class="catmenu-moretrigger"><a href="#"><i class="ion ion-ios-more"></i>More
                                    Categories</a></li>
                        </ul>
                    </nav>
                </div>
                <!--// Category Menu -->
            </div>

            <div class="col-lg-9">
                <!-- Hero Area -->
                <div class="herobanner herobanner-3 slider-navigation slider-dots mt-30">

                    <!-- Herobanner Single -->
                    <div class="herobanner-single">
                        <img src="{{ asset('frontend/rtl/images/hero/hero-image-5.jpg')}}" alt="hero image">
                        <div class="herobanner-content">
                            <div class="herobanner-box">
                                <h4>WE ARE THE BEST</h4>
                            </div>
                            <div class="herobanner-box">
                                <h1>Headphones On <span>World Off</span></h1>
                            </div>
                            <div class="herobanner-box">
                                <p>Bose Qc25 black quiet comfort25 acoustic noise cancelling Headphones. Lorem
                                    ipsum dollor.</p>
                            </div>
                            <div class="herobanner-box">
                                <a href="shop-rightsidebar.html" class="ho-button ho-button-white">
                                    <i class="lnr lnr-cart"></i>
                                    <span>Shop Now</span>
                                </a>
                            </div>
                        </div>
                        <span class="herobanner-progress"></span>
                    </div>
                    <!--// Herobanner Single -->

                    <!-- Herobanner Single -->
                    <div class="herobanner-single">
                        <img src="{{ asset('frontend/rtl/images/hero/hero-image-6.jpg')}}" alt="hero image">
                        <div class="herobanner-content">
                            <div class="herobanner-box">
                                <h4>ONE - DAY SEMINAR</h4>
                            </div>
                            <div class="herobanner-box">
                                <h1>Work with <span>I Phone XX</span></h1>
                            </div>
                            <div class="herobanner-box">
                                <p>Learn how to write and produce cinematic Virtual Reality content by revered
                                    industry leaders.</p>
                            </div>
                            <div class="herobanner-box">
                                <a href="shop-rightsidebar.html" class="ho-button ho-button-white">
                                    <i class="lnr lnr-cart"></i>
                                    <span>Shop Now</span>
                                </a>
                            </div>
                        </div>
                        <span class="herobanner-progress"></span>
                    </div>
                    <!--// Herobanner Single -->

                </div>
                <!--// Hero Area -->
            </div>

            <div class="col-md-4">
                <div class="imgbanner mt-30">
                    <a href="product-details.html">
                        <img src="{{ asset('frontend/ltr/images/banner/banner-image-16.jpg')}}" alt="banner">
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="imgbanner mt-30">
                    <a href="product-details.html">
                        <img src="{{ asset('frontend/ltr/images/banner/banner-image-4.jpg')}}" alt="banner">
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="imgbanner mt-30">
                    <a href="product-details.html">
                        <img src="{{ asset('frontend/ltr/images/banner/banner-image-17.jpg')}}" alt="banner">
                    </a>
                </div>
            </div>
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
                    <a href="shop-rightsidebar.html" class="category-thumb">
                        <img src="{{ asset($category->photo)}}" alt="category image">
                    </a>
                    <div class="category-content">
                        <h5 class="category-title">{{$category->photo}}</h5>
                        <span class="category-productcounter">{{$products->where('category_id', $category->id)->count()}}{{__('frontend.products')}}</span>
                        <a href="shop-rightsidebar.html" class="category-productlink">{{__('frontend.shop_now')}} <i class="ion ion-md-arrow-dropleft"></i></a>
                    </div>
                </div>
                <!--// Single Category -->
            </div>
            @endforeach

            <div class="category-wrapper">
                <!-- Single Category -->
                <div class="category">
                    <a href="#" class="category-thumb">
                        <img src="{{ asset('frontend/rtl/images/category/category-image-1.png')}}" alt="category image">
                    </a>
                    <div class="category-content">
                        <h5 class="category-title">Cameras</h5>
                        <span class="category-productcounter">13 Product</span>
                        <a href="/products" class="category-productlink">Shop Now <i class="ion ion-md-arrow-dropleft"></i></a>
                    </div>
                </div>
                <!--// Single Category -->
            </div>

            <div class="category-wrapper">
                <!-- Single Category -->
                <div class="category">
                    <a href="shop-rightsidebar.html" class="category-thumb">
                        <img src="{{ asset('frontend/rtl/images/category/category-image-2.png')}}" alt="category image">
                    </a>
                    <div class="category-content">
                        <h5 class="category-title">Audio</h5>
                        <span class="category-productcounter">13 Product</span>
                        <a href="shop-rightsidebar.html" class="category-productlink">Shop Now <i class="ion ion-md-arrow-dropleft"></i></a>
                    </div>
                </div>
                <!--// Single Category -->
            </div>

            <div class="category-wrapper">
                <!-- Single Category -->
                <div class="category">
                    <a href="shop-rightsidebar.html" class="category-thumb">
                        <img src="{{ asset('frontend/rtl/images/category/category-image-3.png')}}" alt="category image">
                    </a>
                    <div class="category-content">
                        <h5 class="category-title">Cellphones</h5>
                        <span class="category-productcounter">13 Product</span>
                        <a href="shop-rightsidebar.html" class="category-productlink">Shop Now <i class="ion ion-md-arrow-dropleft"></i></a>
                    </div>
                </div>
                <!--// Single Category -->
            </div>

            <div class="category-wrapper">
                <!-- Single Category -->
                <div class="category">
                    <a href="shop-rightsidebar.html" class="category-thumb">
                        <img src="{{ asset('frontend/rtl/images/category/category-image-5.png')}}" alt="category image">
                    </a>
                    <div class="category-content">
                        <h5 class="category-title">Cameras</h5>
                        <span class="category-productcounter">13 Product</span>
                        <a href="shop-rightsidebar.html" class="category-productlink">Shop Now <i class="ion ion-md-arrow-dropleft"></i></a>
                    </div>
                </div>
                <!--// Single Category -->
            </div>

            <div class="category-wrapper">
                <!-- Single Category -->
                <div class="category">
                    <a href="shop-rightsidebar.html" class="category-thumb">
                        <img src="{{ asset('frontend/rtl/images/category/category-image-4.png')}}" alt="category image">
                    </a>
                    <div class="category-content">
                        <h5 class="category-title">Audio</h5>
                        <span class="category-productcounter">13 Product</span>
                        <a href="shop-rightsidebar.html" class="category-productlink">Shop Now <i class="ion ion-md-arrow-dropleft"></i></a>
                    </div>
                </div>
                <!--// Single Category -->
            </div>

            <div class="category-wrapper">
                <!-- Single Category -->
                <div class="category">
                    <a href="shop-rightsidebar.html" class="category-thumb">
                        <img src="{{ asset('frontend/rtl/images/category/category-image-6.png')}}" alt="category image">
                    </a>
                    <div class="category-content">
                        <h5 class="category-title">Cellphones</h5>
                        <span class="category-productcounter">13 Product</span>
                        <a href="shop-rightsidebar.html" class="category-productlink">Shop Now <i class="ion ion-md-arrow-dropleft"></i></a>
                    </div>
                </div>
                <!--// Single Category -->
            </div>

        </div>
    </div>
</div>
<div class="ho-section deal-of-the-day-area bg-white pt-30">
    <div class="container">
        <div class="section-title">
            <h3>{{__('frontend.deal_of_the_day')}}</h3>
        </div>
        <div class="product-slider deal-of-the-day-slider slider-navigation-2 slider-dots">
            <div class="product-slider-col">
                @foreach ($best_products as $product)
                <!-- Single Product -->
                <article class="hoproduct">
                    
                    <div class="hoproduct-image">
                        <a class="hoproduct-thumb" href="product-details.html">
                            <img class="hoproduct-frontimage" src="{{ asset($product->photo)}}"
                                alt="product image">
                            <img class="hoproduct-backimage" src="{{ asset($product->photo)}}"
                                alt="product image">
                        </a>
                        <ul class="hoproduct-actionbox">
                            <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                            <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                        </ul>
                        <ul class="hoproduct-flags">
                            <li class="flag-pack">{{__('frontend.new')}}</li>
                            <li class="flag-discount">-{{$product->discount * 100}}%</li>
                        </ul>
                    </div>
                    <div class="hoproduct-content">
                        @if (Session::get('locale')==='ar')
                        <h5 class="hoproduct-title"><a href="product-details.html">{{$product->name_ar}}</a></h5>
                        @else
                        <h5 class="hoproduct-title"><a href="product-details.html">{{$product->name_en}}</a></h5>
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
                    @endforeach
                    <div class="hoproduct-image">
                        <a class="hoproduct-thumb" href="product-details.html">
                            <img class="hoproduct-frontimage" src="{{ asset('frontend/ltr/images/product/product-image-1.jpg')}}"
                                alt="product image">
                            <img class="hoproduct-backimage" src="{{ asset('frontend/rtl/images/product/product-image-22.jpg')}}"
                                alt="product image">
                        </a>
                        <ul class="hoproduct-actionbox">
                            <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                            <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                            <li><a href="#"><i class="lnr lnr-heart"></i></a></li>
                        </ul>
                        <ul class="hoproduct-flags">
                            <li class="flag-pack">New</li>
                            <li class="flag-discount">-15%</li>
                        </ul>
                    </div>
                    <div class="hoproduct-content">
                        <h5 class="hoproduct-title"><a href="product-details.html">SonicFuel
                                Wireless Over-Ear Headphones</a></h5>
                        <div class="hoproduct-rattingbox">
                            <div class="rattingbox">
                                <span class="active"><i class="ion ion-ios-star"></i></span>
                                <span class="active"><i class="ion ion-ios-star"></i></span>
                                <span class="active"><i class="ion ion-ios-star"></i></span>
                                <span class="active"><i class="ion ion-ios-star"></i></span>
                                <span class="active"><i class="ion ion-ios-star"></i></span>
                            </div>
                        </div>
                        <div class="hoproduct-pricebox">
                            <div class="pricebox">
                                <del class="oldprice">$35.11</del>
                                <span class="price">$34.11</span>
                            </div>
                        </div>
                    </div>
                </article>
                <!--// Single Product -->
            </div>

            <!-- Single Product -->
            <div class="product-slider-col">
                <article class="hoproduct hoproduct-2">
                    <div class="hoproduct-image">
                        <a class="hoproduct-thumb" href="product-details.html">
                            <img class="hoproduct-frontimage" src="{{ asset('frontend/ltr/images/product/product-image-1.jpg')}}" alt="product image">
                            <img class="hoproduct-backimage" src="{{ asset('frontend/ltr/images/product/product-image-22.jpg')}}" alt="product image">
                        </a>
                        <ul class="hoproduct-actionbox">
                            <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                            <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                            <li><a href="#"><i class="lnr lnr-heart"></i></a></li>
                        </ul>
                        <ul class="hoproduct-flags">
                            <li class="flag-pack">New</li>
                            <li class="flag-discount">-15%</li>
                        </ul>
                    </div>
                    <div class="hoproduct-countdown countdown" data-countdown="2022/12/12"></div>
                    <div class="hoproduct-content">
                        <h5 class="hoproduct-title"><a href="product-details.html">SonicFuel Wireless
                                Over-Ear Headphones</a></h5>
                        <div class="hoproduct-rattingbox">
                            <h6>1 Review(s)</h6>
                            <div class="rattingbox">
                                <span class="active"><i class="ion ion-ios-star"></i></span>
                                <span class="active"><i class="ion ion-ios-star"></i></span>
                                <span class="active"><i class="ion ion-ios-star"></i></span>
                                <span class="active"><i class="ion ion-ios-star"></i></span>
                                <span class="active"><i class="ion ion-ios-star"></i></span>
                            </div>
                        </div>
                        <div class="hoproduct-pricebox">
                            <div class="pricebox">
                                <del class="oldprice">$35.11</del>
                                <span class="price">$34.11</span>
                            </div>
                            <span class="discount">-5%</span>
                        </div>
                    </div>
                </article>
            </div>
            <!--// Single Product -->

            <!-- Single Product -->
            <div class="product-slider-col">
                <article class="hoproduct hoproduct-2">
                    <div class="hoproduct-image">
                        <a class="hoproduct-thumb" href="product-details.html">
                            <img class="hoproduct-frontimage" src="{{ asset('frontend/ltr/images/product/product-image-16.jpg')}}" alt="product image">
                            <img class="hoproduct-backimage" src="{{ asset('frontend/ltr/images/product/product-image-17.jpg')}}" alt="product image">
                        </a>
                        <ul class="hoproduct-actionbox">
                            <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                            <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                            <li><a href="#"><i class="lnr lnr-heart"></i></a></li>
                        </ul>
                        <ul class="hoproduct-flags">
                            <li class="flag-pack">New</li>
                        </ul>
                    </div>
                    <div class="hoproduct-countdown countdown" data-countdown="2022/11/12"></div>
                    <div class="hoproduct-content">
                        <h5 class="hoproduct-title"><a href="product-details.html">SonicFuel Wireless
                                Over-Ear Headphones</a></h5>
                        <div class="hoproduct-rattingbox">
                            <h6>1 Review(s)</h6>
                            <div class="rattingbox">
                                <span class="active"><i class="ion ion-ios-star"></i></span>
                                <span class="active"><i class="ion ion-ios-star"></i></span>
                                <span class="active"><i class="ion ion-ios-star"></i></span>
                                <span class="active"><i class="ion ion-ios-star"></i></span>
                                <span class="active"><i class="ion ion-ios-star"></i></span>
                            </div>
                        </div>
                        <div class="hoproduct-pricebox">
                            <div class="pricebox">
                                <del class="oldprice">$35.11</del>
                                <span class="price">$34.11</span>
                            </div>
                            <span class="discount">-5%</span>
                        </div>
                    </div>
                </article>
            </div>
            <!--// Single Product -->

            <!-- Single Product -->
            <div class="product-slider-col">
                <article class="hoproduct hoproduct-2">
                    <div class="hoproduct-image">
                        <a class="hoproduct-thumb" href="product-details.html">
                            <img class="hoproduct-frontimage" src="{{ asset('frontend/ltr/images/product/product-image-18.jpg')}}" alt="product image">
                            <img class="hoproduct-backimage" src="{{ asset('frontend/ltr/images/product/product-image-19.jpg')}}" alt="product image">
                        </a>
                        <ul class="hoproduct-actionbox">
                            <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                            <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                            <li><a href="#"><i class="lnr lnr-heart"></i></a></li>
                        </ul>
                        <ul class="hoproduct-flags">
                            <li class="flag-pack">New</li>
                            <li class="flag-discount">-15%</li>
                        </ul>
                    </div>
                    <div class="hoproduct-countdown countdown" data-countdown="2022/10/12"></div>
                    <div class="hoproduct-content">
                        <h5 class="hoproduct-title"><a href="product-details.html">SonicFuel Wireless
                                Over-Ear Headphones</a></h5>
                        <div class="hoproduct-rattingbox">
                            <h6>1 Review(s)</h6>
                            <div class="rattingbox">
                                <span class="active"><i class="ion ion-ios-star"></i></span>
                                <span class="active"><i class="ion ion-ios-star"></i></span>
                                <span class="active"><i class="ion ion-ios-star"></i></span>
                                <span class="active"><i class="ion ion-ios-star"></i></span>
                                <span class="active"><i class="ion ion-ios-star"></i></span>
                            </div>
                        </div>
                        <div class="hoproduct-pricebox">
                            <div class="pricebox">
                                <del class="oldprice">$35.11</del>
                                <span class="price">$34.11</span>
                            </div>
                            <span class="discount">-5%</span>
                        </div>
                    </div>
                </article>
            </div>
            <!--// Single Product -->

            <!-- Single Product -->
            <div class="product-slider-col">
                <article class="hoproduct hoproduct-2">
                    <div class="hoproduct-image">
                        <a class="hoproduct-thumb" href="product-details.html">
                            <img class="hoproduct-frontimage" src="{{ asset('frontend/ltr/images/product/product-image-14.jpg')}}" alt="product image">
                        </a>
                        <ul class="hoproduct-actionbox">
                            <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                            <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                            <li><a href="#"><i class="lnr lnr-heart"></i></a></li>
                        </ul>
                        <ul class="hoproduct-flags">
                            <li class="flag-pack">New</li>
                        </ul>
                    </div>
                    <div class="hoproduct-countdown countdown" data-countdown="2022/6/12"></div>
                    <div class="hoproduct-content">
                        <h5 class="hoproduct-title"><a href="product-details.html">SonicFuel Wireless
                                Over-Ear Headphones</a></h5>
                        <div class="hoproduct-rattingbox">
                            <h6>1 Review(s)</h6>
                            <div class="rattingbox">
                                <span class="active"><i class="ion ion-ios-star"></i></span>
                                <span class="active"><i class="ion ion-ios-star"></i></span>
                                <span class="active"><i class="ion ion-ios-star"></i></span>
                                <span class="active"><i class="ion ion-ios-star"></i></span>
                                <span class="active"><i class="ion ion-ios-star"></i></span>
                            </div>
                        </div>
                        <div class="hoproduct-pricebox">
                            <div class="pricebox">
                                <del class="oldprice">$35.11</del>
                                <span class="price">$34.11</span>
                            </div>
                            <span class="discount">-5%</span>
                        </div>
                    </div>
                </article>
            </div>
            <!--// Single Product -->

            <!-- Single Product -->
            <div class="product-slider-col">
                <article class="hoproduct hoproduct-2">
                    <div class="hoproduct-image">
                        <a class="hoproduct-thumb" href="product-details.html">
                            <img class="hoproduct-frontimage" src="{{ asset('frontend/ltr/images/product/product-image-15.jpg')}}" alt="product image">
                        </a>
                        <ul class="hoproduct-actionbox">
                            <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                            <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                            <li><a href="#"><i class="lnr lnr-heart"></i></a></li>
                        </ul>
                        <ul class="hoproduct-flags">
                            <li class="flag-new">new</li>
                        </ul>
                    </div>
                    <div class="hoproduct-countdown countdown" data-countdown="2022/8/12"></div>
                    <div class="hoproduct-content">
                        <h5 class="hoproduct-title"><a href="product-details.html">SonicFuel Wireless
                                Over-Ear Headphones</a></h5>
                        <div class="hoproduct-rattingbox">
                            <h6>1 Review(s)</h6>
                            <div class="rattingbox">
                                <span class="active"><i class="ion ion-ios-star"></i></span>
                                <span class="active"><i class="ion ion-ios-star"></i></span>
                                <span class="active"><i class="ion ion-ios-star"></i></span>
                                <span class="active"><i class="ion ion-ios-star"></i></span>
                                <span class="active"><i class="ion ion-ios-star"></i></span>
                            </div>
                        </div>
                        <div class="hoproduct-pricebox">
                            <div class="pricebox">
                                <del class="oldprice">$35.11</del>
                                <span class="price">$34.11</span>
                            </div>
                            <span class="discount">-5%</span>
                        </div>
                    </div>
                </article>
            </div>
            <!--// Single Product -->

        </div>
    </div>
</div>
<!-- Banner Area -->
<div class="banner-area">
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <div class="imgbanner imgbanner-2 mt-30">
                    <a href="product-details.html">
                        <img src="{{ asset('frontend/ltr/images/banner/banner-image-18.jpg')}}" alt="banner">
                    </a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="imgbanner imgbanner-2 mt-30">
                    <a href="product-details.html">
                        <img src="{{ asset('frontend/ltr/images/banner/banner-image-19.jpg')}}" alt="banner">
                    </a>
                </div>
            </div>

        </div>
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
                    <div class="product-slider-col">
                        @foreach ($products as $product)
                        <!-- Single Product -->
                        <article class="hoproduct hoproduct-3">
                            
                            <div class="hoproduct-image">
                                <a class="hoproduct-thumb" href="product-details.html">
                                    <img class="hoproduct-frontimage" src="{{ asset($product->photo)}}"
                                        alt="product image">
                                    <img class="hoproduct-backimage" src="{{ asset($product->photo)}}"
                                        alt="product image">
                                </a>
                                <ul class="hoproduct-actionbox">
                                    <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                                    <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                                </ul>
                                <ul class="hoproduct-flags">
                                    <li class="flag-pack">{{__('frontend.new')}}</li>
                                    <li class="flag-discount">-{{$product->discount * 100}}%</li>
                                </ul>
                            </div>
                            <div class="hoproduct-content">
                                @if (Session::get('locale')==='ar')
                                <h5 class="hoproduct-title"><a href="product-details.html">{{$product->name_ar}}</a></h5>
                                @else
                                <h5 class="hoproduct-title"><a href="product-details.html">{{$product->name_en}}</a></h5>
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
                            @endforeach
                            <article class="hoproduct hoproduct-3">
                            <div class="hoproduct-image">
                                <a class="hoproduct-thumb" href="product-details.html">
                                    <img class="hoproduct-frontimage" src="{{ asset('frontend/ltr/images/product/product-image-1.jpg')}}"
                                        alt="product image">
                                    <img class="hoproduct-backimage" src="{{ asset('frontend/rtl/images/product/product-image-22.jpg')}}"
                                        alt="product image">
                                </a>
                                <ul class="hoproduct-actionbox">
                                    <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                                    <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                </ul>
                                <ul class="hoproduct-flags">
                                    <li class="flag-pack">New</li>
                                    <li class="flag-discount">-15%</li>
                                </ul>
                            </div>
                            <div class="hoproduct-content">
                                <h5 class="hoproduct-title"><a href="product-details.html">SonicFuel
                                        Wireless Over-Ear Headphones</a></h5>
                                <div class="hoproduct-rattingbox">
                                    <div class="rattingbox">
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                    </div>
                                </div>
                                <div class="hoproduct-pricebox">
                                    <div class="pricebox">
                                        <del class="oldprice">$35.11</del>
                                        <span class="price">$34.11</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--// Single Product -->
                    </div>

                    <div class="product-slider-col">
                        <!-- Single Product -->
                        <article class="hoproduct hoproduct-3">
                            <div class="hoproduct-image">
                                <a class="hoproduct-thumb" href="product-details.html">
                                    <img class="hoproduct-frontimage" src="{{ asset('frontend/rtl/images/product/product-image-1.jpg')}}"
                                        alt="product image">
                                    <img class="hoproduct-backimage" src="{{ asset('frontend/rtl/images/product/product-image-22.jpg')}}"
                                        alt="product image">
                                </a>
                                <ul class="hoproduct-actionbox">
                                    <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                                    <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                </ul>
                                <ul class="hoproduct-flags">
                                    <li class="flag-pack">New</li>
                                    <li class="flag-discount">-15%</li>
                                </ul>
                            </div>
                            <div class="hoproduct-content">
                                <h5 class="hoproduct-title"><a href="product-details.html">SonicFuel
                                        Wireless Over-Ear Headphones</a></h5>
                                <div class="hoproduct-rattingbox">
                                    <div class="rattingbox">
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                    </div>
                                </div>
                                <div class="hoproduct-pricebox">
                                    <div class="pricebox">
                                        <del class="oldprice">$35.11</del>
                                        <span class="price">$34.11</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                        <!--// Single Product -->

                        <!-- Single Product -->
                    <div class="product-slider-col">
                        <article class="hoproduct hoproduct-3">
                            <div class="hoproduct-image">
                                <a class="hoproduct-thumb" href="product-details.html">
                                    <img class="hoproduct-frontimage" src="{{ asset('frontend/rtl/images/product/product-image-16.jpg')}}"
                                        alt="product image">
                                    <img class="hoproduct-backimage" src="{{ asset('frontend/rtl/images/product/product-image-17.jpg')}}"
                                        alt="product image">
                                </a>
                                <ul class="hoproduct-actionbox">
                                    <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                                    <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                </ul>
                                <ul class="hoproduct-flags">
                                    <li class="flag-pack">New</li>
                                </ul>
                            </div>
                            <div class="hoproduct-content">
                                <h5 class="hoproduct-title"><a href="product-details.html">SonicFuel
                                        Wireless Over-Ear Headphones</a></h5>
                                <div class="hoproduct-rattingbox">
                                    <div class="rattingbox">
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                    </div>
                                </div>
                                <div class="hoproduct-pricebox">
                                    <div class="pricebox">
                                        <del class="oldprice">$35.11</del>
                                        <span class="price">$34.11</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--// Single Product -->
                    </div>

                    <div class="product-slider-col">
                        <!-- Single Product -->
                        <article class="hoproduct hoproduct-3">
                            <div class="hoproduct-image">
                                <a class="hoproduct-thumb" href="product-details.html">
                                    <img class="hoproduct-frontimage" src="{{ asset('frontend/rtl/images/product/product-image-18.jpg')}}"
                                        alt="product image">
                                    <img class="hoproduct-backimage" src="{{ asset('frontend/rtl/images/product/product-image-19.jpg')}}"
                                        alt="product image">
                                </a>
                                <ul class="hoproduct-actionbox">
                                    <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                                    <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                </ul>
                                <ul class="hoproduct-flags">
                                    <li class="flag-pack">New</li>
                                    <li class="flag-discount">-15%</li>
                                </ul>
                            </div>
                            <div class="hoproduct-content">
                                <h5 class="hoproduct-title"><a href="product-details.html">SonicFuel
                                        Wireless Over-Ear Headphones</a></h5>
                                <div class="hoproduct-rattingbox">
                                    <div class="rattingbox">
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                    </div>
                                </div>
                                <div class="hoproduct-pricebox">
                                    <div class="pricebox">
                                        <del class="oldprice">$35.11</del>
                                        <span class="price">$34.11</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="product-slider-col">
                        <!--// Single Product -->

                        <!-- Single Product -->
                        <article class="hoproduct hoproduct-3">
                            <div class="hoproduct-image">
                                <a class="hoproduct-thumb" href="product-details.html">
                                    <img class="hoproduct-frontimage" src="{{ asset('frontend/rtl/images/product/product-image-14.jpg')}}"
                                        alt="product image">
                                </a>
                                <ul class="hoproduct-actionbox">
                                    <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                                    <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                </ul>
                                <ul class="hoproduct-flags">
                                    <li class="flag-pack">New</li>
                                </ul>
                            </div>
                            <div class="hoproduct-content">
                                <h5 class="hoproduct-title"><a href="product-details.html">SonicFuel
                                        Wireless Over-Ear Headphones</a></h5>
                                <div class="hoproduct-rattingbox">
                                    <div class="rattingbox">
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                    </div>
                                </div>
                                <div class="hoproduct-pricebox">
                                    <div class="pricebox">
                                        <del class="oldprice">$35.11</del>
                                        <span class="price">$34.11</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--// Single Product -->
                    </div>

                    <div class="product-slider-col">
                        <!-- Single Product -->
                        <article class="hoproduct hoproduct-3">
                            <div class="hoproduct-image">
                                <a class="hoproduct-thumb" href="product-details.html">
                                    <img class="hoproduct-frontimage" src="{{ asset('frontend/rtl/images/product/product-image-15.jpg')}}"
                                        alt="product image">
                                </a>
                                <ul class="hoproduct-actionbox">
                                    <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                                    <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                </ul>
                                <ul class="hoproduct-flags">
                                    <li class="flag-new">new</li>
                                </ul>
                            </div>
                            <div class="hoproduct-content">
                                <h5 class="hoproduct-title"><a href="product-details.html">SonicFuel
                                        Wireless Over-Ear Headphones</a></h5>
                                <div class="hoproduct-rattingbox">
                                    <div class="rattingbox">
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                    </div>
                                </div>
                                <div class="hoproduct-pricebox">
                                    <div class="pricebox">
                                        <del class="oldprice">$35.11</del>
                                        <span class="price">$34.11</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                        <!--// Single Product -->

                        <!-- Single Product -->
                    <div class="product-slider-col">
                        <article class="hoproduct hoproduct-3">
                            <div class="hoproduct-image">
                                <a class="hoproduct-thumb" href="product-details.html">
                                    <img class="hoproduct-frontimage" src="{{ asset('frontend/rtl/images/product/product-image-12.jpg')}}"
                                        alt="product image">
                                    <img class="hoproduct-backimage" src="{{ asset('frontend/rtl/images/product/product-image-13.jpg')}}"
                                        alt="product image">
                                </a>
                                <ul class="hoproduct-actionbox">
                                    <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                                    <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                </ul>
                                <ul class="hoproduct-flags">
                                    <li class="flag-new">new</li>
                                </ul>
                            </div>
                            <div class="hoproduct-content">
                                <h5 class="hoproduct-title"><a href="product-details.html">SonicFuel
                                        Wireless Over-Ear Headphones</a></h5>
                                <div class="hoproduct-rattingbox">
                                    <div class="rattingbox">
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                    </div>
                                </div>
                                <div class="hoproduct-pricebox">
                                    <div class="pricebox">
                                        <del class="oldprice">$35.11</del>
                                        <span class="price">$34.11</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--// Single Product -->
                    </div>

                    <div class="product-slider-col">
                        <!-- Single Product -->
                        <article class="hoproduct hoproduct-3">
                            <div class="hoproduct-image">
                                <a class="hoproduct-thumb" href="product-details.html">
                                    <img class="hoproduct-frontimage" src="images/product/product-image-15.jpg"
                                        alt="product image">
                                </a>
                                <ul class="hoproduct-actionbox">
                                    <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                                    <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                </ul>
                                <ul class="hoproduct-flags">
                                    <li class="flag-new">new</li>
                                </ul>
                            </div>
                            <div class="hoproduct-content">
                                <h5 class="hoproduct-title"><a href="product-details.html">SonicFuel
                                        Wireless Over-Ear Headphones</a></h5>
                                <div class="hoproduct-rattingbox">
                                    <div class="rattingbox">
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                    </div>
                                </div>
                                <div class="hoproduct-pricebox">
                                    <div class="pricebox">
                                        <del class="oldprice">$35.11</del>
                                        <span class="price">$34.11</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                        <!--// Single Product -->

                        <!-- Single Product -->
                    <div class="product-slider-col">
                        <article class="hoproduct hoproduct-3">
                            <div class="hoproduct-image">
                                <a class="hoproduct-thumb" href="product-details.html">
                                    <img class="hoproduct-frontimage" src="images/product/product-image-12.jpg"
                                        alt="product image">
                                    <img class="hoproduct-backimage" src="images/product/product-image-13.jpg"
                                        alt="product image">
                                </a>
                                <ul class="hoproduct-actionbox">
                                    <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                                    <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                </ul>
                                <ul class="hoproduct-flags">
                                    <li class="flag-new">new</li>
                                </ul>
                            </div>
                            <div class="hoproduct-content">
                                <h5 class="hoproduct-title"><a href="product-details.html">SonicFuel
                                        Wireless Over-Ear Headphones</a></h5>
                                <div class="hoproduct-rattingbox">
                                    <div class="rattingbox">
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                    </div>
                                </div>
                                <div class="hoproduct-pricebox">
                                    <div class="pricebox">
                                        <del class="oldprice">$35.11</del>
                                        <span class="price">$34.11</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--// Single Product -->
                    </div>

                </div>
            </div>
            <div class="tab-pane fade" id="bstab1-area2" role="tabpanel" aria-labelledby="bstab1-area2-tab">
                <div class="product-slider trending-products-slider-2 slider-navigation-2">

                    <div class="product-slider-col">
                        <!-- Single Product -->
                        <article class="hoproduct hoproduct-3">
                            <div class="hoproduct-image">
                                <a class="hoproduct-thumb" href="product-details.html">
                                    <img class="hoproduct-frontimage" src="images/product/product-image-10.jpg"
                                        alt="product image">
                                    <img class="hoproduct-backimage" src="images/product/product-image-11.jpg"
                                        alt="product image">
                                </a>
                                <ul class="hoproduct-actionbox">
                                    <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                                    <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                </ul>
                                <ul class="hoproduct-flags">
                                    <li class="flag-pack">New</li>
                                    <li class="flag-discount">-15%</li>
                                </ul>
                            </div>
                            <div class="hoproduct-content">
                                <h5 class="hoproduct-title"><a href="product-details.html">SonicFuel
                                        Wireless Over-Ear Headphones</a></h5>
                                <div class="hoproduct-rattingbox">
                                    <div class="rattingbox">
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                    </div>
                                </div>
                                <div class="hoproduct-pricebox">
                                    <div class="pricebox">
                                        <del class="oldprice">$35.11</del>
                                        <span class="price">$34.11</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--// Single Product -->

                        <!-- Single Product -->
                        <article class="hoproduct hoproduct-3">
                            <div class="hoproduct-image">
                                <a class="hoproduct-thumb" href="product-details.html">
                                    <img class="hoproduct-frontimage" src="images/product/product-image-7.jpg"
                                        alt="product image">
                                    <img class="hoproduct-backimage" src="images/product/product-image-8.jpg"
                                        alt="product image">
                                </a>
                                <ul class="hoproduct-actionbox">
                                    <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                                    <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                </ul>
                                <ul class="hoproduct-flags">
                                    <li class="flag-pack">New</li>
                                </ul>
                            </div>
                            <div class="hoproduct-content">
                                <h5 class="hoproduct-title"><a href="product-details.html">SonicFuel
                                        Wireless Over-Ear Headphones</a></h5>
                                <div class="hoproduct-rattingbox">
                                    <div class="rattingbox">
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                    </div>
                                </div>
                                <div class="hoproduct-pricebox">
                                    <div class="pricebox">
                                        <del class="oldprice">$35.11</del>
                                        <span class="price">$34.11</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--// Single Product -->
                    </div>

                    <div class="product-slider-col">
                        <!-- Single Product -->
                        <article class="hoproduct hoproduct-3">
                            <div class="hoproduct-image">
                                <a class="hoproduct-thumb" href="product-details.html">
                                    <img class="hoproduct-frontimage" src="images/product/product-image-4.jpg"
                                        alt="product image">
                                </a>
                                <ul class="hoproduct-actionbox">
                                    <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                                    <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                </ul>
                                <ul class="hoproduct-flags">
                                    <li class="flag-pack">New</li>
                                    <li class="flag-discount">-15%</li>
                                </ul>
                            </div>
                            <div class="hoproduct-content">
                                <h5 class="hoproduct-title"><a href="product-details.html">SonicFuel
                                        Wireless Over-Ear Headphones</a></h5>
                                <div class="hoproduct-rattingbox">
                                    <div class="rattingbox">
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                    </div>
                                </div>
                                <div class="hoproduct-pricebox">
                                    <div class="pricebox">
                                        <del class="oldprice">$35.11</del>
                                        <span class="price">$34.11</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--// Single Product -->

                        <!-- Single Product -->
                        <article class="hoproduct hoproduct-3">
                            <div class="hoproduct-image">
                                <a class="hoproduct-thumb" href="product-details.html">
                                    <img class="hoproduct-frontimage" src="images/product/product-image-5.jpg"
                                        alt="product image">
                                </a>
                                <ul class="hoproduct-actionbox">
                                    <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                                    <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                </ul>
                                <ul class="hoproduct-flags">
                                    <li class="flag-pack">New</li>
                                </ul>
                            </div>
                            <div class="hoproduct-content">
                                <h5 class="hoproduct-title"><a href="product-details.html">SonicFuel
                                        Wireless Over-Ear Headphones</a></h5>
                                <div class="hoproduct-rattingbox">
                                    <div class="rattingbox">
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                    </div>
                                </div>
                                <div class="hoproduct-pricebox">
                                    <div class="pricebox">
                                        <del class="oldprice">$35.11</del>
                                        <span class="price">$34.11</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--// Single Product -->
                    </div>

                    <div class="product-slider-col">
                        <!-- Single Product -->
                        <article class="hoproduct hoproduct-3">
                            <div class="hoproduct-image">
                                <a class="hoproduct-thumb" href="product-details.html">
                                    <img class="hoproduct-frontimage" src="images/product/product-image-15.jpg"
                                        alt="product image">
                                </a>
                                <ul class="hoproduct-actionbox">
                                    <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                                    <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                </ul>
                                <ul class="hoproduct-flags">
                                    <li class="flag-new">new</li>
                                </ul>
                            </div>
                            <div class="hoproduct-content">
                                <h5 class="hoproduct-title"><a href="product-details.html">SonicFuel
                                        Wireless Over-Ear Headphones</a></h5>
                                <div class="hoproduct-rattingbox">
                                    <div class="rattingbox">
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                    </div>
                                </div>
                                <div class="hoproduct-pricebox">
                                    <div class="pricebox">
                                        <del class="oldprice">$35.11</del>
                                        <span class="price">$34.11</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--// Single Product -->

                        <!-- Single Product -->
                        <article class="hoproduct hoproduct-3">
                            <div class="hoproduct-image">
                                <a class="hoproduct-thumb" href="product-details.html">
                                    <img class="hoproduct-frontimage" src="images/product/product-image-12.jpg"
                                        alt="product image">
                                    <img class="hoproduct-backimage" src="images/product/product-image-13.jpg"
                                        alt="product image">
                                </a>
                                <ul class="hoproduct-actionbox">
                                    <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                                    <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                </ul>
                                <ul class="hoproduct-flags">
                                    <li class="flag-new">new</li>
                                </ul>
                            </div>
                            <div class="hoproduct-content">
                                <h5 class="hoproduct-title"><a href="product-details.html">SonicFuel
                                        Wireless Over-Ear Headphones</a></h5>
                                <div class="hoproduct-rattingbox">
                                    <div class="rattingbox">
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                    </div>
                                </div>
                                <div class="hoproduct-pricebox">
                                    <div class="pricebox">
                                        <del class="oldprice">$35.11</del>
                                        <span class="price">$34.11</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--// Single Product -->
                    </div>

                    <div class="product-slider-col">
                        <!-- Single Product -->
                        <article class="hoproduct hoproduct-3">
                            <div class="hoproduct-image">
                                <a class="hoproduct-thumb" href="product-details.html">
                                    <img class="hoproduct-frontimage" src="images/product/product-image-1.jpg"
                                        alt="product image">
                                    <img class="hoproduct-backimage" src="images/product/product-image-22.jpg"
                                        alt="product image">
                                </a>
                                <ul class="hoproduct-actionbox">
                                    <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                                    <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                </ul>
                                <ul class="hoproduct-flags">
                                    <li class="flag-pack">New</li>
                                    <li class="flag-discount">-15%</li>
                                </ul>
                            </div>
                            <div class="hoproduct-content">
                                <h5 class="hoproduct-title"><a href="product-details.html">SonicFuel
                                        Wireless Over-Ear Headphones</a></h5>
                                <div class="hoproduct-rattingbox">
                                    <div class="rattingbox">
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                    </div>
                                </div>
                                <div class="hoproduct-pricebox">
                                    <div class="pricebox">
                                        <del class="oldprice">$35.11</del>
                                        <span class="price">$34.11</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--// Single Product -->

                        <!-- Single Product -->
                        <article class="hoproduct hoproduct-3">
                            <div class="hoproduct-image">
                                <a class="hoproduct-thumb" href="product-details.html">
                                    <img class="hoproduct-frontimage" src="images/product/product-image-16.jpg"
                                        alt="product image">
                                    <img class="hoproduct-backimage" src="images/product/product-image-17.jpg"
                                        alt="product image">
                                </a>
                                <ul class="hoproduct-actionbox">
                                    <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                                    <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                </ul>
                                <ul class="hoproduct-flags">
                                    <li class="flag-pack">New</li>
                                </ul>
                            </div>
                            <div class="hoproduct-content">
                                <h5 class="hoproduct-title"><a href="product-details.html">SonicFuel
                                        Wireless Over-Ear Headphones</a></h5>
                                <div class="hoproduct-rattingbox">
                                    <div class="rattingbox">
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                    </div>
                                </div>
                                <div class="hoproduct-pricebox">
                                    <div class="pricebox">
                                        <del class="oldprice">$35.11</del>
                                        <span class="price">$34.11</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--// Single Product -->
                    </div>

                </div>
            </div>
            <div class="tab-pane fade" id="bstab1-area3" role="tabpanel" aria-labelledby="bstab1-area3-tab">
                <div class="product-slider trending-products-slider-2 slider-navigation-2">

                    <div class="product-slider-col">
                        <!-- Single Product -->
                        <article class="hoproduct hoproduct-3">
                            <div class="hoproduct-image">
                                <a class="hoproduct-thumb" href="product-details.html">
                                    <img class="hoproduct-frontimage" src="images/product/product-image-6.jpg"
                                        alt="product image">
                                </a>
                                <ul class="hoproduct-actionbox">
                                    <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                                    <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                </ul>
                                <ul class="hoproduct-flags">
                                    <li class="flag-pack">New</li>
                                    <li class="flag-discount">-15%</li>
                                </ul>
                            </div>
                            <div class="hoproduct-content">
                                <h5 class="hoproduct-title"><a href="product-details.html">SonicFuel
                                        Wireless Over-Ear Headphones</a></h5>
                                <div class="hoproduct-rattingbox">
                                    <div class="rattingbox">
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                    </div>
                                </div>
                                <div class="hoproduct-pricebox">
                                    <div class="pricebox">
                                        <del class="oldprice">$35.11</del>
                                        <span class="price">$34.11</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--// Single Product -->

                        <!-- Single Product -->
                        <article class="hoproduct hoproduct-3">
                            <div class="hoproduct-image">
                                <a class="hoproduct-thumb" href="product-details.html">
                                    <img class="hoproduct-frontimage" src="images/product/product-image-1.jpg"
                                        alt="product image">
                                    <img class="hoproduct-backimage" src="images/product/product-image-2.jpg"
                                        alt="product image">
                                </a>
                                <ul class="hoproduct-actionbox">
                                    <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                                    <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                </ul>
                                <ul class="hoproduct-flags">
                                    <li class="flag-pack">New</li>
                                </ul>
                            </div>
                            <div class="hoproduct-content">
                                <h5 class="hoproduct-title"><a href="product-details.html">SonicFuel
                                        Wireless Over-Ear Headphones</a></h5>
                                <div class="hoproduct-rattingbox">
                                    <div class="rattingbox">
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                    </div>
                                </div>
                                <div class="hoproduct-pricebox">
                                    <div class="pricebox">
                                        <del class="oldprice">$35.11</del>
                                        <span class="price">$34.11</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--// Single Product -->
                    </div>

                    <div class="product-slider-col">
                        <!-- Single Product -->
                        <article class="hoproduct hoproduct-3">
                            <div class="hoproduct-image">
                                <a class="hoproduct-thumb" href="product-details.html">
                                    <img class="hoproduct-frontimage" src="images/product/product-image-9.jpg"
                                        alt="product image">
                                </a>
                                <ul class="hoproduct-actionbox">
                                    <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                                    <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                </ul>
                                <ul class="hoproduct-flags">
                                    <li class="flag-pack">New</li>
                                    <li class="flag-discount">-15%</li>
                                </ul>
                            </div>
                            <div class="hoproduct-content">
                                <h5 class="hoproduct-title"><a href="product-details.html">SonicFuel
                                        Wireless Over-Ear Headphones</a></h5>
                                <div class="hoproduct-rattingbox">
                                    <div class="rattingbox">
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                    </div>
                                </div>
                                <div class="hoproduct-pricebox">
                                    <div class="pricebox">
                                        <del class="oldprice">$35.11</del>
                                        <span class="price">$34.11</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--// Single Product -->

                        <!-- Single Product -->
                        <article class="hoproduct hoproduct-3">
                            <div class="hoproduct-image">
                                <a class="hoproduct-thumb" href="product-details.html">
                                    <img class="hoproduct-frontimage" src="images/product/product-image-14.jpg"
                                        alt="product image">
                                </a>
                                <ul class="hoproduct-actionbox">
                                    <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                                    <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                </ul>
                                <ul class="hoproduct-flags">
                                    <li class="flag-pack">New</li>
                                </ul>
                            </div>
                            <div class="hoproduct-content">
                                <h5 class="hoproduct-title"><a href="product-details.html">SonicFuel
                                        Wireless Over-Ear Headphones</a></h5>
                                <div class="hoproduct-rattingbox">
                                    <div class="rattingbox">
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                    </div>
                                </div>
                                <div class="hoproduct-pricebox">
                                    <div class="pricebox">
                                        <del class="oldprice">$35.11</del>
                                        <span class="price">$34.11</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--// Single Product -->
                    </div>

                    <div class="product-slider-col">
                        <!-- Single Product -->
                        <article class="hoproduct hoproduct-3">
                            <div class="hoproduct-image">
                                <a class="hoproduct-thumb" href="product-details.html">
                                    <img class="hoproduct-frontimage" src="images/product/product-image-15.jpg"
                                        alt="product image">
                                </a>
                                <ul class="hoproduct-actionbox">
                                    <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                                    <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                </ul>
                                <ul class="hoproduct-flags">
                                    <li class="flag-new">new</li>
                                </ul>
                            </div>
                            <div class="hoproduct-content">
                                <h5 class="hoproduct-title"><a href="product-details.html">SonicFuel
                                        Wireless Over-Ear Headphones</a></h5>
                                <div class="hoproduct-rattingbox">
                                    <div class="rattingbox">
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                    </div>
                                </div>
                                <div class="hoproduct-pricebox">
                                    <div class="pricebox">
                                        <del class="oldprice">$35.11</del>
                                        <span class="price">$34.11</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--// Single Product -->

                        <!-- Single Product -->
                        <article class="hoproduct hoproduct-3">
                            <div class="hoproduct-image">
                                <a class="hoproduct-thumb" href="product-details.html">
                                    <img class="hoproduct-frontimage" src="images/product/product-image-15.jpg"
                                        alt="product image">
                                </a>
                                <ul class="hoproduct-actionbox">
                                    <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                                    <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                </ul>
                                <ul class="hoproduct-flags">
                                    <li class="flag-new">new</li>
                                </ul>
                            </div>
                            <div class="hoproduct-content">
                                <h5 class="hoproduct-title"><a href="product-details.html">SonicFuel
                                        Wireless Over-Ear Headphones</a></h5>
                                <div class="hoproduct-rattingbox">
                                    <div class="rattingbox">
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                    </div>
                                </div>
                                <div class="hoproduct-pricebox">
                                    <div class="pricebox">
                                        <del class="oldprice">$35.11</del>
                                        <span class="price">$34.11</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--// Single Product -->
                    </div>

                    <div class="product-slider-col">
                        <!-- Single Product -->
                        <article class="hoproduct hoproduct-3">
                            <div class="hoproduct-image">
                                <a class="hoproduct-thumb" href="product-details.html">
                                    <img class="hoproduct-frontimage" src="images/product/product-image-15.jpg"
                                        alt="product image">
                                </a>
                                <ul class="hoproduct-actionbox">
                                    <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                                    <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                </ul>
                                <ul class="hoproduct-flags">
                                    <li class="flag-new">new</li>
                                </ul>
                            </div>
                            <div class="hoproduct-content">
                                <h5 class="hoproduct-title"><a href="product-details.html">SonicFuel
                                        Wireless Over-Ear Headphones</a></h5>
                                <div class="hoproduct-rattingbox">
                                    <div class="rattingbox">
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                    </div>
                                </div>
                                <div class="hoproduct-pricebox">
                                    <div class="pricebox">
                                        <del class="oldprice">$35.11</del>
                                        <span class="price">$34.11</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--// Single Product -->

                        <!-- Single Product -->
                        <article class="hoproduct hoproduct-3">
                            <div class="hoproduct-image">
                                <a class="hoproduct-thumb" href="product-details.html">
                                    <img class="hoproduct-frontimage" src="images/product/product-image-12.jpg"
                                        alt="product image">
                                    <img class="hoproduct-backimage" src="images/product/product-image-13.jpg"
                                        alt="product image">
                                </a>
                                <ul class="hoproduct-actionbox">
                                    <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                                    <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                </ul>
                                <ul class="hoproduct-flags">
                                    <li class="flag-new">new</li>
                                </ul>
                            </div>
                            <div class="hoproduct-content">
                                <h5 class="hoproduct-title"><a href="product-details.html">SonicFuel
                                        Wireless Over-Ear Headphones</a></h5>
                                <div class="hoproduct-rattingbox">
                                    <div class="rattingbox">
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                    </div>
                                </div>
                                <div class="hoproduct-pricebox">
                                    <div class="pricebox">
                                        <del class="oldprice">$35.11</del>
                                        <span class="price">$34.11</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--// Single Product -->
                    </div>

                </div>
            </div>
        </div>
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

                    <div class="product-slider-col">
                        @foreach ($products as $product)
                        <!-- Single Product -->
                        <article class="hoproduct">
                            
                            <div class="hoproduct-image">
                                <a class="hoproduct-thumb" href="product-details.html">
                                    <img class="hoproduct-frontimage" src="{{ asset($product->photo)}}"
                                        alt="product image">
                                    <img class="hoproduct-backimage" src="{{ asset($product->photo)}}"
                                        alt="product image">
                                </a>
                                <ul class="hoproduct-actionbox">
                                    <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                                    <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                                </ul>
                                <ul class="hoproduct-flags">
                                    <li class="flag-pack">{{__('frontend.new')}}</li>
                                    <li class="flag-discount">-{{$product->discount * 100}}%</li>
                                </ul>
                            </div>
                            <div class="hoproduct-content">
                                @if (Session::get('locale')==='ar')
                                <h5 class="hoproduct-title"><a href="product-details.html">{{$product->name_ar}}</a></h5>
                                @else
                                <h5 class="hoproduct-title"><a href="product-details.html">{{$product->name_en}}</a></h5>
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
                            @endforeach
                        <article class="hoproduct">
                            <div class="hoproduct-image">
                                <a class="hoproduct-thumb" href="product-details.html">
                                    <img class="hoproduct-frontimage" src="{{ asset('frontend/ltr/images/product/product-image-1.jpg')}}"
                                        alt="product image">
                                    <img class="hoproduct-backimage" src="{{ asset('frontend/rtl/images/product/product-image-22.jpg')}}"
                                        alt="product image">
                                </a>
                                <ul class="hoproduct-actionbox">
                                    <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                                    <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                </ul>
                                <ul class="hoproduct-flags">
                                    <li class="flag-pack">New</li>
                                    <li class="flag-discount">-15%</li>
                                </ul>
                            </div>
                            <div class="hoproduct-content">
                                <h5 class="hoproduct-title"><a href="product-details.html">SonicFuel
                                        Wireless Over-Ear Headphones</a></h5>
                                <div class="hoproduct-rattingbox">
                                    <div class="rattingbox">
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                    </div>
                                </div>
                                <div class="hoproduct-pricebox">
                                    <div class="pricebox">
                                        <del class="oldprice">$35.11</del>
                                        <span class="price">$34.11</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--// Single Product -->
                    </div>

                    <div class="product-slider-col">
                        <!-- Single Product -->
                        <article class="hoproduct">
                            <div class="hoproduct-image">
                                <a class="hoproduct-thumb" href="product-details.html">
                                    <img class="hoproduct-frontimage" src="{{ asset('frontend/rtl/images/product/product-image-7.jpg')}}"
                                        alt="product image">
                                    <img class="hoproduct-backimage" src="{{ asset('frontend/rtl/images/product/product-image-8.jpg')}}"
                                        alt="product image">
                                </a>
                                <ul class="hoproduct-actionbox">
                                    <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                                    <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                </ul>
                                <ul class="hoproduct-flags">
                                    <li class="flag-pack">New</li>
                                </ul>
                            </div>
                            <div class="hoproduct-content">
                                <h5 class="hoproduct-title"><a href="product-details.html">SonicFuel
                                        Wireless Over-Ear Headphones</a></h5>
                                <div class="hoproduct-rattingbox">
                                    <div class="rattingbox">
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                    </div>
                                </div>
                                <div class="hoproduct-pricebox">
                                    <div class="pricebox">
                                        <del class="oldprice">$35.11</del>
                                        <span class="price">$34.11</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--// Single Product -->
                    </div>

                    <div class="product-slider-col">
                        <!-- Single Product -->
                        <article class="hoproduct">
                            <div class="hoproduct-image">
                                <a class="hoproduct-thumb" href="product-details.html">
                                    <img class="hoproduct-frontimage" src="{{ asset('frontend/rtl/images/product/product-image-18.jpg')}}"
                                        alt="product image">
                                    <img class="hoproduct-backimage" src="{{ asset('frontend/rtl/images/product/product-image-19.jpg')}}"
                                        alt="product image">
                                </a>
                                <ul class="hoproduct-actionbox">
                                    <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                                    <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                </ul>
                                <ul class="hoproduct-flags">
                                    <li class="flag-pack">New</li>
                                    <li class="flag-discount">-15%</li>
                                </ul>
                            </div>
                            <div class="hoproduct-content">
                                <h5 class="hoproduct-title"><a href="product-details.html">SonicFuel
                                        Wireless Over-Ear Headphones</a></h5>
                                <div class="hoproduct-rattingbox">
                                    <div class="rattingbox">
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                    </div>
                                </div>
                                <div class="hoproduct-pricebox">
                                    <div class="pricebox">
                                        <del class="oldprice">$35.11</del>
                                        <span class="price">$34.11</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--// Single Product -->
                    </div>

                    <div class="product-slider-col">
                        <!-- Single Product -->
                        <article class="hoproduct">
                            <div class="hoproduct-image">
                                <a class="hoproduct-thumb" href="product-details.html">
                                    <img class="hoproduct-frontimage" src="{{ asset('frontend/rtl/images/product/product-image-15.jpg')}}"
                                        alt="product image">
                                </a>
                                <ul class="hoproduct-actionbox">
                                    <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                                    <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                </ul>
                                <ul class="hoproduct-flags">
                                    <li class="flag-new">new</li>
                                </ul>
                            </div>
                            <div class="hoproduct-content">
                                <h5 class="hoproduct-title"><a href="product-details.html">SonicFuel
                                        Wireless Over-Ear Headphones</a></h5>
                                <div class="hoproduct-rattingbox">
                                    <div class="rattingbox">
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                    </div>
                                </div>
                                <div class="hoproduct-pricebox">
                                    <div class="pricebox">
                                        <del class="oldprice">$35.11</del>
                                        <span class="price">$34.11</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--// Single Product -->
                    </div>

                    <div class="product-slider-col">
                        <!-- Single Product -->
                        <article class="hoproduct">
                            <div class="hoproduct-image">
                                <a class="hoproduct-thumb" href="product-details.html">
                                    <img class="hoproduct-frontimage" src="{{ asset('frontend/rtl/images/product/product-image-12.jpg')}}"
                                        alt="product image">
                                    <img class="hoproduct-backimage" src="{{ asset('frontend/rtl/images/product/product-image-13.jpg')}}"
                                        alt="product image">
                                </a>
                                <ul class="hoproduct-actionbox">
                                    <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                                    <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                </ul>
                                <ul class="hoproduct-flags">
                                    <li class="flag-new">new</li>
                                </ul>
                            </div>
                            <div class="hoproduct-content">
                                <h5 class="hoproduct-title"><a href="product-details.html">SonicFuel
                                        Wireless Over-Ear Headphones</a></h5>
                                <div class="hoproduct-rattingbox">
                                    <div class="rattingbox">
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                    </div>
                                </div>
                                <div class="hoproduct-pricebox">
                                    <div class="pricebox">
                                        <del class="oldprice">$35.11</del>
                                        <span class="price">$34.11</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--// Single Product -->
                    </div>

                </div>
            </div>
            <div class="tab-pane fade" id="bstab2-area2" role="tabpanel" aria-labelledby="bstab2-area2-tab">
                <div class="product-slider our-products-slider slider-navigation-2">

                    <div class="product-slider-col">
                        <!-- Single Product -->
                        <article class="hoproduct">
                            <div class="hoproduct-image">
                                <a class="hoproduct-thumb" href="product-details.html">
                                    <img class="hoproduct-frontimage" src="{{ asset('frontend/rtl/images/product/product-image-10.jpg')}}"
                                        alt="product image">
                                    <img class="hoproduct-backimage" src="{{ asset('frontend/rtl/images/product/product-image-11.jpg')}}"
                                        alt="product image">
                                </a>
                                <ul class="hoproduct-actionbox">
                                    <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                                    <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                </ul>
                                <ul class="hoproduct-flags">
                                    <li class="flag-pack">New</li>
                                    <li class="flag-discount">-15%</li>
                                </ul>
                            </div>
                            <div class="hoproduct-content">
                                <h5 class="hoproduct-title"><a href="product-details.html">SonicFuel
                                        Wireless Over-Ear Headphones</a></h5>
                                <div class="hoproduct-rattingbox">
                                    <div class="rattingbox">
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                    </div>
                                </div>
                                <div class="hoproduct-pricebox">
                                    <div class="pricebox">
                                        <del class="oldprice">$35.11</del>
                                        <span class="price">$34.11</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--// Single Product -->
                    </div>

                    <div class="product-slider-col">
                        <!-- Single Product -->
                        <article class="hoproduct">
                            <div class="hoproduct-image">
                                <a class="hoproduct-thumb" href="product-details.html">
                                    <img class="hoproduct-frontimage" src="{{ asset('frontend/rtl/images/product/product-image-7.jpg')}}"
                                        alt="product image">
                                    <img class="hoproduct-backimage" src="{{ asset('frontend/rtl/images/product/product-image-8.jpg')}}"
                                        alt="product image">
                                </a>
                                <ul class="hoproduct-actionbox">
                                    <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                                    <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                </ul>
                                <ul class="hoproduct-flags">
                                    <li class="flag-pack">New</li>
                                </ul>
                            </div>
                            <div class="hoproduct-content">
                                <h5 class="hoproduct-title"><a href="product-details.html">SonicFuel
                                        Wireless Over-Ear Headphones</a></h5>
                                <div class="hoproduct-rattingbox">
                                    <div class="rattingbox">
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                    </div>
                                </div>
                                <div class="hoproduct-pricebox">
                                    <div class="pricebox">
                                        <del class="oldprice">$35.11</del>
                                        <span class="price">$34.11</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--// Single Product -->
                    </div>

                    <div class="product-slider-col">
                        <!-- Single Product -->
                        <article class="hoproduct">
                            <div class="hoproduct-image">
                                <a class="hoproduct-thumb" href="product-details.html">
                                    <img class="hoproduct-frontimage" src="{{ asset('frontend/rtl/images/product/product-image-4.jpg')}}"
                                        alt="product image">
                                </a>
                                <ul class="hoproduct-actionbox">
                                    <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                                    <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                </ul>
                                <ul class="hoproduct-flags">
                                    <li class="flag-pack">New</li>
                                    <li class="flag-discount">-15%</li>
                                </ul>
                            </div>
                            <div class="hoproduct-content">
                                <h5 class="hoproduct-title"><a href="product-details.html">SonicFuel
                                        Wireless Over-Ear Headphones</a></h5>
                                <div class="hoproduct-rattingbox">
                                    <div class="rattingbox">
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                    </div>
                                </div>
                                <div class="hoproduct-pricebox">
                                    <div class="pricebox">
                                        <del class="oldprice">$35.11</del>
                                        <span class="price">$34.11</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--// Single Product -->
                    </div>

                    <div class="product-slider-col">

                        <!-- Single Product -->
                        <article class="hoproduct">
                            <div class="hoproduct-image">
                                <a class="hoproduct-thumb" href="product-details.html">
                                    <img class="hoproduct-frontimage" src="{{ asset('frontend/rtl/images/product/product-image-5.jpg')}}"
                                        alt="product image">
                                </a>
                                <ul class="hoproduct-actionbox">
                                    <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                                    <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                </ul>
                                <ul class="hoproduct-flags">
                                    <li class="flag-pack">New</li>
                                </ul>
                            </div>
                            <div class="hoproduct-content">
                                <h5 class="hoproduct-title"><a href="product-details.html">SonicFuel
                                        Wireless Over-Ear Headphones</a></h5>
                                <div class="hoproduct-rattingbox">
                                    <div class="rattingbox">
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                    </div>
                                </div>
                                <div class="hoproduct-pricebox">
                                    <div class="pricebox">
                                        <del class="oldprice">$35.11</del>
                                        <span class="price">$34.11</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--// Single Product -->
                    </div>

                    <div class="product-slider-col">
                        <!-- Single Product -->
                        <article class="hoproduct">
                            <div class="hoproduct-image">
                                <a class="hoproduct-thumb" href="product-details.html">
                                    <img class="hoproduct-frontimage" src="{{ asset('frontend/rtl/images/product/product-image-15.jpg')}}"
                                        alt="product image">
                                </a>
                                <ul class="hoproduct-actionbox">
                                    <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                                    <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                </ul>
                                <ul class="hoproduct-flags">
                                    <li class="flag-new">new</li>
                                </ul>
                            </div>
                            <div class="hoproduct-content">
                                <h5 class="hoproduct-title"><a href="product-details.html">SonicFuel
                                        Wireless Over-Ear Headphones</a></h5>
                                <div class="hoproduct-rattingbox">
                                    <div class="rattingbox">
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                    </div>
                                </div>
                                <div class="hoproduct-pricebox">
                                    <div class="pricebox">
                                        <del class="oldprice">$35.11</del>
                                        <span class="price">$34.11</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--// Single Product -->
                    </div>

                    <div class="product-slider-col">
                        <!-- Single Product -->
                        <article class="hoproduct">
                            <div class="hoproduct-image">
                                <a class="hoproduct-thumb" href="product-details.html">
                                    <img class="hoproduct-frontimage" src="{{ asset('frontend/rtl/images/product/product-image-12.jpg')}}"
                                        alt="product image">
                                    <img class="hoproduct-backimage" src="{{ asset('frontend/rtl/images/product/product-image-13.jpg')}}"
                                        alt="product image">
                                </a>
                                <ul class="hoproduct-actionbox">
                                    <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                                    <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                </ul>
                                <ul class="hoproduct-flags">
                                    <li class="flag-new">new</li>
                                </ul>
                            </div>
                            <div class="hoproduct-content">
                                <h5 class="hoproduct-title"><a href="product-details.html">SonicFuel
                                        Wireless Over-Ear Headphones</a></h5>
                                <div class="hoproduct-rattingbox">
                                    <div class="rattingbox">
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                    </div>
                                </div>
                                <div class="hoproduct-pricebox">
                                    <div class="pricebox">
                                        <del class="oldprice">$35.11</del>
                                        <span class="price">$34.11</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--// Single Product -->
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!--// Our Products Area -->

<!-- Banner Area -->
<div class="banner-area">
    <div class="container">
        <div class="imgbanner imgbanner-2 mt-30">
            <a href="product-details.html">
                <img src="{{ asset('frontend/ltr/images/banner/banner-image-6.jpg')}}" alt="banner">
            </a>
        </div>
    </div>
</div>
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
                @foreach ($new_arrival_products as $product)
                <div class="product-slider-col">
                    
                    <!-- Single Product -->
                    <article class="hoproduct">
                        
                        <div class="hoproduct-image">
                            <a class="hoproduct-thumb" href="product-details.html">
                                <img class="hoproduct-frontimage" src="{{ asset($product->photo)}}"
                                    alt="product image">
                                <img class="hoproduct-backimage" src="{{ asset($product->photo)}}"
                                    alt="product image">
                            </a>
                            <ul class="hoproduct-actionbox">
                                <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                                <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                            </ul>
                            <ul class="hoproduct-flags">
                                <li class="flag-pack">{{__('frontend.new')}}</li>
                                <li class="flag-discount">-{{$product->discount * 100}}%</li>
                            </ul>
                        </div>
                        <div class="hoproduct-content">
                            @if (Session::get('locale')==='ar')
                            <h5 class="hoproduct-title"><a href="product-details.html">{{$product->name_ar}}</a></h5>
                            @else
                            <h5 class="hoproduct-title"><a href="product-details.html">{{$product->name_en}}</a></h5>
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
                <div class="product-slider-col">
                        <article class="hoproduct">
                        <div class="hoproduct-image">
                            <a class="hoproduct-thumb" href="product-details.html">
                                <img class="hoproduct-frontimage" src="{{ asset('frontend/ltr/images/product/product-image-1.jpg')}}"
                                    alt="product image">
                                <img class="hoproduct-backimage" src="{{ asset('frontend/rtl/images/product/product-image-22.jpg')}}"
                                    alt="product image">
                            </a>
                            <ul class="hoproduct-actionbox">
                                <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                                <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                                <li><a href="#"><i class="lnr lnr-heart"></i></a></li>
                            </ul>
                            <ul class="hoproduct-flags">
                                <li class="flag-pack">New</li>
                                <li class="flag-discount">-15%</li>
                            </ul>
                        </div>
                        <div class="hoproduct-content">
                            <h5 class="hoproduct-title"><a href="product-details.html">SonicFuel
                                    Wireless Over-Ear Headphones</a></h5>
                            <div class="hoproduct-rattingbox">
                                <div class="rattingbox">
                                    <span class="active"><i class="ion ion-ios-star"></i></span>
                                    <span class="active"><i class="ion ion-ios-star"></i></span>
                                    <span class="active"><i class="ion ion-ios-star"></i></span>
                                    <span class="active"><i class="ion ion-ios-star"></i></span>
                                    <span class="active"><i class="ion ion-ios-star"></i></span>
                                </div>
                            </div>
                            <div class="hoproduct-pricebox">
                                <div class="pricebox">
                                    <del class="oldprice">$35.11</del>
                                    <span class="price">$34.11</span>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!--// Single Product -->
                </div>
                
                    <div class="product-slider-col">
                        <!-- Single Product -->
                        <article class="hoproduct">
                            <div class="hoproduct-image">
                                <a class="hoproduct-thumb" href="product-details.html">
                                    <img class="hoproduct-frontimage" src="{{ asset('frontend/ltr/images/product/product-image-1.jpg')}}"
                                        alt="product image">
                                    <img class="hoproduct-backimage" src="{{ asset('frontend/ltr/images/product/product-image-22.jpg')}}"
                                        alt="product image">
                                </a>
                                <ul class="hoproduct-actionbox">
                                    <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                                    <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                                </ul>
                                <ul class="hoproduct-flags">
                                    <li class="flag-pack">New</li>
                                    <li class="flag-discount">-15%</li>
                                </ul>
                            </div>
                            <div class="hoproduct-content">
                                <h5 class="hoproduct-title"><a href="product-details.html">SonicFuel
                                        Wireless Over-Ear Headphones</a></h5>
                                <div class="hoproduct-rattingbox">
                                    <div class="rattingbox">
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                    </div>
                                </div>
                                <div class="hoproduct-pricebox">
                                    <div class="pricebox">
                                        <del class="oldprice">$35.11</del>
                                        <span class="price">$34.11</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--// Single Product -->
                    </div>

                    <div class="product-slider-col">
                        <!-- Single Product -->
                        <article class="hoproduct">
                            <div class="hoproduct-image">
                                <a class="hoproduct-thumb" href="product-details.html">
                                    <img class="hoproduct-frontimage" src="{{ asset('frontend/ltr/images/product/product-image-7.jpg')}}"
                                        alt="product image">
                                    <img class="hoproduct-backimage" src="{{ asset('frontend/ltr/images/product/product-image-8.jpg')}}"
                                        alt="product image">
                                </a>
                                <ul class="hoproduct-actionbox">
                                    <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                                    <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                </ul>
                                <ul class="hoproduct-flags">
                                    <li class="flag-pack">New</li>
                                </ul>
                            </div>
                            <div class="hoproduct-content">
                                <h5 class="hoproduct-title"><a href="product-details.html">SonicFuel
                                        Wireless Over-Ear Headphones</a></h5>
                                <div class="hoproduct-rattingbox">
                                    <div class="rattingbox">
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                    </div>
                                </div>
                                <div class="hoproduct-pricebox">
                                    <div class="pricebox">
                                        <del class="oldprice">$35.11</del>
                                        <span class="price">$34.11</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--// Single Product -->
                    </div>

                    <div class="product-slider-col">
                        <!-- Single Product -->
                        <article class="hoproduct">
                            <div class="hoproduct-image">
                                <a class="hoproduct-thumb" href="product-details.html">
                                    <img class="hoproduct-frontimage" src="{{ asset('frontend/ltr/images/product/product-image-18.jpg')}}"
                                        alt="product image">
                                    <img class="hoproduct-backimage" src="{{ asset('frontend/ltr/images/product/product-image-19.jpg')}}"
                                        alt="product image">
                                </a>
                                <ul class="hoproduct-actionbox">
                                    <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                                    <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                </ul>
                                <ul class="hoproduct-flags">
                                    <li class="flag-pack">New</li>
                                    <li class="flag-discount">-15%</li>
                                </ul>
                            </div>
                            <div class="hoproduct-content">
                                <h5 class="hoproduct-title"><a href="product-details.html">SonicFuel
                                        Wireless Over-Ear Headphones</a></h5>
                                <div class="hoproduct-rattingbox">
                                    <div class="rattingbox">
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                    </div>
                                </div>
                                <div class="hoproduct-pricebox">
                                    <div class="pricebox">
                                        <del class="oldprice">$35.11</del>
                                        <span class="price">$34.11</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--// Single Product -->
                    </div>

                    <div class="product-slider-col">
                        <!-- Single Product -->
                        <article class="hoproduct">
                            <div class="hoproduct-image">
                                <a class="hoproduct-thumb" href="product-details.html">
                                    <img class="hoproduct-frontimage" src="{{ asset('frontend/ltr/images/product/product-image-15.jpg')}}"
                                        alt="product image">
                                </a>
                                <ul class="hoproduct-actionbox">
                                    <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                                    <li><a href="#" class="quickview-trigger"><i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                </ul>
                                <ul class="hoproduct-flags">
                                    <li class="flag-new">new</li>
                                </ul>
                            </div>
                            <div class="hoproduct-content">
                                <h5 class="hoproduct-title"><a href="product-details.html">SonicFuel
                                        Wireless Over-Ear Headphones</a></h5>
                                <div class="hoproduct-rattingbox">
                                    <div class="rattingbox">
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                        <span class="active"><i class="ion ion-ios-star"></i></span>
                                    </div>
                                </div>
                                <div class="hoproduct-pricebox">
                                    <div class="pricebox">
                                        <del class="oldprice">$35.11</del>
                                        <span class="price">$34.11</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--// Single Product -->
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection