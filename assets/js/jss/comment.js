$(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.submit-comment').click(function(){
        var id = $(this).attr('data');
        $.post('comment/submit', {id:id}, function ($result, $status) {
            if($result ==1)
            {
                $("#"+id).after("دیدگاه تایید شد و در ذیل مطلب نمایش داده می شود");
                $("#"+id).css('display','none');
            }
        });
    });
    $('.delete-comment').click(function(){
        var id = $(this).attr('data');
        $.post('comment/delete', {id:id}, function ($result, $status) {
            if($result ==1)
            {
                $("#"+id).after("دیدگاه حذف شد و در ذیل مطلب نمایش داده نمی شود ");
                $("#"+id).css('display','none');
            }
        });
    });
});
