$('.hover').mouseover(function(){
    $('#password').attr('type','text');
});
$('.hover').mouseleave(function(){
    $('#password').attr('type','password');
});
$(".chosen").chosen();
