$(function()
{
	$(".js-modal-toggle").click(function()
	{
		var target = '#'+$(this).attr('target');
		$(target).css({opacity: 1, visibility: 'visible', transform: 'translateY(0%)'});
	});

	$(".js-modal-close").click(function()
	{
		$(this).closest('.modal').css({opacity: 0, visibility: 'hidden', transform: 'translateY(-100%)'});
	});
});