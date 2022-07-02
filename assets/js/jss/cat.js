$(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.delete-cat').click(function(){
        var id = $(this).attr('data');
        $.post('cat/delete', {id:id}, function ($result, $status) {
            if($result ==1)
            {
                $("#"+id).after("دسته حذف شد.");
                $("#"+id).css('display','none');
            }
        });
    });
});
