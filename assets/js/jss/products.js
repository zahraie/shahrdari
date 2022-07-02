$(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.delete-product').click(function(){
        var id = $(this).attr('data');
        $.post('product/delete', {id:id}, function ($result, $status) {
            if($result ==1)
            {
                $("#"+id).after("محصول حذف شد.");
                $("#"+id).css('display','none');
            }
        });
    });
});
