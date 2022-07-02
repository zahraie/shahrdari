@extends('master')

@section('title', 'تخفیف محصولات')

@section('head')
    <link rel="stylesheet" href="{{ asset('assets/css/chosen.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/chosen.min.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('scripts')
    <script src="{{ asset('assets/js/chosen.jquery.js') }}"></script>
    <script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jss/discount.js') }}"></script>
@endsection
@section('main')
    <div style="margin-top: 30px" class="col-sm-5 col-sm-offset-5 content-home">
        <br>
        <h6>افزودن تخفیف</h6>
        <select id="product" name="product" data-placeholder="محصولات دارای تخفیف" class="chosen chosen-rtl" multiple="true"  style="width:290px;direction: ltr">
            @forelse($Product as $product)
                <option style=""  value="{{$product->id}}">{{$product->title}}</option>
            @empty
            @endforelse
        </select><br><br>
        <br>
        <input type="text" id="price" class="form-control ltr text-right" size="40" placeholder="مقدار تخفیف به ریال">
        <br><button class="submit btn btn-wide btn-success">افزودن</button>
        <br><br>
        @forelse($Product as $product)
            <?php $pr = $product->Discount()->get();
            $sum = 0;
            foreach($pr as $p)
            {
                $sum+= $p->price;
            }
            echo $product->title.'<br>'.'مقدار تخفیف:'.$sum.'<br>';
            ?>
            @empty
        @endforelse
        <h6>برداشتن تخفیف</h6>
        <select id="product2" name="product2" data-placeholder="انتخاب محصولات تخفیف دار" class="chosen chosen-rtl" multiple="true"  style="width:290px;direction: ltr">
            @forelse($Product as $product)
                <option style=""  value="{{$product->id}}">{{$product->title}}</option>
            @empty
            @endforelse
        </select><br>
        <br>
        <br><button class="delete btn btn-wide btn-success">حذف تخفیف</button>
    </div>
@endsection