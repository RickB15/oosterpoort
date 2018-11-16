$(function() {
  $(".page-scroll").click(function()
  {
    var nav = $(this).parent().parent().find(".collapse-toggle").text();
    if( this.hash )
    {
      var target = $(this.hash);
      var offset = 0;
      target = target.length ? target : $("[href=" + this.hash.substr(1) +"]");
      if( target.length )
      {
        $("html,body").stop().animate(
        {
          scrollTop: target.offset().top - offset
        }, 1500, "easeInOutExpo");
        return false;
      }
    }
  });
});