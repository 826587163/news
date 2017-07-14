$(function(){
	  $('.dropdown-toggle').dropdown();
   	  $('.carousel').carousel({
		  interval: 2000
	  });
	  $(".bng1").mouseover(function(){
	  	  $(this).animate({
	  	  	 "margin-left":"-800px",
	  	  	 
	  	  });
	  	  $(".hid").css("display","block");
	  });
	  $(".hid").mouseout(function(){
	  	  $(".bng1").animate({
	  	  	 "margin-left":"0px",
	  	  });
	  	  $(".hid").css("display","none");
	  });
	  $(".bng2").mouseover(function(){
	  	  $(this).animate({
	  	  	 "margin-left":"-700px",
	  	  	 
	  	  });
	  	  $(".hid2").css("display","block");
	  });
	  $(".hid2").mouseout(function(){
	  	  $(".bng2").animate({
	  	  	 "margin-left":"0px",
	  	  });
	  	  $(".hid2").css("display","none");
	  });
	  $(".bng3").mouseover(function(){
	  	  $(this).animate({
	  	  	 "margin-left":"-800px",
	  	  	 
	  	  });
	  	  $(".hid3").css("display","block");
	  });
	  $(".hid3").mouseout(function(){
	  	  $(".bng3").animate({
	  	  	 "margin-left":"16px",
	  	  });
	  	  $(".hid3").css("display","none");
	  });
	  $(".bng4").mouseover(function(){
	  	  $(this).animate({
	  	  	 "margin-left":"800px",
	  	  	 
	  	  });
	  	  $(".hid4").css("display","block");
	  });
	  $(".hid4").mouseout(function(){
	  	  $(".bng4").animate({
	  	  	 "margin-left":"0px",
	  	  });
	  	  $(".hid4").css("display","none");
	  });
	  console.log($(window).width());
	  console.log(window.screen.width);
	  if($(window).width()<=400){
	  	 $(".miss").css("display","none");
	  	 
	  	 	$(".top-ul>li").css("display","none");
	  	 
	  	 $(".drop").css("display","block");
	  }



	  $(window).resize(function(event) {
	  	// console.log($(window).width());
	  	if($(window).width()<=400){
	  	 $(".miss").css("display","none");
	  	 
	  	 	$(".top-ul>li").css("display","none");
	  	 
	  	 $(".drop").css("display","block");
	    }

	  });
	  $(".myurl>li>a").hover(function(){
	  	  $(this).css("background","red");
	  },function(){
	  	  $(this).css("background","white");
	  });
});	
