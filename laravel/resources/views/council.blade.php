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
                    <h4 class="title"> اداره ی حوزه شهردار و امور شورای اسلامی </h4><br>
                    <div class="content-home" style=" font-size: medium">

                        •	اجراي دقیق آئین‌نامه‌ها، دستور العمل‌ها، بخشنامه ها و ضوابط مربوطه .<br>
                        •	ابلاغ دستورات شهردار به اشخاص حقیقی و حقوقی و موسسات و دستگاه های ذیربط متقاضی و پیگیری آنها طبق دستور<br>
                        •	هماهنگی و نظارت بر امور مدیریت ها و مشاورین حوزه شهردار<br>
                        •	ثبت و بررسی کلیه لوایح و طرح ها و نامه های وارده به دبیرخانه شورای اسلامی شهر و ارائه گزارشات تحلیلی و تنظیم دستور جلسات، صورتجلسات و مصوبات کمیسیون ها وصحن شورا و ابلاغ و بایگانی مجوزات و مستندات مربوطه .<br>
                        •	بررسی و تاییدکلیه لوایح از ابعاد مختلف پیش از ارسال به شورای اسلامی شهر و پیگیری مصوبات وارده از شورای اسلامی شهر تاحصول نتیجه و ارائه گزارشات مربوطه<br>
                        •	رسیدگی و تطبیق مصوبات و دستورات کتبی مقامات مسئول مناطق، مدیریت ها، معاونت ها و سازمان های وابسته با سایر قوانین لازم الاجرا، آیین نامهدستورالعملها و بخشنامه های موضوعه.<br>
                        •	تنظیم برنامه های ملاقات مقامات داخلی و خارجی و همچنین راهنمایی مراجعین و ترتیب ملاقات آنها<br>
                        •	ابلاغ دستورات شهردار به اشخاص(حقیقی و حقوقی) و موسسات و دستگاههای ذیربط(متقاضی) و همچنین واحدهای سازمانی شهرداری و سازمانهای وابسته و تابعه شهرداری و پیگیری آنها طبق دستور<br>
                        •	تنظیم و ارایه پرونده ها و گزارشات و نشریات و مکاتباتی که شهردار باید ملاحظه و یا امضا نماید و اعاده آنها ابه مراجع ذیربط.<br>
                        •	یادداشت و یادآوری تاریخ تشکیل سمینارها، کنفرانسها، همایش ها و جلسات و آماده نمودن سوابق و پرونده های مربوط برای اطلاع و مطالعه قبلی شهردار<br>
                        •	ارائه گزارش مطالب ضروری و مهم روزانه به شهردار با هماهنگی حوزه های زیر مجموعه شهردار<br>
                        •	نظارت بر نحوه راهنمایی مراجعین و در صورت لزوم  و فرآهم آوردن وسایل و یا انجام درخواستهای متقاضیان و مراجعه کنندگان.<br>
                        •	برقراری ارتباط با وزارتخانه ها و موسسات و ارگانهای دولتی و سفارتخانه ها و نظایر آنها<br>
                        •	برنامه ریزی و راهبری جلسات شورای معاونت ها، مناطق و سازمان ها<br>
                        •	ایجاد هماهنگی بین معاونت ها، مناطق و سایر حوزه های شهرداری در جهت انجام وظایف و ماموریت ها .<br>
                        •	برگزاری جلسات دوره ای حوزه های صف )مناطق(و ستاد )معاونت ها(به منظور رفع مشکلات و ایجاد هماهنگی بیشتر.<br>
                        •	نظارت بر عملکرد کارکنان تحت سرپرستی، شناسایی نقاط ضعف و قوت مجموعه ها و برنامه ریزی جهت بهبود نقاط قوت و رفع نقاط ضعف<br>
                        •	بررسی و اعلام نظر در رابطه با پیشنهادهای مربوط به حوزه تحت سرپرستی و برنامه ریزی جهت اجرایی شدن هرچه سریعتر پیشنهادهای مورد تایید<br>
                        •	مشارکت با واحدهای ذیربط در جهت تهیه آمار و اطلاعات ، ارزیابی عملکرد، مستند سازی فرایندها  ، بهبود روشها و تعالی سازمانی، اصلاحات ساختاری، نیازسنجی و اجرای دوره های آموزشی، ارزشیابی کارکنان تحت سرپرستی و ممیزی سیستم، تعیین نیازهای پژوهشی ، استخراج، مستندسازی ، بروزرسانی و اشتراک گذاری اطلاعات منطبق با مدیریت دانش، برنامه ها و اقدامات انگیزشی در جهت افزایش تعلق سازمانی<br>
                        •	تنظیم و ارایه گزارش های لازم و گزارش های ادواری به مقام مافوق.<br>
                        •	انجام سایر امور محوله از سوی مقام مافوق در چارچوب وظایف<br>

                    </div><br><br>
                </div>
            </div>
        </div>
    </div>
@endsection