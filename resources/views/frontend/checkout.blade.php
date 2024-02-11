@extends((Session::get('locale') ==='ar'? 'layouts.main-rtl' : 'layouts.main'))
@section('content')
<div class="breadcrumb-area bg-grey">
    <div class="container">
        <div class="ho-breadcrumb">
            <ul>
                <li><a href="/">{{__('frontend.home')}}</a></li>
                <li><a href="/products">{{__('frontend.shop')}}</a></li>
                <li>{{__("frontend.checkout")}}</li>
            </ul>
        </div>
    </div>
</div>
<div class="checkout-area bg-white ptb-30">
    <div class="container">
<form action="/check" class="billing-info" method="post">
    @csrf
    <div class="row">
        <input type="hidden" value="{{ Cart::total() }}" name="total">
        <!-- Billing Details -->
        <div class="col-lg-6">

            <h3 class="small-title">{{__("frontend.billing")}}</h3>
            <div class="ho-form">
                <div class="ho-form-inner">
                    <div class="single-input single-input-half">
                        <label for="customer-firstname"> {{__("frontend.name")}} *</label>
                        <input type="text" name="costumer_name" id="customer-firstname">
                    </div>

                    <div class="single-input single-input-half">
                        <label for="customer-phone">{{__("frontend.phone")}} *</label>
                        <input type="number" name="costumer_number" id="customer-phone">
                    
                    
                    </div>
                    <div class="single-input">
                        <label for="customer-address">{{__("frontend.address")}}*</label>
                        <input type="text" name="address" id="customer-address"
                            placeholder="address">
                    </div>
                    <div class="single-input">
                        <label for="customer-address">{{__("frontend.note")}}*</label>
                        <input type="text" name="note" id="customer-address"
                            placeholder="note">
                    </div>
                </div>
            </div>


        </div>
        <!--// Billing Details -->


        <!-- Place Order -->
        <div class="col-lg-6">
            <div class="order-infobox">
                <h3 class="small-title">{{__("frontend.your_order")}}</h3>
                <div class="checkout-table table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-left">{{__("frontend.total")}}</th>
                                <th class="text-right">{{__("frontend.product")}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cartItems as $cartItem)
                        <tr>
                        <td class="text-left"> {{$cartItem->name}} <span>× {{$cartItem->qty}}</span></td>
                        <td class="text-right">{{$cartItem->subtotal()}} KWD </td>  
                         </tr>
                          @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="total-price">
                                <th class="text-left">{{__("frontend.cart_totals")}}</th>
                                <td class="text-right">{{ Cart::total() }}</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <button class="ho-button ho-button-fullwidth mt-30" type="submit">
                    <span>{{__("frontend.comfirm")}}</span>
                </button>
            </div>
        </div>
        <!--// Place Order -->

    </div>
</form>
    </div>
</div>
@endsection