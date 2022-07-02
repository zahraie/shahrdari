@extends('auth.master')

@section('title', 'یادآوری گذرواژه')
@section('slogan', 'گامی بلند در مسیر پیشرفت...')
@section('description', 'یادآوری گذرواژه تالار تخصصی نرم افزار و برنامه نویسی تاپ یوزر')
@section('keywords', 'یادآوری گذرواژه, تالار تخصصی, نرم افزار, برنامه نویسی, تاپ یوزر')


@section('scripts')
    <script src="{{ asset('js/auth/remind.js') }}"></script>
@endsection

@section('content')
    <div class="form-group" data-ng-controller="remind">
        <input type="text" class="form-control" data-toggle="tooltip" title="شناسه/ایمیل"
               data-ng-model="username_email" placeholder="شناسه/ایمیل">
        <button class="btn btn-wide btn-big btn-bg" data-ng-click="submit()">ادامه</button>
        <div class="height-15"></div>
        <div class="container-fluid text-center">
            <div class="col-sm-6">
                <a href="{{ url('/auth/sign-in') }}" data-toggle="tooltip" data-placement="bottom"
                   title="تلاشی دیگر!">ورود کاربران</a>
            </div>
            <div class="col-sm-6">
                <a href="{{ url('/auth/sign-up') }}" data-toggle="tooltip" data-placement="bottom"
                   title="اکانت ندارید؟">نام نویسی</a>
            </div>
        </div>
    </div>
@endsection