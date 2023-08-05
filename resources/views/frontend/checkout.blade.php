@extends((Session::get('locale') ==='ar'? 'layouts.main-rtl' : 'layouts.main'))
@section('content')
<div class="breadcrumb-area bg-grey">
    <div class="container">
        <div class="ho-breadcrumb">
            <ul>
                <li><a href="/">{{__('frontend.home')}}</a></li>
                <li><a href="/products">{{__('frontend.shop')}}</a></li>
                <li>Checkout</li>
            </ul>
        </div>
    </div>
</div>
<div class="checkout-area bg-white ptb-30">
    <div class="container">
<form action="#" class="billing-info">
    <div class="row">

        <!-- Billing Details -->
        <div class="col-lg-6">

            <h3 class="small-title">BILLING DETAILS</h3>
            <div class="ho-form">
                <div class="ho-form-inner">
                    <div class="single-input single-input-half">
                        <label for="customer-firstname"> Name *</label>
                        <input type="text" name="costumer_name" id="customer-firstname">
                    </div>

                    <div class="single-input single-input-half">
                        <label for="customer-phone">Phone *</label>
                        <input type="text" name="costumer_number" id="customer-phone">
                    
                    
                    </div>
                    <div class="single-input">
                        <label for="customer-address">Address*</label>
                        <input type="text" name="address" id="customer-address"
                            placeholder="address">
                    </div>
                    <div class="single-input">
                        <label for="customer-address">Note*</label>
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
                <h3 class="small-title">YOUR ORDER</h3>
                <div class="checkout-table table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-left">PRODUCT</th>
                                <th class="text-right">TOTAL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-left">Aenean sagittis <span>× 1</span></td>
                                <td class="text-right">$75.00</td>
                            </tr>
                            <tr>
                                <td class="text-left">Elementum felis <span>× 1</span></td>
                                <td class="text-right">$125.00</td>
                            </tr>
                            <tr>
                                <td class="text-left">Ornare sed consequat <span>× 1</span></td>
                                <td class="text-right">$515.00</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th class="text-left">CART SUBTOTAL</th>
                                <td class="text-right">$715.00</td>
                            </tr>
                            <tr class="total-price">
                                <th class="text-left">ORDER TOTAL</th>
                                <td class="text-right">$722.00</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <button class="ho-button ho-button-fullwidth mt-30" type="submit">
                    <span>Proceed</span>
                </button>
            </div>
        </div>
        <!--// Place Order -->

    </div>
</form>
    </div>
</div>
@endsection