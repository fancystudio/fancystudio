var messageWasSend = false;
var peknaZenaIsSet = false;
var contactIsSet = false;   
$(document).ready(function() {
  $(".lavaLampBottomStyle").lavaLamp({
    fx: "backout",
    speed: 700
  });
  var slider = $('.slider').bxSlider({
    startSlide:1,
    controls: false,
    easing: 'easeInExpo',
    speed: 1000,
    adaptiveHeight: true,
    hideControlOnEnd: true,
    pager: false,
    onSlideAfter: changeDisplay
  });
  $(".banerGetFancy").delegate(".topReferencesIsSet","click",function(){
  if(contactIsSet){
    $(".banerGetFancy a").removeClass("topReferencesIsSet");
    $(".banerGetFancy a").addClass("contactIsSet");
    $(".getFancyButton").fadeOut();
    if($(".lang_help").html() == "sk"){
      $(".getFancyButtonBox").animate({
          width: '+=42px'
      }, 500,function(){
        $(".getFancyButton").fadeIn().html($(".form_fancy_solution_help").html());  
      });
    }else{
      $(".getFancyButtonBox").animate({
          width: '+=27px'
      }, 500,function(){
        $(".getFancyButton").fadeIn().html($(".form_fancy_solution_help").html());  
      });
    }
    slider.goToNextSlide();
  }
  });
  $(".banerGetFancy").delegate(".contactIsSet","click",function(){
    if(!contactIsSet){
      $(".banerGetFancy a").removeClass("contactIsSet");
      $(".banerGetFancy a").addClass("topReferencesIsSet");
      $(".getFancyButton").fadeOut();  
      if($(".lang_help").html() == "sk"){
        $(".getFancyButtonBox").animate({
            width: '-=42px'
        }, 500,function(){
          $(".getFancyButton").fadeIn().html($(".form_back_services_help").html());  
        });
      }else{
        $(".getFancyButtonBox").animate({
            width: '-=27px'
        }, 500,function(){
          $(".getFancyButton").fadeIn().html($(".form_back_services_help").html());  
        });
      }
      slider.goToPrevSlide();
    }
  });

//----------------------------furmular begin--------------------------//
$(".kontakt-formular .form_name").eq(0).click(function(){
if($(".kontakt-formular .form_name").eq(0).attr("value") == $(".form_name_help").html()){
$(".kontakt-formular .form_name").eq(0).attr("value","");
}
});
$("body").click(function(event) {
if (!$(event.target).closest(".kontakt-formular .form_name").length) {
if($(".kontakt-formular .form_name").eq(0).attr("value") == ""){
$(".kontakt-formular .form_name").eq(0).attr("value",$(".form_name_help").html());
}
}
if (!$(event.target).closest('.kontakt-formular .form_email').length) {
if($(".kontakt-formular .form_email").eq(0).attr("value") == ""){
$(".kontakt-formular .form_email").eq(0).attr("value",$(".form_email_help").html());
}
};
if (!$(event.target).closest('.kontakt-formular .form_phone').length) {
if($(".kontakt-formular .form_phone").eq(0).attr("value") == ""){
$(".kontakt-formular .form_phone").eq(0).attr("value",$(".form_phone_help").html());
}
};
if (!$(event.target).closest('.kontakt-formular .form_company').length) {
if($(".kontakt-formular .form_company").eq(0).attr("value") == ""){
$(".kontakt-formular .form_company").eq(0).attr("value",$(".form_company_help").html());
}
};
if (!$(event.target).closest('.kontakt-formular .form_text').length) {
if($(".kontakt-formular .form_text").eq(0).val() == ""){
$(".kontakt-formular .form_text").eq(0).val($(".form_text_help").html());
}
}
});
$(".kontakt-formular .form_text").eq(0).click(function(){
if($(".kontakt-formular .form_text").eq(0).val() == $(".form_text_help").html()){
$(".kontakt-formular .form_text").eq(0).val("");
}
});
$(".kontakt-formular .form_email").eq(0).click(function(){
if($(".kontakt-formular .form_email").eq(0).attr("value") == $(".form_email_help").html()){
$(".kontakt-formular .form_email").eq(0).attr("value","");
}
});
$(".kontakt-formular .form_phone").eq(0).click(function(){
if($(".kontakt-formular .form_phone").eq(0).attr("value") == $(".form_phone_help").html()){
$(".kontakt-formular .form_phone").eq(0).attr("value","");
}
});
$(".kontakt-formular .form_company").eq(0).click(function(){
if($(".kontakt-formular .form_company").eq(0).attr("value") == $(".form_company_help").html()){
$(".kontakt-formular .form_company").eq(0).attr("value","");
}
});
//----------------------------furmular end--------------------------//
$(".reference .work_zoom").css("opacity","0");
$('.reference a').hover(function()
{
$(this).children(".reference .work_zoom").stop().animate( { opacity: 0.8 }, 400  );
},
function()
{
$(this).children(".reference .work_zoom").stop().animate( { opacity: 0 }, 800  );
}
)
  });
  
  function formSubmit(){
if (($(".kontakt-formular .form_name").eq(0).val() != "")
&& ($(".kontakt-formular .form_name").eq(0).val() != $(".form_name_help").html())
&& ($(".kontakt-formular .form_email").eq(0).val() != "")
&& ($(".kontakt-formular .form_email").eq(0).val() != $(".form_email_help").html())
&& ($(".kontakt-formular .form_text").eq(0).val() != "")
&& ($(".kontakt-formular .form_text").eq(0).val() != $(".form_text_help").html())
&& (validateEmail($(".kontakt-formular .form_email").eq(0).val())==true)
&& (!isNaN($(".kontakt-formular .form_phone").eq(0).val()) || $(".kontakt-formular .form_phone").eq(0).val() == $(".form_phone_help").html() || $(".kontakt-formular .form_phone").eq(0).val() == "")
&& ($(".kontakt-formular .form_company").eq(0).val() == $(".form_company_help").html() || $(".kontakt-formular .form_company").eq(0).val() == "" || $(".kontakt-formular .form_company").eq(0).val() != "")){
//return true;
if(!messageWasSend){

$.post("sendMail.php", {
  isSendMail: true, 
  name: $(".kontakt-formular .form_name").eq(0).val(), 
  company: $(".kontakt-formular .form_company").eq(0).val(),
  email: $(".kontakt-formular .form_email").eq(0).val(),
  phone: $(".kontakt-formular .form_phone").eq(0).val(),
  message: $(".kontakt-formular .form_text").eq(0).val() 
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
if(($(".kontakt-formular .form_name").eq(0).val() == "") || ($(".kontakt-formular .form_name").eq(0).val() == $(".form_name_help").html())){

if(isFirst){
emptyFields = $(".form_name_help").html();
isFirst = false;
}
}
if($(".kontakt-formular .form_email").eq(0).val() == "" || $(".kontakt-formular .form_email").eq(0).val() == $(".form_email_help").html() || validateEmail($(".kontakt-formular .form_email").eq(0).val()) != true){
if(isFirst){
emptyFields = $(".form_email_help").html();
isFirst = false;
}else{
emptyFields += ", " + $(".form_email_help").html();
}
}
if($(".kontakt-formular .form_text").eq(0).val() == "" || $(".kontakt-formular .form_text").eq(0).val() == $(".form_text_help").html()){
if(isFirst){
emptyFields = $(".form_your_message_help").html();
isFirst = false;
}else{
emptyFields += ", " + $(".form_your_message_help").html();
}
}
if(isNaN($(".kontakt-formular .form_phone").eq(0).val()) && $(".kontakt-formular .form_phone").eq(0).val() != $(".form_phone_help").html() && $(".kontakt-formular .form_phone").eq(0).val() != ""){
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
function changeDisplay(){
  if(contactIsSet != true){
    contactIsSet = true;                
  }else{
    contactIsSet = false;  
  }
}