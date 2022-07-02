@extends('master')
@section('title', 'خانه')
@section('description', 'شهرداری ازندریان,سایت شهرداری')
@section('keywords', 'شهرداری ازندریان,سایت شهرداری')
@section('head')
    <link rel="stylesheet" href="{{ asset('assets/css/chosen.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/chosen.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/global.css') }}">

@endsection
@section('scripts')
    <script src="{{ asset('assets/js/chosen.jquery.js') }}"></script>
    <script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jss/home.js') }}"></script>
    <script src="{{ asset('assets/js/jss/product.js') }}"></script>
@endsection
@section('main')
    <br>
    <script type="text/javascript">
        $(".chosen").chosen();
    </script>
    <script>
        setInterval(function () {slider() },2000)
        var index=0;
        function slider(){
            var s = document.getElementById("slide").getElementsByTagName("img");
            ++index;
            if(index == s.length)
                index = 0;

            if (index == 0)
                s[s.length-1].style.display ="none";
            else
                s[index -1 ].style.display = "none";
            s[index].style.display ="inline";
        }
    </script>
<body>
    <div class="content-home" id="slide">
        <img src="assets/img/1.png" alt=" ">
        <img src="assets/img/2.png" alt=" ">
        <img src="assets/img/3.png" alt=" ">
        <img src="assets/img/4.png" alt=" ">
        <img src="assets/img/4.jpg" alt=" ">

    </div>
</body>
        <div class="content-home" >
            <h1 class="head"> خدمات </h1>
            <div class="container-fluid">
                <span>*** انبارداری </span>
                <select onchange="location = this.value ;"  id="subcat" name="subcat" data-placeholder="فیلتر قیمت" class="chosen chosen-rtl"  style="width:120px;direction: ltr">
                    <option  style=""  value="">همه محصولات</option>
                    <option value="{{url('/1')}}"> بدهکار</option>
                    <option value="{{url('/2')}}">بستانکار </option>
                </select>
                <span>**** پرداخت عوارض </span>
                <select onchange="location = this.value ;"  id="subcat" name="subcat" data-placeholder="فیلتر قیمت" class="chosen chosen-rtl"  style="width:120px;direction: ltr">
                    <option  style=""  value="">عوارض شامل</option>
                    <option value="{{url('/1')}}">خودرو </option>
                    <option value="{{url('/2')}}">خانه </option>
                    <option value="{{url('/3')}}">کشاورزی</option>
                </select>
                <span>***اطلاعات جغرافیایی</span>
                <select onchange="location = this.value ;"  id="subcat" name="subcat" data-placeholder="فیلتر قیمت" class="chosen chosen-rtl"  style="width:140px;direction: ltr">
                    <option  style=""  value="">زوایای جغرافیایی </option>
                    <option value="{{url('/1')}}"> منتهی به شمال</option>
                    <option value="{{url('/2')}}"> منتهی به جنوب </option>
                </select>
            </div>
        </div>
    <br>
@endsection
@section('sidebar')
    <hr>
    <div class="content-home" style="box-shadow:0 0 7px #333333 ;" >
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