$(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.submit').click(function (){
        var name = $('#name').val();
        $.post('new-cat', {name:name}, function ($result, $status) {
            if($result ==1)
            {
                $(".submit").after(" دسته ثبت شد");
                $('#name').val("");
            }
            else
            {
                $("#posted").text("خطا در اتصال به دیتا بیس,صفحه را لود کنید و دوباره امتحان کنید");

            }
        });
    })
});
