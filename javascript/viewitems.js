$(document).ready(function() {

	 $(".fa-times-circle-o").click(function() { 
   $(this).parent().remove();
});
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
            $( "#slider-3*" ).slider({
               range:true,
               min: 0,
               max: 1000,
               values: [ 0, 1000 ],
               slide: function( event, ui ) {
                  $( "#price*" ).val( ui.values[ 0 ]+" JOD" + " - " + ui.values[ 1 ]+" JOD" );
               }
           });
         $( "#price*" ).val(  $( "#slider-3*" ).slider( "values", 0 )+" JOD" +
            " - " + $( "#slider-3*" ).slider( "values", 1 )+" JOD" );
         });
            $(function() {
            $( "#slider-1*" ).slider({
               range:true,
               min: 0,
               max: 500,
               values: [ 35, 200 ],
               slide: function( event, ui ) {
                  $( "#price-1*" ).val( ui.values[ 0 ]+" JOD" + " - " + ui.values[ 1 ]+" JOD" );
               }
           });
         $( "#price-1*" ).val(  $( "#slider-1*" ).slider( "values", 0 )+" JOD" +
            " - " + $( "#slider-1*" ).slider( "values", 1 )+" JOD" );
         });

      $('#filters').on('click', '.list-group-item', function(e) {
        var $this = $(this);
        var $alias = $this.data('alias');
        
        $("#applied-filters ul").append('<li>'+$alias+'<i class="fa fa-times-circle-o" aria-hidden="true" onclick="removeFilter(this)"></i></li>');

});
             });
function removeFilter(e){ 
        $(e).parent().remove();
        console.log(e);
             }

