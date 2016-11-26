 $(document).ready(function() {
  $('.thumbnails').magnificPopup({
    delegate: 'a',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    },
    image: {
      tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
      titleSrc: function(item) {
        return item.el.attr('title') + '<small>by MrRobot</small>';
      }
    }
  });
/*Quantity +/- input*/
$(".btn-number[data-type='minus']").attr('disabled',true);
$('.btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    
    
});
$(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
/*open modal*/
$(function () {
  $('.popup-modal').magnificPopup({
    type: 'inline',
    preloader: false,
    focus: '#username',
    modal: true
  });
  $(document).on('click', '.popup-modal-dismiss', function (e) {
    e.preventDefault();
    $.magnificPopup.close();
  });
});
/*360 view*/

 var imgs = [
 "360photo//Iphone7//Apple-iPhone-7-360-0.jpg",
 "360photo//Iphone7//Apple-iPhone-7-360-35.jpg",
"360photo//Iphone7//Apple-iPhone-7-360-34.jpg", 
"360photo//Iphone7//Apple-iPhone-7-360-33.jpg",
"360photo//Iphone7//Apple-iPhone-7-360-32.jpg",
 "360photo//Iphone7//Apple-iPhone-7-360-31.jpg",
 "360photo//Iphone7//Apple-iPhone-7-360-30.jpg",
 "360photo//Iphone7//Apple-iPhone-7-360-29.jpg",
 "360photo//Iphone7//Apple-iPhone-7-360-28.jpg",
 "360photo//Iphone7//Apple-iPhone-7-360-27.jpg",
 "360photo//Iphone7//Apple-iPhone-7-360-26.jpg",
 "360photo//Iphone7//Apple-iPhone-7-360-25.jpg",
 "360photo//Iphone7//Apple-iPhone-7-360-24.jpg",
 "360photo//Iphone7//Apple-iPhone-7-360-23.jpg",
 "360photo//Iphone7//Apple-iPhone-7-360-22.jpg",
 "360photo//Iphone7//Apple-iPhone-7-360-21.jpg",
 "360photo//Iphone7//Apple-iPhone-7-360-20.jpg",
 "360photo//Iphone7//Apple-iPhone-7-360-19.jpg",
 "360photo//Iphone7//Apple-iPhone-7-360-18.jpg",
 "360photo//Iphone7//Apple-iPhone-7-360-17.jpg",
 "360photo//Iphone7//Apple-iPhone-7-360-16.jpg", 
 "360photo//Iphone7//Apple-iPhone-7-360-15.jpg",
 "360photo//Iphone7//Apple-iPhone-7-360-14.jpg",
 "360photo//Iphone7//Apple-iPhone-7-360-13.jpg",
 "360photo//Iphone7//Apple-iPhone-7-360-12.jpg",
 "360photo//Iphone7//Apple-iPhone-7-360-11.jpg",
 "360photo//Iphone7//Apple-iPhone-7-360-10.jpg",
 "360photo//Iphone7//Apple-iPhone-7-360-9.jpg", 
 "360photo//Iphone7//Apple-iPhone-7-360-8.jpg",
 "360photo//Iphone7//Apple-iPhone-7-360-7.jpg",
"360photo//Iphone7//Apple-iPhone-7-360-6.jpg",
"360photo//Iphone7//Apple-iPhone-7-360-5.jpg",  
 "360photo//Iphone7//Apple-iPhone-7-360-4.jpg",
"360photo//Iphone7//Apple-iPhone-7-360-3.jpg",
"360photo//Iphone7//Apple-iPhone-7-360-2.jpg",
"360photo//Iphone7//Apple-iPhone-7-360-1.jpg"];

   


 var index=0;
 function changeImage(dir) {
      index+=dir;
      if(index>=imgs.length )
        index=0;
      if(index<0)
        index=imgs.length-1;
      var img = document.getElementById("imgClickAndChange");
      img.src=imgs[index];
    //  $('#slideshow').css({background : 'url('+imgs[index]+')  no-repeat'});
    
  }

    document.onkeydown = function(e) {
        e = e || window.event;
        if (e.keyCode == '37') {
            changeImage(1) //left <- show Prev image
        } else if (e.keyCode == '39') {
            // right -> show next image
            changeImage(-1)
        }
    }
   
/*360 view*/



});