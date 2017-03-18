/**
 * Created by MontaserQasem on 2/19/17.
 */
jQuery(document).ready(function ($) {
    var userId = getCookie('platinumMallCookie');
    // getCartContent(userId);
});

function getCartContent(userId) {
    var userId = getCookie('platinumMallCookie');
    $.ajax({
        url: 'functions/responder.php',
        type: 'POST',
        data: 'getCartContent=1&userId=' + userId,
        success: function (result) {
            result = JSON.parse(result);

            if (result.length > 0) {

                var trHTML = "<tbody>";
                $('#cart-table tbody').remove();
                var subTotal = 0;
                for (var i = 0; i < result.length; i++) {
                    cartId = result[i].id;
                    id = result[i].item.id
                    discount = result[i].item.discount;
                    name = result[i].item.name;
                    price = result[i].item.price;
                    price = (price - (price * discount));
                    quantity = result[i].quantity;
                    total = price * quantity;
                    subTotal += total;
                    trHTML += '<tr><td class="text-left">' + name + '</td>';
                    trHTML += '<td class="text-left">' + discount * 100 + ' %</td>';
                    trHTML += '<td class="text-left"><div class="input-group btn-block" style="max-width: 200px;">';
                    trHTML += '<input type="text" id="quantity" value=' + quantity + '  class="form-control">';
                    trHTML += '<span class="input-group-btn">';
                    trHTML += '<button   class="btn btn-primary" data=' + cartId + '><i class="fa fa-refresh"></i></button>';
                    trHTML += '<button type="button" class="btn btn-danger" data=' + total + ' id=' + cartId + '><i class="fa fa-times-circle"></i></button>';
                    trHTML += '</span></div></td>';
                    trHTML += '<td class="text-right">' + price + " JOD" + '</td><td class="text-right" id="itemtotal">' + total + " JOD" + '</td></tr>';
                }
                trHTML += "</tbody>";
                $('#cart-table').append(trHTML);
                $('#Sub-Total').text(subTotal);
                $('#Shipping').text('0 JOD');
                $('#total').text(subTotal);
            }
            else {
                $("#wishlist-content").empty();
                $("#wishlist-content").append("<h4>No Items in The Cart</h4");
                $('#check-out').attr('disabled', true);
            }
        }


    });
}
$(document).on('click', 'tr .btn-danger', function () {
    var flag = confirm("Are you sure you want to remove this item from your cart ?");

    if (!flag)
        return false;
    deleteFromCart(this.id);
    var sub = $(this).attr('data');
    $('#Sub-Total').text($('#Sub-Total').text() - sub);
    $('#total').text($('#Sub-Total').text());
    $(this).closest('tr').remove();
    return false;
});

$(document).on('click', 'tr .btn-primary', function () {

    var index = $("tr .btn-primary*").index(this);
    var quantity = $("#quantity*:eq(" + index + ")").val();
    if (quantity <= 0) {
        alert("Quantity cannot be less than  or equal to 0");
        return;
    }

    var cartId = $(this).attr('data');
    changeQuantity(cartId, quantity);
});
function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
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
function deleteFromCart(id) {

    $.ajax({
        url: 'functions/responder.php',
        type: 'POST',
        data: 'deleteFromCart=1&cartId=' + id,
        success: function (result) {
            SuccessMessage(result);


        }
    });

}
function changeQuantity(cartId, quantity) {
    $.ajax({
        url: 'functions/responder.php',
        type: 'POST',
        data: 'UpdateCartQuntity=1&cartId=' + cartId + '&quantity=' + quantity,
        success: function (result) {
            SuccessMessage(result);
        }
    });

}
function SuccessMessage(message) {
    $('#content').before('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + message + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');


    $('html, body').animate({scrollTop: 0}, 'slow');
}