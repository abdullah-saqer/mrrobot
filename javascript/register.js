$(document).ready(function(event){
    account();
    Security_Info();
    Contact_Info();
});


function account(){
	$('#account #text_field_bottom_bar_label input[type]*').focusin(function(){
             
         var field_index = $("#account #text_field_bottom_bar_label input[type]*").index(this);
         $('#account #text_field_bottom_bar_label #fill_bar').eq(field_index).animate({
            width:'600px',
            opacity:'1'
         },500);
         $('#personal_info_box').css({
            opacity:'1'
         });
         $('#account').css({
         	borderLeft:'4px solid rgb(0, 184, 230)',
         	boxShadow:'0px 0px 5px 2px lightgray'
         });
    }).focusout(function(){
         var field_index = $("#account #text_field_bottom_bar_label input[type]*").index(this);
         $('#account #text_field_bottom_bar_label #fill_bar').eq(field_index).animate({
            width:'0px',
            opacity:'0',
         },500);
         $('#account').css({
         	borderLeft:'4px solid white',
         	boxShadow:'0px 0px 0px 0px lightgray'
         });
         $('#personal_info_box').css({
            opacity:'0'
         });
    });
}
function Security_Info(){
	$('#security_info #text_field_bottom_bar_label input[type]*').focusin(function(){
             
         var field_index = $("#security_info #text_field_bottom_bar_label input[type]*").index(this);
         $('#security_info #text_field_bottom_bar_label #fill_bar').eq(field_index).animate({
            width:'600px',
            opacity:'1'
         },500);
         $('#security_info').css({
         	borderLeft:'4px solid rgb(0, 184, 230)',
         	boxShadow:'0px 0px 5px 2px lightgray'
         });
         $('#security_info_box').css({
            opacity:'1'
         });
    }).focusout(function(){
         var field_index = $("#security_info #text_field_bottom_bar_label input[type]*").index(this);
         $('#security_info #text_field_bottom_bar_label #fill_bar').eq(field_index).animate({
            width:'0px',
            opacity:'0',
         },500);
         $('#security_info').css({
         	borderLeft:'4px solid white',
         	boxShadow:'0px 0px 0px 0px lightgray'
         });
         $('#security_info_box').css({
            opacity:'0'
         });
    });
}
function Contact_Info(){
	$('#contact_info #text_field_bottom_bar_label input[type]*').focusin(function(){
             
         var field_index = $("#contact_info #text_field_bottom_bar_label input[type]*").index(this);
         $('#contact_info #text_field_bottom_bar_label #fill_bar').eq(field_index).animate({
            width:'600px',
            opacity:'1'
         },500);
         $('#contact_info').css({
         	borderLeft:'4px solid rgb(0, 184, 230)',
         	boxShadow:'0px 0px 5px 2px lightgray'
         });
         $('#contact_info_box').css({
            opacity:'1'
         });
    }).focusout(function(){
         var field_index = $("#contact_info #text_field_bottom_bar_label input[type]*").index(this);
         $('#contact_info #text_field_bottom_bar_label #fill_bar').eq(field_index).animate({
            width:'0px',
            opacity:'0',
         },500);
         $('#contact_info').css({
         	borderLeft:'4px solid white',
         	boxShadow:'0px 0px 0px 0px lightgray'
         });
         $('#contact_info_box').css({
            opacity:'0'
         });
    });
}