@extends('master')
@section('title', 'دسته')
@section('description', 'شهرداری ازندریان,سایت شهرداری')
@section('keywords', 'شهرداری ازندریان,سایت شهرداری')
@section('main')
    <br>
    <br>
    <br>

    <div class="content-home" >
        <h1 class="head">خدمات شهرداری</h1>
        <div class="container-fluid">

        </div>
    </div>
@endsection
@section('sidebar')
    <br>
    <br>
    <br>
    <div class="content-home" >
        <div class="container-fluid">
            @forelse($Cat as $cat)
                <a href="{{url('/cat/'.$cat->id)}}" class="feed-item"><span class="glyphicon glyphicon-folder-close"></span>{{$cat->name}}</a><br>
                @forelse($cat->subcat as $sub)
                    <a href="{{url('/subcat/'.$sub->id)}}" style="padding-right: 20px"><span class="glyphicon glyphicon-folder-open"></span>{{$sub->name}}</a><br>
                @empty
                @endforelse
            @empty
            @endforelse
        </div>
    </div>
@endsection