@extends('master')
@section('head')
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('scripts')
    <script src="{{ asset('assets/js/jss/subcat.js') }}"></script>
@endsection
@section('title', 'مدیریت زیر دسته ها ')
@section('main')
    <div class="container site-content">
        <div class="col-md-12">
            <div class="container-fluid" style="border-top: 1px solid #fff; border-bottom: 1px solid #fff; background-color:#f6f9fa;;">
                <div style="direction: rtl;text-align: right" class="">
                    <br>
                    <h4 class="title"> زیر دسته ها</h4>
                    @forelse($Subcat as $subcat)
                        <div id="combody" class="effect2">
                            <span id="comboxtitle">{{$subcat->name}}</span><br>
                            <span>دسته مادر : </span><span id="comboxtitle">{{$subcat->cat->name}}</span><br><br>
                            <div id="{{$subcat->id}}">
                                <button data="{{$subcat->id}}"  class="btn btn-danger delete-subcat">حذف </button>
                                <a href="{{url('/panel/subcat/'.$subcat->id)}}"  class="btn btn-info ">ویرایش </a>
                                <br><br>
                            </div>
                        </div><!---end combody-->
                    @empty
                    @endforelse
                </div>
                {{$Subcat->Links('vendor.pagination.custom')}}
            </div>
        </div>
    </div>
@endsection