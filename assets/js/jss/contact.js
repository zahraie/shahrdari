$(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".chosen").chosen();
    $('#submit').click(function (){
        var title = $('#title').val();
        var content = $('#content').val();
        var subcat = $("#subcat").val();
        $.post('contact/posted', {title: title, content: content,subcat : subcat}, function ($result, $status) {
            if($result ==1)
            {
                $("#posted").text("دیدگاه شما ثبت شد");
                $('#title').val("");
                $('#content').val("");
            }
            else
            {
                $("#posted").text("خطا در اتصال به دیتا بیس,صفحه را لود کنید و دوباره امتحان کنید");

            }
        });
    })
});
