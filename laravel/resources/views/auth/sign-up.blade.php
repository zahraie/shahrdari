@extends('auth.master')
@section('title', ' نام نویسی')
@section('slogan', 'با ورود به سایت از دسترسی به سایر قسمت های مختلف سایت بهره مند شوید.')
@section('description', 'شهرداری ازندریان, سایت شهرداری ..')
@section('keywords', ' شهرداری ازندریان, سایت شهرداری ..')

@section('scripts')
    <script src="{{ asset('assets/js/auth/sign-up.js') }}"></script>
@endsection

@section('content')
    <div class="form-group" >
        <form action="{{url('/register')}}" method="post">
            <input type="text" name="name" class="form-control ltr text-right"  title="نام" placeholder="نام">
            <input type="email" name="email" class="form-control ltr text-right"  title="ایمیل" placeholder="ایمیل">
            <div class="input-group">
                <input type="password" id="password" name="password" class="form-control ltr text-right" title="گذر واژه" placeholder="گذرواژه">
                <span class="input-group-addon hover">
                    <span class="glyphicon glyphicon-eye-open"></span>
                </span>
            </div>
            <input hidden name="_token" value="{{csrf_token()}}">
            <input type="submit" class="btn btn-wide btn-big btn-bg" value="نام نویسی">
        </form>
        <div class="height-15"></div>

        <div class="height-15"></div>
        <div class="container-fluid text-center">
            <div class="col-sm-6">
                <a href="{{ url('/remind') }}" title="گذرواژه را فراموش کرده‌اید؟">یادآوری گذرواژه</a>
            </div>
            <div class="col-sm-6">
                <a href="{{ url('/login') }}" title="اکانت دارید؟">ورود کاربران</a>
            </div>
        </div>
    </div>
@endsection