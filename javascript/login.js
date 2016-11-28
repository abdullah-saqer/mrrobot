$( document ).ready(function(event) {
$("#input-password").on("keyup",function(){
    if($(this).val())
        $(".glyphicon-eye-open").show();
    else
        $(".glyphicon-eye-open").hide();
    });
$(".glyphicon-eye-open").bind('mousedown touchstart',function(){
                $("#input-password").attr('type','text');
            }).bind('mouseup touchend',function(){
            	$("#input-password").attr('type','password');
            }).mouseout(function(){
            	$("#input-password").attr('type','password');
            });
        });