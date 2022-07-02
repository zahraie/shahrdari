$(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".chosen").chosen();
    $('.submit').click(function (){
        var product = $('#product').val();
        var price = $("#price").val();
        $.post('new-dis', {product: product,price:price}, function ($result, $status) {
            if($result ==1)
            {
                $(".submit").after("تخفیفات محصولات ثبت شد");
                $('#product').val("");
                $('#price').val("");
            }
            else
            {
                $("#posted").text("خطا در اتصال به دیتا بیس,صفحه را لود کنید و دوباره امتحان کنید");

            }
        });
    });
    $('.delete').click(function (){
        var product = $('#product2').val();
        $.post('del-dis', {product : product}, function ($result, $status) {
            if($result ==1)
            {
                $(".delete").after("تخفیف محصول حذف شد.");
                $('#product2').val("");
            }
            else
            {
                $("#posted").text("خطا در اتصال به دیتا بیس,صفحه را لود کنید و دوباره امتحان کنید");

            }
        });
    })
});

