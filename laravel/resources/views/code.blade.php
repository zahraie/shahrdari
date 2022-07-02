@extends('master')

@section('title', 'تخصیص کد پرسونلی')

@section('head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('scripts')
    <script src="{{ asset('assets/js/jss/code.js') }}"></script>
@endsection
@section('main')
    <div style="margin-top: 30px" class="col-sm-5 col-sm-offset-5 content-home">
        <br>
        <input type="text" id="users" class="form-control ltr text-right"  title="" placeholder="تعداد کاربران دریافت کننده کدهای پرسونلی"><br>
       <br> <input type="text" id="price" class="form-control ltr text-right" size="40" placeholder="مقدار تخفیف">
        <br><input type="text" id="price2" class="form-control ltr text-right" size="40" placeholder="مقدار خرید">
        <br><button class="submit btn btn-wide btn-success">افزودن</button>
    </div>
@endsection