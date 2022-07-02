@extends('auth.master')

@section('title', 'یادآوری گذرواژه')
@section('slogan', 'گامی بلند در مسیر پیشرفت...')

@section('scripts')
    <script src="{{ asset('js/auth/remind-done.js') }}"></script>
@endsection

@section('content')
    <div class="form-group" data-ng-controller="remind-done">
        <p>لینک بازنشانی گذرواژه برای‌تان ایمیل شد.</p>
        <p>اگر تا 10 دقیقه آینده ایمیلی دریافت نکردید، روی دکمه زیر کلیک کنید.</p>
        <div class="height-15"></div>
        <button class="btn btn-wide btn-big btn-bg" data-ng-click="submit()">فرستادن دوباره</button>
    </div>
@endsection