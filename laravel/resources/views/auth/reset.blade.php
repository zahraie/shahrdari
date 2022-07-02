@extends('auth.master')

@section('title', 'بازنشانی گذرواژه')
@section('slogan', 'گامی بلند در مسیر پیشرفت...')

@section('scripts')
    <script src="{{ asset('js/auth/reset.js') }}"></script>
@endsection

@section('content')
    <div class="form-group" data-ng-controller="reset">
        <input type="text" class="form-control" data-toggle="tooltip" title="شناسه"
               value="{{ $username }}" placeholder="" disabled>
        <input type="password" class="form-control" data-toggle="tooltip" title="گذرواژه نو"
               data-ng-model="password" placeholder="گذرواژه نو">
        <input type="password" class="form-control" data-toggle="tooltip" title="بازنویسی گذرواژه"
               data-ng-model="password_confirmation" placeholder="بازنویسی گذرواژه">
        <button class="btn btn-wide btn-big btn-bg" data-ng-click="submit()">بازنشانی</button>
    </div>
@endsection