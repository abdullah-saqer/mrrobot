$(document).ready(function (event) {
    $(".scroll_to_top").click(function () {
        $("html,body").animate({scrollTop: 0}, 'normal');
    });

    /*if(!$.cookie('compareItems')){
     createCookie('compareItems','',1);
     }*/
    $(window).scroll(function () {
        if (document.body.scrollTop == 0) {
            $(".scroll_to_top").fadeOut();
        } else {
            $(".scroll_to_top").fadeIn();
        }
    });
    $('#addToCompare*').click(function (e) {
        var data = $(this).attr('data-button');
        list = new cookieList("compareItems");
        if (typeof data == 'undefined')
            data = $('#product_id').val();
        if (list.indexOf(data) == -1) {
            list.add(data);
            SuccessMessage('Added To  ' + '<a href=/mrrobot/product-compare.php>Compare List</a>');
        }
        else
            alert('items already exiest in compare list');


    });



    $('#addToWishlist*').click(function (e) {

        var data = $(this).attr('data-button');
        var userId = getCookie('platinumMallCookie');
        if (data && userId)
            $.ajax({
                url: 'functions/responder.php',
                type: 'POST',
                data: 'addToWishList=1&userId=' + userId + '&itemId=' + data,
                success: function (result) {
                    if (result == "Added")
                        SuccessMessage('Added To  ' + '<a href=/mrrobot/profile.php?id=wishlist>Wish List</a>');
                }
            });

    });

    $('#addToCart*').click(function (e) {
        var data = $(this).attr('data-button');
        var userId = getCookie('platinumMallCookie');
        if (data && userId)
            $.ajax({
                url: 'functions/responder.php',
                type: 'POST',
                data: 'addToCart=1&userId=' + userId + '&itemId=' + data,
                success: function (result) {
                    console.log(result);
                    if (result == "This item has been added to your cart")
                        SuccessMessage('Added To  ' + '<a href=cart.php>Cart</a>');
                }
            });


    });
});

var cookieList = function (cookieName) {
//When the cookie is saved the items will be a comma seperated string
//So we will split the cookie by comma to get the original array
    var cookie = $.cookie(cookieName);
//Load the items or a new array if null.
    var items = cookie ? cookie.split(/,/) : new Array();

//Return a object that we can use to access the array.
//while hiding direct access to the declared items array
//this is called closures see http://www.jibbering.com/faq/faq_notes/closures.html
    return {
        "add": function (val) {
            //Add to the items.
            if (items.indexOf(val) == -1) {
                items.push(val);
            }
            else
                return false;
            //Save the items to a cookie.
            //EDIT: Modified from linked answer by Nick see
            //      http://stackoverflow.com/questions/3387251/how-to-store-array-in-jquery-cookie
            $.cookie(cookieName, items.join(','));
        },
        "remove": function (val) {
            //EDIT: Thx to Assef and luke for remove.
            indx = items.indexOf(val);
            if (indx != -1) items.splice(indx, 1);
            $.cookie(cookieName, items.join(','));
        },
        "clear": function () {
            items = null;
            //clear the cookie.
            $.cookie(cookieName, null);
        },
        "items": function () {
            //Get all the items.
            return items;
        },
        "indexOf": function (val) {

            return items.indexOf(val);
        }

    }
}
/*get array items in compare page
 var list = new cookieList("MyItems");
 */
function createCookie(name, value, days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        var expires = "; expires=" + date.toGMTString();
    }
    else var expires = "";
    document.cookie = name + "=" + value + expires + "; path=/";
}
function SuccessMessage(message) {
    $('#page-content').before('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + message + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
    $('html, body').animate({scrollTop: 0}, 'slow');
}
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