@extends('master')
@section('title', '??? ????')
@section('description', '??????? ????????,???? ?????')
@section('keywords', '??????? ????????,???? ?????')
@section('main')
    <div class="content-home" >
        <h1 class="head">???????</h1>
        <div class="container-fluid">
            @forelse($Product as $product)
                <div class="col-sm-5  product-box">
                    <h2 class="title">{{$product->title}}</h2>
                    <span class="desc">{{$product->description}}</span>...<br><br>
                    <span>???? : </span><span class="desc">{{$product->price}}</span><br><br>
                    <span>??? ???? : </span><a href="{{url('/subcat/'.$product->subcat->id)}}">{{$product->subcat->name}}</a><br><br>
                    <a href="{{url('/product/'.$product->id)}}" class="btn btn-info"><span class="glyphicon glyphicon-link"></span>?????? ????</a>
                    <a class="btn btn-danger"><img src="{{asset('assets/img/shop-basket.png')}}">?????? ?? ??? ????</a>
                </div>
                <div class="col-sm-1"></div>
            @empty
            @endforelse
        </div>
    </div>
@endsection
@section('sidebar')
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