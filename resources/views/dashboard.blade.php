@extends('layouts.app')
@section('title', 'الرئيسية')
@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0"> الطلبات </h2>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-8 col-md-6 col-12">
    <div class="card card-statistics">
        <div class="card-header">
            <h4 class="card-title"> احصائيات </h4>    
        </div>
        <div class="card-body statistics-body">
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                    <div class="media">
                        <div class="avatar bg-primary mr-2">
                            <div class="avatar-content">
                                <i data-feather="trending-up" class="avatar-icon font-medium-2 fa fa-bell"></i>
                            </div>
                        </div>
                        <div class="media-body my-auto">
                            <h4 class="font-weight-bolder mb-0">{{$order_count}}</h4>
                            <p class="card-text font-small-3 mb-0">الطلبات</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                    <div class="media">
                        <div class="avatar bg-danger mr-2">
                            <div class="avatar-content">
                                <i data-feather="user" class="avatar-icon font-medium-2 fa fa-envelope"></i>
                            </div>
                        </div>
                        <div class="media-body my-auto">
                            <h4 class="font-weight-bolder mb-0">{{$new_order}}</h4>
                            <p class="card-text font-small-3 mb-0">غير المعالجة</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                    <div class="media">
                        <div class="avatar bg-warning mr-2">
                            <div class="avatar-content">
                                <i data-feather="box" class="avatar-icon font-medium-2 fa fa-check-square"></i>
                            </div>
                        </div>
                        <div class="media-body my-auto">
                            <h4 class="font-weight-bolder mb-0">{{$received_order}}</h4>
                            <p class="card-text font-small-3 mb-0">المعالجة</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                    <div class="media">
                        <div class="avatar bg-success mr-2">
                            <div class="avatar-content">
                                <i data-feather="trending-up" class="trending-up  font-medium-2 fa fa-truck"></i>
                            </div>
                        </div>
                        <div class="media-body my-auto">
                            <h4 class="font-weight-bolder mb-0">{{$delivered_order}}</h4>
                            <p class="card-text font-small-3 mb-0">تم التوصيل</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">المنتجات </h2>
            </div>
        </div>
    </div>
</div>
<div class="row">
<div class="col-xl-2 col-md-4 col-sm-6">
    <div class="card text-center">
        <div class="card-body">
            <div class="avatar bg-info p-50 mb-1">
                <div class="avatar-content">
                    <i data-feather="eye" class="font-medium-5 fa fa-shopping-bag"></i>
                </div>
            </div>
            <h2 class="font-weight-bolder">{{$products_counter}}</h2>
            <p class="card-text">المنتجات</p>
        </div>
    </div>
</div>
<div class="col-xl-2 col-md-4 col-sm-6">
    <div class="card text-center">
        <div class="card-body">
            <div class="avatar bg-warning p-50 mb-1">
                <div class="avatar-content">
                    <i data-feather="message-square" class="font-medium-5 fa fa-check"></i>
                </div>
            </div>
            <h2 class="font-weight-bolder">{{$in_stack}}</h2>
            <p class="card-text">متوفرة</p>
        </div>
    </div>
</div>
<div class="col-xl-2 col-md-4 col-sm-6">
    <div class="card text-center">
        <div class="card-body">
            <div class="avatar bg-danger p-50 mb-1">
                <div class="avatar-content">
                    <i data-feather="shopping-bag" class="font-medium-5 fa fa-remove"></i>
                </div>
            </div>
            <h2 class="font-weight-bolder">{{$out_off_stack}}</h2>
            <p class="card-text">غير متوفرة </p>
        </div>
    </div>
</div>

</div>

@endsection

