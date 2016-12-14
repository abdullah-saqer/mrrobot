$(document).ready(function() {
var userId=getCookie('platinumMallCookie');
getCartContent(userId);
});
function getCartContent(userId){
	var userId=getCookie('platinumMallCookie');

    $.ajax({
        url:'functions/responder.php',
        type:'POST',
        data:'getCartContent=1&userId='+userId,
        success:function(result){
            result=JSON.parse(result);
            if(result.length>0){
            
            var trHTML="<tbody>";
            $('#cart-table tbody').remove();
            var subTotal=0;
            for (var i = 0; i <result.length; i++) {
              cartId=result[i].id;
              id=result[i].item.id
              discount=result[i].item.discount;
              name=result[i].item.name;
              price=result[i].item.price;
              price=(price-(price*discount));
              quantity=result[i].quantity;
              total=price*quantity;
              subTotal+=total;
              trHTML +='<tr><td class="text-left">'+name+'</td>';
              trHTML+='<td class="text-left">'+discount*100+' %</td>';
              trHTML+='<td class="text-left">'+quantity+'</td>';
              trHTML+='<td class="text-right">'+price+" JOD"+'</td><td class="text-right" id="itemtotal">'+total+" JOD"+'</td></tr>';
        		
                    }
                  trHTML+="</tbody>";  
                     $('#cart-table').append(trHTML);
                	 $('#Sub-Total').text(subTotal );
                	 $('#Shipping').text('0 JOD');
                	 $('#total').text(subTotal);
                }
                  else{
                $("#wishlist-content").empty();
                $("#wishlist-content").append("<h4>No Items in The Cart</h4");
                $('#check-out').attr('disabled',true);
            }
            }


                });
}
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