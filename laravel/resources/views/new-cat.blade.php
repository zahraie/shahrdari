@extends('master')
@section('title', 'دسته جدید')
@section('scripts')
    <script src="{{ asset('assets/js/jss/new-cat.js') }}"></script>
@endsection
@section('main')
    <br>
    <br>
    <div class="col-sm-5 col-sm-offset-5 content-home">
        <div class="form-group" >
            <input type="text" id="name" class="form-control ltr text-right"  title="نام دسته" placeholder="نام دسته"><br>
            <button class="submit btn btn-wide btn-success">افزودن</button>
            <div class="height-15"></div>
        </div>
    </div>

@endsection