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
@section('title', 'مدیریت دیدگاه ها')
@section('main')
    <div class="container site-content">
        <div class="col-md-12">
            <div class="container-fluid" style="border-top: 1px solid #fff; border-bottom: 1px solid #fff; background-color:#f6f9fa;;">
                <div style="direction: rtl;text-align: right" class="">
                    <br>
                    <br>
                    <h4 class="title"> برای ادامه ابتدا ثبت نام کنید.</h4><br>
                    <a href="{{url('/login')}}"><button type="submit" class="btn-blue"> کلیک کنید </button></a>
                    <br><br><br>

                </div>

            </div>
        </div>
    </div>
@endsection