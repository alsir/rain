@extends((Session::get('locale') ==='ar'? 'layouts.main-rtl' : 'layouts.main'))
@section('content')
<div class="cart-page-area ptb-30 bg-white">
    <div class="container">

        <!-- Cart Products -->
        <div class="cart-table table-responsive">
            <table class="table table-bordered table-hover mb-0">
                <thead>
                    <tr>
                        <th class="cart-column-image" scope="col">{{__('frontend.image')}}</th>
                        <th class="cart-column-productname" scope="col">{{__('frontend.product')}}</th>
                        <th class="cart-column-price" scope="col">{{__('frontend.price')}}</th>
                        <th class="cart-column-quantity" scope="col">{{__('frontend.quantity')}}</th>
                        <th class="cart-column-total" scope="col">{{__('frontend.total')}}</th>
                        <th class="cart-column-remove" scope="col">{{__('frontend.remove')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cartItems as $cartItem)
                        
                    @endforeach
                    <tr>
                        <td>
                            <a href="product-details-right-sidebar.html" class="product-image">
                                <img src="{{ asset($cartItem->photo)}}" alt="product image">
                            </a>
                        </td>
                        <td>
                            <a href="product-details-right-sidebar.html" class="product-title">{{$cartItem->name}}</a>
                        </td>
                        <td>{{$cartItem->price}}</td>
                        <td>
                            {{$cartItem->quantity}}
                        </td>
                        <td>
                            <span class="total-price">{{$cartItem->price * $cartItem->quantity}}</span>
                        </td>
                        <td>
                            <form action="remove/{{$cartItem->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="remove-product" type="submit"><i class="ion ion-ios-close"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                        <td>
                            <a href="product-details-right-sidebar.html" class="product-image">
                                <img src="{{ asset('frontend/rtl/images/product/thumbnail/product-image-1.jpg')}}" alt="product image">
                            </a>
                        </td>
                        <td>
                            <a href="product-details-right-sidebar.html" class="product-title">SonicFuel
                                Wireless Headphones</a>
                        </td>
                        <td>$75.00</td>
                        <td>
                            <div class="quantity-select">
                                <input type="text" value="1">
                                <div class="inc qtybutton">+<i class="ion ion-ios-arrow-up"></i></div>
                                <div class="dec qtybutton">-<i class="ion ion-ios-arrow-down"></i></div>
                            </div>
                        </td>
                        <td>
                            <span class="total-price">$75.00</span>
                        </td>
                        <td>
                            <button class="remove-product"><i class="ion ion-ios-close"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <a href="product-details-right-sidebar.html" class="product-image">
                                <img src="{{ asset('frontend/rtl/images/product/thumbnail/product-image-2.jpg')}}" alt="product image">
                            </a>
                        </td>
                        <td>
                            <a href="product-details-right-sidebar.html" class="product-title">
                                Wireless Over-Ear Headphones</a>
                        </td>
                        <td>$75.00</td>
                        <td>
                            <div class="quantity-select">
                                <input type="text" value="1">
                                <div class="inc qtybutton">+<i class="ion ion-ios-arrow-up"></i></div>
                                <div class="dec qtybutton">-<i class="ion ion-ios-arrow-down"></i></div>
                            </div>
                        </td>
                        <td>
                            <span class="total-price">$75.00</span>
                        </td>
                        <td>
                            <button class="remove-product"><i class="ion ion-ios-close"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <a href="product-details-right-sidebar.html" class="product-image">
                                <img src="{{ asset('frontend/rtl/images/product/thumbnail/product-image-3.jpg')}}" alt="product image">
                            </a>
                        </td>
                        <td>
                            <a href="product-details-right-sidebar.html" class="product-title">Over-Ear
                                Headphones SonicFuel</a>
                        </td>
                        <td>$75.00</td>
                        <td>
                            <div class="quantity-select">
                                <input type="text" value="1">
                                <div class="inc qtybutton">+<i class="ion ion-ios-arrow-up"></i></div>
                                <div class="dec qtybutton">-<i class="ion ion-ios-arrow-down"></i></div>
                            </div>
                        </td>
                        <td>
                            <span class="total-price">$75.00</span>
                        </td>
                        <td>
                            <button class="remove-product"><i class="ion ion-ios-close"></i></button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
        <!--// Cart Products -->

        <!-- Cart Content -->
        <div class="cart-content">
            <div class="row justify-content-between">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="cart-content-left">
                        <div class="ho-buttongroup">
                            <a href="/shop" class="ho-button ho-button-sm">
                                <span>{{__('frontend.update_cart')}}</span>
                            </a>
                            <a href="/shop" class="ho-button ho-button-sm">
                                <span>{{__('frontend.continue_shopping')}}</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="cart-content-right">
                        <h2><span>{{__('frontend.cart_totals')}}</span></h2>
                        <table class="cart-pricing-table">
                            <tbody>
                                
                                <tr class="cart-total">
                                    <th><span>{{__('frontend.total')}}</span></th>
                                    <td>$722.00</td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="/checkout" class="ho-button">
                            <span><span>{{__('frontend.proceed_to_checkout')}}</span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--// Cart Content -->

    </div>
</div>
@endsection