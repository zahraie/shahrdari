@extends('master')
@section('head')
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
@endsection
@section('title', 'پنل مدیریت شهردار')
@section('main')
    <br>
    <br>
    <br>
    <div class="container site-content">
        <a>خوش آمدید،</a><a class="header">{{Auth::user()->name}}</a>
        <a href="{{url('/logout')}}" class="btn btn-warning num"><img class="img-count" > خروج </a>

        @if (Auth::user()->Privilege()->find(1)!=null ||Auth::user()->Privilege()->find(2)!=null||Auth::user()->Privilege()->find(3)!=null||Auth::user()->Privilege()->find(4)!=null)
            <a href="{{url('/panel')}}" class="btn btn-info">پنل مدیریت شهردار</a>
        @endif
        <br>
        <br>
        <div class="col-md-11">
            @if(Auth::user()->Privilege()->find(1) != null)
            <div class="row">
                <a>مدیریت شهردار : </a>
                <a href="{{url('/panel/new-manager')}}" class="btn btn-default">افزودن کارمند جدید</a>
            </div><br>
            @endif
            @if(Auth::user()->Privilege()->find(4) != null)
                <div class="row">
                <a>مدیریت انبارداری : </a>
                <a href="{{url('/panel/new-product')}}" class="btn btn-default">افزودن محصول جدید</a>
                <a href="{{url('/panel/product')}}" class="btn btn-default">مدیریت محصولات</a>
                </div><br>
            @endif
            @if(Auth::user()->Privilege()->find(3) != null)
                <div class="row">
                <a>مدیریت دیدگاه ها : </a>
                <a href="{{url('/panel/comment')}}" class="btn btn-default">مدیریت دیدگاه ها</a>
                </div><br>
            @endif
            @if(Auth::user()->Privilege()->find(2) != null)
                <div class="row">
                <a>مدیریت دسته ها و زیر دسته ها : </a>
                <a href="{{url('/panel/new-cat')}}" class="btn btn-default">افزودن دسته</a>
                <a href="{{url('/panel/cat')}}" class="btn btn-default">مدیریت  دسته ها</a>
                <a href="{{url('/panel/new-subcat')}}" class="btn btn-default">افزودن زیر دسته</a>
                <a href="{{url('/panel/subcat')}}" class="btn btn-default">مدیریت  زیر دسته ها</a>
                </div><br>
            @endif
            <div class="row">
                <a>سفارشات :</a>
                <a href="{{url('/panel/order')}}" class="btn btn-default">مدیریت سفارشات</a>
            </div><br>
            <div class="row">
                <a>تخصیص کد پرسونلی</a>
                <a href="{{url('/panel/code')}}" class="btn btn-default">مدیریت کدهای پرسونلی</a>
            </div><br>
        </div>
    </div>
@endsection