$(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.send-comment').click(function (){
        var comment = $('.comment').val();
        var id = $('.send-comment').attr('data');
        $.post('new-comment', {comment:comment , id:id}, function ($result, $status) {
            if($result ==1)
            {
                $(".send-comment").after("دیدگاه شما ثبت شد  و پس از تایید مدیران نمایش داده می شود.");
                $('.comment').val("");
            }
            else
            {
                $("#posted").text("خطا در اتصال به دیتا بیس,صفحه را لود کنید و دوباره امتحان کنید");

            }
        });
    });
    $('.add-to-basket').click(function(){
        var id =$(this).attr('data');
        $.post('add-basket', {id:id}, function ($result, $status) {
            if($result ==1)
            {
                $('.add-to-basket').after('به سبد خرید اضافه شد');
                $('.add-to-basket').hide();
                var n = $('.num').text();
                var v = parseInt(n);
                v++;
                $('.count').hide();
                $('.img-count').after(v);
            }
            else
            {
                $("#posted").text("خطا در اتصال به دیتا بیس,صفحه را لود کنید و دوباره امتحان کنید");

            }
        });
    });

});
