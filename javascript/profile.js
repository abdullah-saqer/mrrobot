$( document ).ready(function(event) {
    var x =getCookie('platinumMallCookie');

var tabid = getUrlVars()["id"];
if(typeof tabid == "undefined")
{
    /*$("#defaultOpen").click();*/
    $('#information').css('display','block');
}
else{
    $('#'+tabid).css('display','block');
    getContent('information');
    getContent(tabid);

}
//////////////

    

 $(document).on('click', 'tr .btn', function () { 
    var flag=confirm("Are you sure ?");
    if(!flag)
        return false ;
     deleteFromWishlist(this.id);
     
     $(this).closest('tr').remove();
     
     return false;
 });

 //vaildate Email address & check if already used
   $("input[type=email]").change( function(){
    if(!validate(this)){
        displayErrorMessage("Please Enter Valid Email address"); 
    }
    else{
        $.ajax({
        url:'functions/responder.php',
        type:'POST',
        data:'checkEmail=2&email='+$("#input-email").val(),
        success:function(result){
        result=JSON.parse(result);
        
        if(result.length){
            displayErrorMessage("Email already used");
        }
        error=0;
        }
    });
    }
    

});

   // validate phone number 
   $("input[type=tel]").change( function(){

    if(!validate(this)){
        displayErrorMessage("Please Enter Valid phone number");
    }
    else
        error=0;
     });

   //check password if match and length >= 8
    $("#input-new-password").change( function(){
    
    if($(this).val().length<8){
        displayErrorMessage("Very weak password");
        $("#input-confirm").prop('disabled', true);
        
    }
    else
        $("#input-confirm").prop('disabled', false);
        
     

     });
      $("#input-confirm").change( function(){
    
    if($(this).val() != $("#input-new-password").val()){
        displayErrorMessage("Password does not match");
        $("#change-password").prop("disabled",true);

    }
    else
       $("#change-password").prop("disabled",false);
   
     });
            $('.mandatory').change(function() {
  var empty_flds = 0;
  $(".mandatory").each(function() {
    if(!$.trim($(this).val())) {
        empty_flds++;
    }    
  });

  if (empty_flds) {
    flag1=0;
  
     
   
  } else {
    flag1=1;
    
     
    
  }
});

$("#change-personal").click(function(){
    var id=getCookie('platinumMallCookie');
    var firstName=$("#input-firstname").val();
    var lastName=$("#input-lastname").val();
    var telephone=$("#input-telephone").val();
    var email=$("#input-email").val();
     $.ajax({
        url:'functions/responder.php',
        type:'POST',
        data:'ChangePersonal=1&userId='+id+'&firstName='+firstName+'&lastName='+lastName+'&telephone='+telephone+"&email="+email,
        success:function(result){
            alert(result);
               

        }
    });

});

$("#change-address").click(function(){
    var id=getCookie('platinumMallCookie');
    var address1=$("#input-address-1").val();
    var address2=$("#input-address-2").val();
    var city=$("#input-city").val();
    $.ajax({
        url:'functions/responder.php',
        type:'POST',
        data:'ChangeAddress=1&userId='+id+'&address1='+address1+'&address2='+address2+'&city='+city,
        success:function(result){
            alert(result);
               

        }
    });


});
$("#change-password").click(function(){
    var old_password=$('#input-old-password').val();
    var new_password=$('#input-confirm').val();
    var id=getCookie('platinumMallCookie');
     $.ajax({
        url:'functions/responder.php',
        type:'POST',
        data:'ChangePassword=1&userId='+id+'&old_password='+old_password+'&new_password='+new_password,
        success:function(result){
            alert(result);
               

        }
    });

    



});


 ///end of document ready

  });





function openTab(evt, tabName) {
    // Declare all variables
    var i, tabcontent, tablinks;
   getContent(tabName);
    

    
    

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
    document.getElementById("current-tab").innerHTML = tabName;
}
/////////////////

function getUrlVars() {
var vars = {};
var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) { vars[key] = value;});
return vars;
}
////////////
function getContent(name){
    var x =getCookie('platinumMallCookie');
switch(name){
    case 'information':getInformations(x);
    break;
    case 'wishlist': getWishlist(x);
    break;
    case 'setting': getSetting(x);
    break;
    case 'orders':getOdersTable(x);
    break;
    case 'history':getOdersHistoryTable(x);
    break;
    default:getInformations(x);



}
}
//get information tab data
function getInformations(userId){
    
    $.ajax({
        url:'functions/responder.php',
        type:'POST',
        data:'getUserById=1&userId='+userId,
        success:function(result){
            result=JSON.parse(result);
        $("#fname").html(result.firstName);
        $("#lname").html(result.lastName);
        $("#email").html(result.email);
        $("#tel").html(result.cellPhone);
        $("#add1").html(result.address1);
        $("#add2").html(result.address2);
        $("#city").html(result.city);


      
       
            }
        });
}
/////////// get wish list table
function getWishlist(userId){


    $.ajax({
        url:'functions/responder.php',
        type:'POST',
        data:'getUserWishList=1&userId='+userId,
        success:function(result){
            result=JSON.parse(result);
            if(result.length>0){

            var id;
            var wlId;            
            var name;
            var price;
            var discount;
            var quantity;
            var trHTML="<tbody>";
            $('#wishlist-table tbody').remove();
            for (var i = 0; i <result.length; i++) {
              wlId=result[i].id;  
              id=result[i].item.id;
              name=result[i].item.name;
              price=result[i].item.price;
              discount=getDiscount(result[i].item.discount);

              quantity=(result[i].item.quantity)?"":"out-of-stock";
              trHTML += '<tr class="'+discount+' '+quantity+'"><td>' +id+ '</td><td>' + name+ '</td><td>' +price+ '</td><td id="action-btn"><button type="button" id="'+wlId+'" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></tr>';
            
        
                    }
                  trHTML+="</tbody>";  
                     $('#wishlist-table').append(trHTML);
                }
                  else{
                $("#wishlist-content").empty();
                $("#wishlist-content").append("<h4>No Items in Wishlist</h4");
            }
            }


                });
}
////////////
function getSetting(id){
    $("#input-firstname").val($('#fname').text());
    $("#input-lastname").val($('#lname').text());
    $("#input-email").val($('#email').text());
    $("#input-telephone").val($('#tel').text());
    $("#input-address-1").val($('#add1').text());
    $("#input-address-2").val($('#add2').text());
    
    $('#input-city>option[value="' +$('#city').text()+ '"]').prop('selected', true);


}

/////////
function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
//////////
function getDiscount(discount){
    if(discount>0)
        return "discount";
    else
        return "";

}
/////////////////
function deleteFromWishlist(id){

    $.ajax({
        url:'functions/responder.php',
        type:'POST',
        data:'deleteFromWishlist=1&wishListId='+id,
        success:function(result){
        alert(result);

      
       
            }
        });

}
/////////////////////// Setting Validate and Change


      $('.mandatory').change(function() {
  var empty_flds = 0;
  $(".mandatory").each(function() {
    if(!$.trim($(this).val())) {
        empty_flds++;
    }    
  });

  if (empty_flds) {
    flag1=0;
  
     
   
  } else {
    flag1=1;
    
     
    
  }
});

function validateEmail(email) {
  var re = /\S+@\S+\.\S+/;
  return re.test(email);
}
function validateTel(number) {
  var no = /07\d{1}-\d{7}/;
  return no.test(number);
}


function validate(e) {
    var input=e.getAttribute("type")
   if(input=='email')
   return validateEmail($("#input-email").val());
   else if(input=='tel')
    return validateTel($("#input-telephone").val());

}
function displayErrorMessage(message) {
         error=1;
        $('#message_area').css("display","none");
        $("#message").html(message);
        $(".message_area").show().delay(4000).queue(function (next) {
        $(this).fadeOut("slow");
        next();
        });
}
      
 function getOdersTable(userId){


    $.ajax({
        url:'functions/responder.php',
        type:'POST',
        data:'getOrdersByUserId=1&userId='+userId,
        success:function(result){
            result=JSON.parse(result);
            //console.log(result[0].orderItems);
            if(result.length>0){
            var trHTML="<tbody>";
           $('#orders-table tbody').remove();
           var count=0;
            for (var i = 0; i <result.length; i++) {

               if(result[i].status!=4){
                count=1;
              var id=result[i].id;
              var status=getOrderStatus(result[i].status);
              var total=result[i].total;
              trHTML += '<tr class="header expand"><td class="text-center">' +id+ '</td><td class="text-center">' + status+ '</td><td class="text-center">' +total+ '<span class="sign plus"></td></tr>';
              trHTML+='<!--orderditems-->'
              trHTML+=getOrderItems(result[i].orderItems);


                    }
                    
                  }
                    trHTML+="</tbody>";
                     $('#orders-table').append(trHTML).on('click', '.sign', function () {
                      
                       $header = $(this).closest('tr');
                       $sign  =$(this);
                       if($sign.hasClass('plus')){
                        $sign.removeClass('plus');
                        $sign.addClass('minus');
                        }else{
                          $sign.removeClass('minus');
                        $sign.addClass('plus');
                        }
                        $table_content = $header.next();
                        $table_content.slideToggle(10, function () {0});

                        });
                }
                  if(!count){
                $("#order-details").empty();
                $("#order-details").append("<h4>No Order Placed</h4");
            }
            }
            

                });
}
function getOrderStatus(stat){
  if(stat==1)
    return "Received";
  if(stat==2)
    return "Proccesed";
  if(stat==3)
    return "On delivery";
}


function getOrderItems(orderItems){
 
    
    var orderItemsTable='<tr class="table_content" ><td colspan="3" id="itemstable"><table class="table table-bordered" id="inner-table" ><tr><th>Item ID</th><th>Name</th><th>Quantity</th><th>Price</th></tr>';

   for (var i = 0; i <orderItems.length; i++) {
    var id=orderItems[i].id;
    var quantity=orderItems[i].quantity;
    var price=(orderItems[i].price-(orderItems[i].price * orderItems[i].discount));
    var items;
    var itemId;
    var name;
    var brand;
    $.ajaxSetup({async:false});
    $.ajax({   
        url:'functions/responder.php',
        type:'POST',
        data:'getOrdersItemsById=1&id='+id,
        success:function(result){
            result=JSON.parse(result);
            items=result.item;
            itemId=items.id;
            name=items.name;
            }
      });
              
            
             orderItemsTable+='<tr><td >'+itemId+'</td><td >'+name+'</td><td>'+quantity+'</td><td>'+price+'</td></tr>';
  }
            orderItemsTable+='</table></td></tr>';
            return orderItemsTable;


}
function getOdersHistoryTable(userId){


    $.ajax({
        url:'functions/responder.php',
        type:'POST',
        data:'getOrdersByUserId=1&userId='+userId,
        success:function(result){
            result=JSON.parse(result);
            //console.log(result[0].orderItems);
            if(result.length>0){
            var trHTML="<tbody>";
           $('#history-table tbody').remove();
            for (var i = 0; i <result.length; i++) {
               if(result[i].status==4){
              var id=result[i].id;
              var status="Date"
              var total=result[i].total;
              trHTML += '<tr class="header expand"><td class="text-center">' +id+ '</td><td class="text-center">' + status+ '</td><td class="text-center">' +total+ '<span class="sign plus"></td></tr>';
              trHTML+='<!--orderditems-->'
              trHTML+=getOrderItems(result[i].orderItems);


                    }
                    
                  }
                    trHTML+="</tbody>";
                     $('#history-table').append(trHTML).on('click', '.sign', function () {
                      
                       $header = $(this).closest('tr');
                       $sign  =$(this);
                       if($sign.hasClass('plus')){
                        $sign.removeClass('plus');
                        $sign.addClass('minus');
                        }else{
                          $sign.removeClass('minus');
                        $sign.addClass('plus');
                        }
                        $table_content = $header.next();
                        $table_content.slideToggle(10, function () {0});

                        });
                }
                  else{
                $("#history-details").empty();
                $("#history-details").append("<h4>No Order Was delivered</h4");
            }
            }
            

                });
}