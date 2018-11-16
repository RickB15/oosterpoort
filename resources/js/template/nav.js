$(function(){
	$("#js-mobile-toggle-button").click(function()
	{
		$(".nav-content").toggleClass("visible");
		$(this).find("span").toggleClass("active hidden");
		$(this).find("span").find("span").toggleClass("active hidden");
	});
	$(document).on("load scroll resize", function()
	{
      if( $("#navbar").offset().top >= 50 )
      {
          $("#navbar").removeClass("navbar-extend");
          $(".nav-extras").addClass('hidden');
      }
      else
      {
          $("#navbar").addClass("navbar-extend");
          $(".nav-extras").removeClass('hidden');
      }
    });

     $(window).resize(function()
     {
		if( $(this).width() > 992 )
		{
			$("#js-mobile-toggle-button").find("span").removeClass("active hidden");
			$("#js-mobile-toggle-button").find("span").next("span").addClass("hidden");
			$("#js-mobile-toggle-button").find("span").next("span").removeClass("active");
		}
	});

	$(".collapse").click(function(e)
	{
    	if( window.screen.width <= 992 || window.innerWidth <= 992 )
    	{
		    $(".collapse").not(this).toggleClass("hidden");
		    $(".nav-item").toggleClass("hidden");
		    $(this).find(".collapse-content").toggleClass("visible");
		    $(this).find(".collapse-content").find(".collapse-item").siblings().toggleClass("visible");
		    $(this).find(".collapse-toggle").find("#js-caret-left").toggleClass("hidden");
		    $(this).find(".collapse-toggle").find("#js-caret-down").toggleClass("hidden");
    	}
  	});
	$(window).resize(function()
	{
      if( window.screen.width >= 993 || window.innerWidth >= 993 )
      {
      	$(".collapse").removeClass("hidden");
	    $(".nav-item").removeClass("hidden");
	    $(".collapse-content").removeClass("visible");
	    $(".collapse-item").siblings().removeClass("visible");
	    $("#js-caret-left").addClass("hidden");
	    $("#js-caret-down").removeClass("hidden");
      }
    });
})