var storeId=1;
var cancelloading=0;
var flag=1;
$(document).ready(function() {
getCategories();
getBrands();

$.cookie('brands', '');
$.cookie('categories', '');
	/* $(".fa-times-circle-o").click(function() { 

   $(this).parent().remove();
});*/
    $('#list').click(function(event){event.preventDefault();
    	$('#products .item').addClass('list-group-item');
    	$('#grid').removeClass('active');
      $('#list').addClass('active');
      $('#products').addClass('list-view-fix');
      


    	});
    $('#grid').click(function(event){event.preventDefault();
    	$('#products .item').removeClass('list-group-item');
    	    	$('#list').removeClass('active');
            $('#grid').addClass('active');

      $('#products').removeClass('list-view-fix');
      });


		  $(window).on('resize', function(event){
    var windowWidth = $(window).width();
if(windowWidth < 777){
  $('#list').click();
}
else{
  $('graid').click();
}
});

         $(function() {
            $( "#slider*" ).slider({
               range:true,
               min: 0,
               max: 1000,
               values: [ 0, 1000 ],
               slide: function( event, ui ) {
                  $( "#price*" ).val( ui.values[ 0 ]+" JOD" + " - " + ui.values[ 1 ]+" JOD" );
               filterChanged();
               }
           });
         $( "#price*" ).val(  $( "#slider*" ).slider( "values", 0 )+" JOD" +
            " - " + $( "#slider*" ).slider( "values", 1 )+" JOD" );
         });
           
///add new filter
      $('#filters*').on('click', '.list-group-item', function(e) {
        var $this = $(this);
        var id=$(this).attr('data');
        var $alias = $this.data('alias');
        var filterType=$(this).parent().attr('id');
        if(appliedFilters($(this).attr('data'),$(this).parent().attr('id'),'add')==1){
        $('#applied-filters ul').append($('<li>').attr({'id':id,'data':filterType}).html($alias+'<i class="fa fa-times-circle-o" aria-hidden="true"onclick="removeFilter(this) "></i>'));
        var load=$('#loading').parent();
        $( "#products").empty();
        $("#products").append(load);
        $("#end-of-items").attr('offset',0);
        PrintMoreItems();
        flag=1;}


});
$('input[type="checkbox"]').change(function(e) {
     if(this.checked) {
       $(this).attr('data','true');
       filterChanged();
     }
     else{
       $(this).attr('data','false');
       filterChanged();
     }
     
 });
//get more items when scroll down

var lastScrollTop = 0;
$(window).scroll(function(e) {
     var st = $(this).scrollTop();
   if (st > lastScrollTop){
   var hT = $('#end-of-items').offset().top,
       hH = $('#end-of-items').outerHeight(),
       wH = $(window).height(),
       wS = $(this).scrollTop();
   if ((wS > (hT+hH-wH))&&flag==1){
       $('#loading').css('display','block');
       flag=0;
       setTimeout(function() { PrintMoreItems() }, 5000);
        

   }
 }
   lastScrollTop = st;
});


$('#cancel-btn').click(function(event){event.preventDefault();
      $('#loading').css('display','none');
      flag=1;
      });
//end of document.ready      
});

  

function removeFilter(e){ 
        var filterType=$(e).parent().attr('data');
        var id=$(e).parent().attr('id');
  appliedFilters(id,filterType,'delete');
        $(e).parent().remove();
        filterChanged();

             }

function getCategories(){
 $.ajax({
        url:'functions/responder.php',
        type:'POST',
        data:'getCategoriesByStoreId=1&storeId='+storeId,
        success:function(result){
        result=JSON.parse(result);
          for (var i = 0; i < result.length; i++) {
             $('#category-content*').append($('<a>').attr({'data-alias':result[i].name,data:result[i].id,class:'list-group-item'}).html(result[i].name+'<span class="badge">'+result[i].items.length+'</span>'));
          }
         
        }
        
            

        });

}
function getBrands(){
   $.ajax({
        url:'functions/responder.php',
        type:'POST',
        data:'getBrandsByStoreId=1&storeId='+storeId,
        success:function(result){
        result=JSON.parse(result);
          for (var i = 0; i < result.length; i++) {
             $('#brand-content*').append($('<a>').attr({'data-alias':result[i].name,data:result[i].id,class:'list-group-item'}).html(result[i].name+'<span class="badge">'+result[i].items.length+'</span>'));
          }
         
        }
        
            

        });
 

}
  function appliedFilters(id,filterType,operation){
    
    if(filterType=='brand-content'){
      list= new cookieList("brands");
       if(list.indexOf(id)==-1&&operation=='add'){
      list.add(id);
       return 1;
  }
    
      else{
        
           list.remove(id);

          }
   
   }
  
 
 
  if(filterType=='category-content'){
  list= new cookieList("categories");
  if(list.indexOf(id)==-1&&operation=='add'){
    list.add(id);
    return 1;
  }
  else{
       
           list.remove(id);

          }
  
 

   
 }
 
 }


var cookieList = function(cookieName) {
//When the cookie is saved the items will be a comma seperated string
//So we will split the cookie by comma to get the original array
var cookie = $.cookie(cookieName);
//Load the items or a new array if null.
var items = cookie ? cookie.split(/,/) : new Array();

//Return a object that we can use to access the array.
//while hiding direct access to the declared items array
//this is called closures see http://www.jibbering.com/faq/faq_notes/closures.html
return {
    "add": function(val) {
        //Add to the items.
        if(items.indexOf(val)==-1){
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
        if(indx!=-1) items.splice(indx, 1); 
        $.cookie(cookieName, items.join(','));        },
    "clear": function() {
        items = null;
        //clear the cookie.
        $.cookie(cookieName, null);
    },
    "items": function() {
        //Get all the items.
        return items;
    },
     "indexOf": function(val){
        
      return items.indexOf(val);
    }

  }

}  
function delete_cookie( name ) {
  document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}

function PrintMoreItems(){
  var offset=$('#end-of-items').attr('offset');
  var inStock=$('input[name="inStock"]').attr('data');
  var specialPrices=$('input[name="specialPrices"]').attr('data');
  var newArrival=$('input[name="newArrival"]').attr('data');
  var min=$( "#slider" ).slider( "values", 0 );
  var max=$( "#slider" ).slider( "values", 1 );
  var resultData;
    $.ajaxSetup({async:false});
    $.ajax({
        url:'functions/responder.php',
        type:'POST',
        data:'getMoreItems=1&storeId='+storeId+'&offset='+offset+'&inStock='+inStock+'&specialPrices='+specialPrices+'&newArrival='+newArrival+'&min='+min+'&max='+max,
        success:function(result){
         result=JSON.parse(result);
         resultData=result
          }
        });
    var items=[];
    for (var i = 0; i < resultData.length; i++) {
      items[i]=printItem(resultData[i]);
}
if(items.length>0&&cancelloading==0){
  for (var i = 0; i < items.length; i++) 
  $('#loading').parent().before(items[i]);
flag=1;
}
$('#end-of-items').attr('offset',parseInt(offset)+10);
$('#loading').css('display','none');


}
function printItem(data){
  var id=data.id;
  var name=data.name;
  var price=data.price;
  var item= '<div class="item  col-xs-4 col-lg-4 grid-group-item">';
   item+='<div class="product-thumb transition">';
   item+='<div class="image">';
   item+='<a href=view_item.php?id='+id+'>';
   item+='<img  src="'+getImage(data.photos)+'" class="img-responsive"></a></div>';
   item+='<div class="caption">';
   item+='<h4><a href="view_item.php?id="'+id+'">'+name+'</a></h4>';
   item+='<p>'+data.description+'</p>';
   item+='<p class="price">'+price+' JOD<span class="price-tax">Store:Mrrobot</span></p></div>';
   item+='<div class="button-group">';
   item+='<button type="button" ><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart</span></button>';
   item+='<button type="button" ><i class="fa fa-heart"></i></button>';
   item+='<button type="button" ><i class="fa fa-exchange" id="addToCompare" data-button="'+id+'"></i></button>';
   item+='</div></div></div>';
   return item;
}
function getImage(photos){
  var path="";
  $.each( photos, function( key, value ) {
  if (value['primary']==true){
    path=value['path'];
 }
  
});
  if(path.length>0)
    return path;
  else
    return 'images/products/404.png';
  }
function filterChanged(){
   var load=$('#loading').parent();
        $( "#products").empty();
        $("#products").append(load);
        $("#end-of-items").attr('offset',0);
        PrintMoreItems();
        flag=1;
}

