@extends('layouts.app')
@section('title', ', الطلبات ')
@section('content')
<div class="card position-center">
    <div class="card-body">
        <h3 class="card-title text-center">طلب رقم :{{$order->id}}</h3>
        <h3 class=" text-center">
            @if ($order->order_status == 0)
                <span class="badge badge-danger">جديد</span>
            @elseif ($order->order_status == 1)
                <span class="badge badge-warning">تحت المعالجة</span>
            @else
                <span class="badge badge-success"> تم التوصيل</span>
            @endif
        </h3>
        <p>اسم العميل {{$order->costumer_name}}</p>
        <p>رقم العميل{{$order->costumer_number}}</p>
        <p>عنوان العميل{{$order->address}}</p>

        <p class="card-text">
            تعليق:{{$order->note}}
        </p>
        <p class="card-text">
            المجموع:{{$order->total}} 
        </p>
    </div>
</div>
<table class="table zero-configuration">
    <thead>
        <tr>
            <th>#</th>
            <th>رقم المنتج</th>
            <th>الكمية </th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($orderitems as $orderitem)
            <tr>
                <td><a href="/admin/orderitem/{{$orderitem->id}}">{{$orderitem->id}}</a></td>
                <td><a href="/admin/product/{{$orderitem->product_id}}">{{ $orderitem->product_id }}</a></td>
                <td>{{ $orderitem->quantity }}</td>
            </tr>
        @endforeach
    </tbody>

</table>
@endsection