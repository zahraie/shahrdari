@extends('auth.master')

@section('title', 'تکمیل نام نویسی')
@section('slogan', 'با ورود به سایت از دسترسی به سایر قسمت های مختلف سایت بهره مند شوید.')

@section('scripts')
    <script src="{{ asset('assets/js/auth/sign-up-done.js') }}"></script>
@endsection

@section('content')
    <div class="form-group">
        <p>شما با موفقیت نام نویسی کردید!</p>
        <div class="height-15"></div>
        <a href="{{url('/login')}}" class="btn btn-wide btn-big btn-bg">ورود به سایت</a>
    </div>
@endsection