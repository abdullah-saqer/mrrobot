$(document).ready(function(event){
$(".scroll_to_top").click(function(){
    $("html,body").animate({scrollTop:0},'normal');
});
$(window).scroll(function() {
    if(document.body.scrollTop == 0) {
        $(".scroll_to_top").fadeOut();
    } else {
        $(".scroll_to_top").fadeIn();
    }
});
});
