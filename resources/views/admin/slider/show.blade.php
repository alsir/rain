@extends('layouts.app')
@section('title', 'سلايدات')
@section('content')
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
                    <p>{{$slider->description_1}}</p>
                </div>
            </div>
            <span class="herobanner-progress"></span>
        </div>
        <!--// Herobanner Single -->

        <!-- Herobanner Single -->
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
                </div>
                <span class="herobanner-progress"></span>
            </div>
        <!--// Herobanner Single -->
        <!-- Herobanner Single -->
                <!-- Herobanner Single -->
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
                    </div>
                    <span class="herobanner-progress"></span>
                </div>
        <!--// Herobanner Single -->

    </div>
    <!--// Hero Area -->
</div>
@endsection