@extends('master')
@section('head')
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('scripts')
    <script src="{{ asset('assets/js/jss/comment.js') }}"></script>
@endsection
@section('title', 'راهنما')
@section('main')
    <div class="container site-content">
        <div class="col-md-12">
            <div class="container-fluid" style="border-top: 1px solid #fff; border-bottom: 1px solid #fff; background-color:#f6f9fa;;">
                <div style="direction: rtl;text-align: justify" class="">
                    <br><br>
                    <h4 class="title"> راهنما </h4><br>
                    <div class="content-home" style=" font-size: medium">
این سایت مربوط به یک شهرداری میباشد که علاوه بر خدماتی که برای شما ارائه میدهد شامل یک سامانه ی درخواست شهردار میباشد که برای دسترسی به خدمات آن باید ابتدا در سایت ثبت نام کرده و مدیر بودن و یا کاربر عادی بودن شما مشخص شود تا بتوانید از خدمات آن استفاده کنید .
                        <br>
                        بطوریکه اگر کاربر عادی باشید صفحه به صفحه ی اصلی سایت برگردانده میشود و اگر شما شهردار منطقه باشید ، سطح دسترسی شما به خدماتی از جمله انتصاب شهردار جدید و مدیریت انبارداری و مدیریت دیدگاه ها و دیگر دسترسی ها ارتقا می یابد .
                    </div><br><br>
                </div>
            </div>
        </div>
    </div>
@endsection