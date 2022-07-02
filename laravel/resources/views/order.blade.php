@extends('master')
@section('head')
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('scripts')
    <script src="{{ asset('assets/js/jss/order.js') }}"></script>
@endsection
@section('title', 'سفارشات')
@section('main')
    <div class="container site-content">
        <div class="col-md-12">
            <div class="container-fluid" style="border-top: 1px solid #fff; border-bottom: 1px solid #fff; background-color:#f6f9fa;;">
                <div style="direction: rtl;text-align: right" class="">
                    <br>
                    <h4 class="title">سفارشات</h4>
                    @forelse($Order as $order)
                        <div id="combody" class="effect2">
                            <span id="comboxtitle">{{$order->address}}</span><br><br>
                            <?php $ar = explode(',',$order->products);
                                foreach($ar as $a)
                                    {
                                        $product =\App\Models\Product::find($a);
                            ?>

                            <?php } ?>
                            <div id="{{$order->id}}">
                                @if($order->status == 0)
                                    <button data="{{$order->id}}"  class="btn btn-success submit-order">تایید پست محصول</button>
                                @endif
                            </div>
                        </div><!---end combody-->
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection