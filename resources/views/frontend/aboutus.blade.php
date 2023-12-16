@extends((Session::get('locale') ==='ar'? 'layouts.main-rtl' : 'layouts.main'))
@section('content')
<div class="breadcrumb-area bg-grey">
    <div class="container">
        <div class="ho-breadcrumb">
            <ul>
                <li><a href="/">{{__('frontend.home')}}</a></li>
                <li>{{__('frontend.aboutus')}}</li>
            </ul>
        </div>
    </div>
</div>
<main class="page-content">

    <!-- About Page Area -->
    <div class="about-area pt-30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="about-image">
                        <img src="{{ asset('frontend/rtl/images/others/1.jpeg')}}" alt="beautiful girl">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about-content">
                        <h2>{{__('frontend.how_is')}}<span>{{__('frontend.title')}}</span></h2>
                        <p>{{__('frontend.rain_description')}}</p>
                        <h5>{{__('frontend.our_vision')}}</h5>
                        <p>{{__('frontend.our_vision_description')}}</p>
                        <h5>{{__('frontend.kuwait_address')}}</h5>
                        <p>{{__('frontend.location')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// About Page Area -->


</main>
@endsection
