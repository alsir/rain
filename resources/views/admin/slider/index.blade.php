@extends('layouts.app')
@section('title', 'الاعلانات ')
@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">الاعلانات </h2>
            </div>
        </div>
    </div>
</div>

   
    <div class="content-body">
        <div class="col-12"> 
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">الاعلانات </h4>
                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#default">إضافة </a>
                </div>

                <div class="card-content">
                    <div class="card-body card-dashboard">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table zero-configuration">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>1 825</th>
                                        <th>العنوان 1</th>
                                        <th>2 825</th>
                                        <th>2 العنوان</th>
                                        <th>3 825 </th>
                                        <th>3 العنوان</th>
                                        <th></th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sliders as $slider)
                                        <tr>
                                            <td><a href="/admin/ad/{{$slider->id}}">{{$slider->id}}</a></td>
                                            <td>
                                                <div class="avatar mr-1 avatar-xl">
                                                    <img src="{{ asset($slider->ad_1_825) }}" alt="avtar img holder"
                                                        style="object-fit: cover">
                                                </div>
                                            </td>
                                            <td>
                                                {{$slider->heading_1}}
                                            </td>
                                            <td>
                                                <div class="avatar mr-1 avatar-xl">
                                                    <img src="{{ asset($slider->ad_2_825) }}" alt="avtar img holder"
                                                        style="object-fit: cover">
                                                </div>
                                            </td>
                                            <td>
                                                <td>
                                                    {{$slider->heading_2}}
                                                </td>
                                            </td>
                                            <td>
                                                <div class="avatar mr-1 avatar-xl">
                                                    <img src="{{ asset($slider->ad_3_825) }}" alt="avtar img holder"
                                                        style="object-fit: cover">
                                                </div>
                                            </td>
                                            <td>
                                                <td>
                                                    {{$slider->heading_3}}
                                                </td>
                                            </td>
                                               <td> <button class="btn btn-success" name="edit_button"
                                                    value="{{ $slider->id }}" data-toggle="modal"
                                                    data-target="#edit_modal"><i class="fa fa-edit"></i></button>
                                                <button class="btn btn-danger mr-2"
                                                    onclick="if(confirm('هل أنت متأكد ؟')){document.getElementById('delete-users_{{ $slider->id }}').submit();}else{
                                            event.preventDefault();}"><i
                                                        class="fa fa-trash"></i></button>
                                                <form id="delete-users_{{ $slider->id }}"
                                                    action="/admin/slider/{{ $slider->id }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">إضافة </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form form-vertical" action="/admin/slider" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="email-id-vertical">صورة العرض الاولى 825</label>
                                        <input type="file" class="form-control @error('ad_1_825') is-invalid @enderror"
                                            name="ad_1_825">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="first-name-vertical">العنوان الاول</label>
                                        <input type="text" class="form-control @error('heading_1') is-invalid @enderror"
                                            name="heading_1" placeholder="العنوان الاول" value="{{ old('heading_1') }}" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="first-name-vertical">العنوان الثانوي الاول</label>
                                        <input type="text" class="form-control @error('sub_heading_1') is-invalid @enderror"
                                            name="sub_heading_1" placeholder="العنوان الاول" value="{{ old('sub_heading_1') }}" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="first-name-vertical">الوصف الاول</label>
                                        <input type="text" class="form-control @error('description_1') is-invalid @enderror"
                                            name="description_1" placeholder="الوصف الاول" value="{{ old('description_1') }}" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="email-id-vertical">صورة العرض الثانية 825</label>
                                        <input type="file" class="form-control @error('ad_2_825') is-invalid @enderror"
                                            name="ad_2_825">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="first-name-vertical">العنوان الثاني</label>
                                        <input type="text" class="form-control @error('heading_2') is-invalid @enderror"
                                            name="heading_2" placeholder="العنوان الثاني" value="{{ old('heading_2') }}" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="first-name-vertical">العنوان الثانوي الثاني</label>
                                        <input type="text" class="form-control @error('sub_heading_2') is-invalid @enderror"
                                            name="sub_heading_2" placeholder="العنوان الثانوي الثاني" value="{{ old('sub_heading_2') }}" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="first-name-vertical">الوصف الثاني</label>
                                        <input type="text" class="form-control @error('description_2') is-invalid @enderror"
                                            name="description_2" placeholder="الوصف الثاني" value="{{ old('description_2') }}" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="email-id-vertical">صورة العرض الثالثة 825</label>
                                        <input type="file" class="form-control @error('ad_3_825') is-invalid @enderror"
                                            name="ad_3_825">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="first-name-vertical">العنوان الثالث</label>
                                        <input type="text" class="form-control @error('heading_3') is-invalid @enderror"
                                            name="heading_3" placeholder="العنوان الثاني" value="{{ old('heading_3') }}" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="first-name-vertical">العنوان الثانوي الثالث</label>
                                        <input type="text" class="form-control @error('sub_heading_3') is-invalid @enderror"
                                            name="sub_heading_3" placeholder="العنوان الثانوي الثالث" value="{{ old('sub_heading_3') }}" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="first-name-vertical">الوصف الثالث</label>
                                        <input type="text" class="form-control @error('description_3') is-invalid @enderror"
                                            name="description_3" placeholder="الوصف الثالث" value="{{ old('description_3') }}" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary mr-1 mb-1">إضافة</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">أغلاق</button>
                </div>
            </div>
        </div>
    </div>

    <!-- edit Modal -->
    <div class="modal fade text-left" id="edit_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">تعديل </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-section">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">أغلاق</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scriptjs')
    <script>
        $(document).ready(function() {
            $("button[name='edit_button']").click(function() {

                var edit_val = this.value;

                $(".form-section").html(" ");
                $(".form-section").append(
                    "<center><img src='{{ asset('loader.gif') }}'  width='300px'/></center>"
                );
                $.get("/admin/slider/" + edit_val + "/edit", function(data, status) {
                    $(".form-section").html(data);
                }).fail(function() {
                    $(".form-section").html(" ");
                    $(".form-section").append(
                        "<div class='alert alert-danger' role='alert'>عذراً , حصل خطأ ما !!</div>"
                    );
                });
            });
        });
    </script>
@endsection