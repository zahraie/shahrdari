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
@section('title', 'تبلیغات')
@section('main')
    <div class="container site-content">
        <div class="col-md-12">
            <div class="container-fluid" style="border-top: 1px solid #fff; border-bottom: 1px solid #fff; background-color:#f6f9fa;;">
                <div style="direction: rtl;text-align: justify" class="">
                    <br><br>
                    <h4 class="title"> تبلیغات </h4><br>
                    <div class="content-home" style=" font-size: medium">

                    </div><br><br>
                </div>
            </div>
        </div>
    </div>
@endsection