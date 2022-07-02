@extends('auth.master')
@section('title', 'ورود کاربران')
@section('slogan', 'با ورود به سایت از دسترسی به سایر قسمت های مختلف سایت بهره مند شوید.')
@section('description', 'شهرداری ازندریان, سایت شهرداری ..')
@section('keywords', 'شهرداری ازندریان, سایت شهرداری ..')
@section('content')
    <div class="form-group" >
        <form method="post" action="{{url('login')}}">
            <input type="text" name="email" class="form-control"  title="شناسه/ایمیل"  placeholder="شناسه/ایمیل">
            <input type="password" class="form-control" name="password" title="گذرواژه" placeholder="گذرواژه">
            <input hidden name="_token" value="{{csrf_token()}}">
            <input type="submit" value="ورود" name="send" class="btn  btn-big btn-wide btn-bg" >
            <div class="height-15"></div>
        </form>
        <div class="container-fluid text-center">
            <div class="col-sm-6">
                <a href="{{ url('/remind') }}" title="گذرواژه را فراموش کرده‌اید؟">یادآوری گذرواژه</a>
            </div>
            <div class="col-sm-6">
                <a href="{{ url('/register') }}" title="اکانت ندارید؟">نام نویسی</a>
            </div>
        </div>
    </div>
@endsection