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
                    <h4 class="title"> اداره ی بازرسی </h4><br>
                    <div class="content-home" style=" font-size: medium">
                        •	اجرای دقیق آیین نامه ها، دستورالعمل ها، بخشنامه ها و ضوابط مربوطه<br>
                        •	 رسیدگی و بازدید از فعالیتهای حوزه های مختلف شهرداری، مناطق و سازمانهای وابسته و کنترل عملکردها و نارساییها<br>
                        •	نظارت بر رعایت قوانین، مقررات و دستورالعمل ها<br>
                        •	نظارت بر رسیدگی به شکایات واصله از افراد حقیقی و حقوقی و پیگیری در این زمینه جهت احقاق حق شاکی و صدور پاسخ کتبی به منظور اطلاع شاکی از نتیجه رسیدگی به شکایت.<br>
                        •	نظارت، رسیدگی و تحقیق درباره پرونده تخلفاتی که ضمن اجرای فعالیتهای فنی، شهری، اداری، مالی و نظایر آن از طرف کارکنان شهرداری و یا اشخاص دیگر صورت می گیرد و تعیین و تشخیص نوع تخلف و حدود مسئولیت آن و تهیه گزارش ضمن اظهار نظر صریح برای اتخاذ تصمیم از طرف مقامات ذیصلاح<br>
                        •	شرکت در جلسات و کمیسیونهای مختلف شهرداری وسازمانهای وابسته وهرنوع جلسه یاکمیسیونیکه بنا به تشخیص شهردارحضور نماینده بازرسی درآن ضروری باشد.<br>
                        •	انجام همکاری های لازم با گروه های بازرسی، نهادهای قانونی کشور از جمله دفتر بازرسی و رسیدگی به شکایات وزارت کشور،  سازمان بازرسی کل کشور و ... به منظور حسن انجام وظایف محوله و ایجاد هماهنگی لازم در این زمینه.<br>
                        •	آگاهی مستمر از برنامه ها، سیاست های خرد و کلان، بخشنامه ها، دستورالعمل ها، ضوابط و مقررات تدوین شده شهرداری و اطلاع از هرگونه تغییرات صورت گرفته.<br>
                        رسیدگی به شکایات حوزه های مختلف شهرداری از یکدیگر و پیگیری جهت حل موضوع و عندالزوم تهیه گزارش مربوطه جهت شهردار.<br>
                        •	نظارت بر عملکرد کارکنان تحت سرپرستی، شناسایی نقاط ضعف و قوت مجموعه ها و برنامه ریزی جهت بهبود نقاط قوت و رفع نقاط ضعف<br>
                        •	بررسی و اعلام نظر در رابطه با پیشنهادهای مربوط به حوزه تحت سرپرستی و برنامه ریزی جهت اجرایی شدن هرچه سریعتر پیشنهادهای مورد تایید<br>
                        •	مشارکت با واحدهای ذیربط در جهت تهیه آمار و اطلاعات ، ارزیابی عملکرد، مستند سازی فرایندها  ، بهبود روشها و تعالی سازمانی، اصلاحات ساختاری، نیازسنجی و اجرای دوره های آموزشی، ارزشیابی کارکنان تحت سرپرستی و ممیزی سیستم، تعیین نیازهای پژوهشی ، استخراج، مستندسازی ، بروزرسانی و اشتراک گذاری اطلاعات منطبق با مدیریت دانش، برنامه ها و اقدامات انگیزشی در جهت افزایش تعلق سازمانی<br>
                        •	تنظیم و ارایه گزارش های لازم و گزارش های ادواری به مقام مافوق.<br>
                        •	 انجام سایر امور محوله از سوی مقام مافوق در چارچوب وظایف<br>

                    </div><br><br>
                </div>
            </div>
        </div>
    </div>
@endsection