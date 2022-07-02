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
@section('title', 'مدیریت دیدگاه ها')
@section('main')
    <div class="container site-content">
        <div class="col-md-12">
            <div class="container-fluid" style="border-top: 1px solid #fff; border-bottom: 1px solid #fff; background-color:#f6f9fa;;">
                <div style="direction: rtl;text-align: justify" class="">
                    <br><br>
                    <h4 class="title"> تاریخچه ی مختصر شهرداری</h4><br>
                    <div class="content-home" style=" font-size: medium">
                        بررسي فرآيند شكل گيري و رشد اين منطقه گوياي اين موضوع است كه تا سال 1370 اين منطقه محدوده اي روستايي بوده كه با شبكه اي از راه هاي روستايي منتهي به جاده عشاق و بابارود در بستري طبيعي و كشاورزي استقرار داشته است. در بين سال هاي 1370 تاکنون به صورت توسعه كالبدي شهر ازندریان فرآيند پيوند و جذب اين منطقه از طريق کارخانه های سلیس آغاز گشته و به تدريج به ساير نقاط آن گسترش مي يابد. اين روند در سال هاي 1380 و 1386 از شدت بيشتري برخوردار گشته به نحوي كه اين دوره زماني را مي توان به دوران تكميل جذب در ازندریان و استحاله بافت هاي روستايي، توسعه شتابان جمعيت و رشد مراكز سكونت گاهي منطقه نام نهاد. از سال 1386 تا به امروز را نيز مي توان به دوران ثبات قانوني، پيوستگي بافت هاي پراكنده، تامين كاربري خدمات شهري و احداث تجهيزات و تاسيسات شهري منطقه ناميد.
                    </div><br><br>
            </div>
        </div>
    </div>
@endsection