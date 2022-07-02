$(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.submit').click(function (){
        var users = $('#users').val();
        var price = $('#price').val();
        var price2 = $('#price2').val();
        $.post('codes', {users: users,price : price , price2 : price2}, function ($result, $status) {
            if($result ==1)
            {
                $(".submit").after("کد های پرسونلی ارسال شد.");
                $('#users').val("");
                $('#price').val("");
                $('#price2').val("");
            }
            else
            {
                $(".submit").text("خطا در اتصال به دیتا بیس,صفحه را لود کنید و دوباره امتحان کنید");

            }
        });
    })
});
