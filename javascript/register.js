var flag1=0;
var flag2=0;
var error=0;
$(document).ready(function(event){
 

$("#add_new_user").click(function(){
var response = grecaptcha.getResponse();
if(response.length == 0){
  displayErrorMessage("You can't leave Captcha Code empty");
  return ;
}
alert(response);
   
    var firstName=$("#input-firstname").val();
    var lastName=$("#input-lastname").val();
    var telephone=$("#input-telephone").val();
    var email=$("#input-email").val();
    var address=$("#input-address-1").val();
    var address2=$("#input-address-2").val();
    var city=$("#input-city").val();
    var password=$("#input-password").val();
    var password2=$("#input-confirm").val();
    var sub = $('#subscribe').is(':checked')?0:1;
    var agree=document.getElementById('agree').checked?1:0;
    var date = new Date();
    flag2=$('#agree').is(":checked")?1:0;
    if(flag1&&flag2){
      if(error==0){  
    $.ajax({
        url:'functions/responder.php',
        type:'POST',
        data:'addNewUser=1&firstName='+firstName+'&lastName='+lastName+'&telephone='+telephone+"&email="+email+"&address="+address+"&address2="+address2+"&city="+city+"&password="+password+"&sub="+sub+"&date="+date,
        success:function(result){
            alert(result);
               window.location.href = '/mrrobot/login.php';

        }
    });
    }
    else{
        displayErrorMessage("please make sure enter valid value");
    }
        }
    else
        displayErrorMessage("Please fill all requried info");
    //-End of the request 
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
        console.log(result);
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
    aler
             

    if(!validate(this)){
        displayErrorMessage("Please Enter Valid phone number");
    }
    else
        error=0;
     });

   //check password if match and length >= 8
    $("#input-password").change( function(){
    
    if($(this).val().length<8){
        displayErrorMessage("Very weak password");
        $("#input-confirm").prop('disabled', true);
        
    }
    else
        $("#input-confirm").prop('disabled', false);
        
     

     });
      $("#input-confirm").change( function(){
    
    if($(this).val() != $("#input-password").val()){
        displayErrorMessage("Password does not match");

    }
    else
        error=0;
   
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
        $("#message").html(message);
        $(".message_area").show().delay(4000).queue(function (next) {
        $(this).fadeOut("slow");
        next();
        });
}