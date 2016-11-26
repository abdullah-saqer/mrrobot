$( document ).ready(function(event) {
var tabid = getUrlVars()["id"];
if(typeof tabid == "undefined")
{
    /*$("#defaultOpen").click();*/
    $('#information').css('display','block');
}
else{
    $('#'+tabid).css('display','block');

}
$('.header').click(function(){
     $(this).toggleClass('expand').nextUntil('tr.header').slideToggle(100);
     });
});
function openTab(evt, tabName) {
    // Declare all variables
    var i, tabcontent, tablinks;
    

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

function getUrlVars() {
var vars = {};
var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
vars[key] = value;
});
return vars;
}






/*
$(document).ready(function() {

    function getChildren($row) {
        var children = [];
        while($row.next().hasClass('child')) {
             children.push($row.next());
             $row = $row.next();
        }            
        return children;
    }        

    $('.parent').on('click', function() {
    
        var children = getChildren($(this));
        $.each(children, function() {
            $(this).toggle();
        })
    });
    
});
*/