$(window).load(function() {
  $(".referenceScreen").lazyload({ 
    effect : "fadeIn"
  });  
	$(".all-btn, .next-btn, .prev-btn, .scrollToTop")
	.find("span")
	.hide()
	.end()
	.hover(function() {
		$(this).find("span").stop(true, true).fadeIn();
	}, function() {
		$(this).find("span").stop(true, true).fadeOut();
  });
  if($.cookie("womanIsChange")){
    $(".peknaZena").css("top","-35px");
    $(".skaredaZena").css("top","353px");
    $(".getFancyButton").bind("click",function(){
      self.location="kontakt.html";   
    });   
  }else{
    $(".getFancyButton").one("click",function(){
      hideSkaredaZena(); 
      $.cookie("womanIsChange", true, { expires: 1 });
    });
  }
  $(".lavaLampBottomStyle").lavaLamp({
    fx: "backout",
    speed: 700
  });
  $(".scrollToTop").click(function() {
    $("html, body").animate({ scrollTop: 0 }, 1500);
    return false;
  });
});