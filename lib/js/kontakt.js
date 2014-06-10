var messageWasSend = false;
$(document).ready(function() {  
  $(".lavaLampBottomStyle").lavaLamp({
    fx: "backout",
    speed: 700
  });
  $(".getFancyButton").html($(".form_references_help").html());

  //----------------------------furmular begin--------------------------//
  $(".form_name").click(function(){
    if($(".form_name").attr("value") == $(".form_name_help").html()){
      $(".form_name").attr("value","");
    }                        
  });
  $('body').click(function(event) {
    if (!$(event.target).closest('.form_name').length) {
        if($(".form_name").attr("value") == ""){
           $(".form_name").attr("value",$(".form_name_help").html());
        }
    };
    if (!$(event.target).closest('.form_email').length) {
        if($(".form_email").attr("value") == ""){
           $(".form_email").attr("value",$(".form_email_help").html());
        }
    };
    if (!$(event.target).closest('.form_phone').length) {
        if($(".form_phone").attr("value") == ""){
           $(".form_phone").attr("value",$(".form_phone_help").html());
        }
    };
    if (!$(event.target).closest('.form_company').length) {
        if($(".form_company").attr("value") == ""){
           $(".form_company").attr("value",$(".form_company_help").html());
        }
    };
    if (!$(event.target).closest('.form_text').length) {
    if($(".form_text").val() == ""){
       $(".form_text").val($(".form_text_help").html());
    }
    }
  });
  $(".form_text").click(function(){
     if($(".form_text").val() == $(".form_text_help").html()){
        $(".form_text").val("");
     }
  });  
  $(".form_email").click(function(){
     if($(".form_email").attr("value") == $(".form_email_help").html()){
        $(".form_email").attr("value","");
     }
  });   
  $(".form_phone").click(function(){
     if($(".form_phone").attr("value") == $(".form_phone_help").html()){
        $(".form_phone").attr("value","");
     }
  });
  $(".form_company").click(function(){
     if($(".form_company").attr("value") == $(".form_company_help").html()){
        $(".form_company").attr("value","");
     }
  });

  //----------------------------furmular end--------------------------//

  });
    function formSubmit(){
     if (($(".form_name").val() != "") 
          && ($(".form_name").val() != $(".form_name_help").html()) 
          && ($(".form_email").val() != "") 
          && ($(".form_email").val() != $(".form_email_help").html()) 
          && ($(".form_text").val() != "") 
          && ($(".form_text").val() != $(".form_text_help").html()) 
          && (validateEmail($(".form_email").val())==true) 
          && (!isNaN($(".form_phone").val()) || $(".form_phone").val() == $(".form_phone_help").html() || $(".form_phone").val() == "")
          && ($(".form_company").val() == $(".form_company_help").html() || $(".form_company").val() == "" || $(".form_company").val() != "")){
         if(!messageWasSend){
           
         
         $.post("sendMail.php", {
  isSendMail: true, 
  name: $(".kontakt-formular .form_name").val(), 
  company: $(".kontakt-formular .form_company").val(),
  email: $(".kontakt-formular .form_email").val(),
  phone: $(".kontakt-formular .form_phone").val(),
  message: $(".kontakt-formular .form_text").val() 
   })
.done(function() { 
  messageWasSend = true;
  $(".email_send").html($(".form_message_send_help").html());
  $(".email_send").fadeIn("slow");
})
.fail(function() { 
  $(".email_send").html($(".form_send_incorect_help").html()) 
  $(".email_send").fadeIn("slow");
})
  }
       }else{
       isFirst = true;
        emptyFields = "";
        if(($(".form_name").val() == "") || ($(".form_name").val() == $(".form_name_help").html())){
        
        if(isFirst){
        emptyFields = $(".form_name_help").html();
        isFirst = false;
        }
        }
        if($(".form_email").val() == "" || $(".form_email").val() == $(".form_email_help").html() || validateEmail($(".form_email").val()) != true){
        if(isFirst){
        emptyFields = $(".form_email_help").html();
        isFirst = false;
        }else{
        emptyFields += ", " + $(".form_email_help").html();
        }
        }
        if($(".form_text").val() == "" || $(".form_text").val() == $(".form_text_help").html()){
        if(isFirst){
        emptyFields = $(".form_your_message_help").html();
        isFirst = false;
        }else{
        emptyFields += ", " + $(".form_your_message_help").html();
        }
        }
        if(isNaN($(".form_phone").val()) && $(".form_phone").val() != $(".form_phone_help").html() && $(".form_phone").val() != ""){
        if(isFirst){
        emptyFields = $(".form_your_phone_help").html();
        isFirst = false;
        }else{
        emptyFields += ", " + $(".form_your_phone_help").html();
        }
        }
        if(emptyFields != ""){
        alert($(".form_mandatory_help").html() + ": " + "(" + emptyFields + ")");
        }else{
        alert($(".form_unfilled_help").html());
        }
     }
     }

  function validateEmail(email) { 
     var reg = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
     return reg.test(email);
  }
  function showPeknaZena(){
  $(".peknaZena").animate({
    top: "-=" + $(".animPekna").css("top")
  },
  1000,
  'easeOutBounce',function() {
      peknaZenaIsSet = true;
      $(".getFancyButton").addClass("contactIsSet"); //onComplete
    });
  }
  function hideSkaredaZena(){
   $(".skaredaZena").animate({
      top: "+=" + $(".animSkareda").css("top")
    },
    700,
    'easeInBack',
    showPeknaZena);//onComplete
  }