@extends('auth.master')

@section('title', 'فعال‌سازی اکانت')
@section('slogan', 'آغازی بر یک مسیر روشن...')

@section('content')
    <div class="form-group" data-ng-controller="sign-up-done">
        <p>اکانت شما به درستی فعال شد.</p>
        <p>اکنون می توانید به بخش ورود کاربران بروید:</p>
        <div class="height-15"></div>
        <a class="btn btn-wide btn-big btn-bg" href="{{ url('auth/sign-in') }}">ورود</a>
    </div>
@endsection