$(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.submit-order').click(function(){
        var id = $(this).attr('data');
        $.post('order/submit', {id:id}, function ($result, $status) {
            if($result ==1)
            {
                $("#"+id).after("سفارش تایید شد.");
                $("#"+id).css('display','none');
            }
        });
    });
});
