@extends('master')
@section('title', ';کارمند جدید')
@section('head')
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/chosen.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/chosen.min.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('scripts')
    <script src="{{ asset('assets/js/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('assets/js/ckeditor/adapters/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/chosen.jquery.js') }}"></script>
    <script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jss/new-manager.js') }}"></script>
@endsection
@section('main')
    <br>
    <br>
    <div class="col-sm-5 col-sm-offset-5 content-home">
        <div class="form-group" >
            <form action="{{url('/panel/new-manager')}}" method="post">
                <input type="text" name="name" class="form-control ltr text-right"  title="نام" placeholder="نام"><br>
                <input type="email" name="email" class="form-control ltr text-right"  title="ایمیل" placeholder="ایمیل"><br>
                <div class="input-group">
                    <input type="password" id="password" name="password" class="form-control ltr text-right" title="گذر واژه" placeholder="گذرواژه">
                <span class="input-group-addon hover">
                    <span class="glyphicon glyphicon-eye-open"></span>
                </span>
                </div>
                <input hidden name="_token" value="{{csrf_token()}}">
                <select  id="privileges" name="privileges[]" data-placeholder="انتخاب دسترسی ها" class="chosen  chosen-rtl" multiple="true" style="width: 290px">
                    @forelse(Auth::User()->Privilege()->get() as $p)
                        <option style="direction: ltr"  value="{{$p->id}}">{{$p->name}}</option>
                    @empty
                    @endforelse
                </select><br><br>
                <input type="submit" class="btn btn-wide btn-big btn-bg" value="ثبت مدیر جدید">
            </form>
            <div class="height-15"></div>
        </div>
    </div>

@endsection