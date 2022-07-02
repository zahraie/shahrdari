$(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.sale').click(function (){
        var a = $('.address').val();
        $.post('address', {a:a}, function ($result, $status) {
            if($result ==1)
            {
                $('.sale').after("آدرس تایید شد");
            }
        });
    });
});
