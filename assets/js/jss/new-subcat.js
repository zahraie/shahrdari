$(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".chosen").chosen();
    $('.submit').click(function (){
        var name = $('#name').val();
        var cat = $("#cat").val();
        $.post('new-subcat', {name: name,cat:cat}, function ($result, $status) {
            if($result ==1)
            {
                $(".submit").after(" زیر دسته ثبت شد");
                $('#name').val("");
                $('#cat').val("");
            }
            else
            {
                $("#posted").text("خطا در اتصال به دیتا بیس,صفحه را لود کنید و دوباره امتحان کنید");

            }
        });
    })
});
