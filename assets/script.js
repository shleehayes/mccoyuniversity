$( document ).ready(function() {
	$(".thumbnail").css('width','300px');
	$(".thumbnail").css('height', '300px');

	$("#icon_link").click(function() {
		$(".topnav").toggleClass("responsive");
	});

	$(window).scroll(function(){
			if ($(this).scrollTop() > 100) {
					$('#scroll').fadeIn();
			} else {
					$('#scroll').fadeOut();
			}
	});

	$('#scroll').click(function(){
			$("html, body").animate({ scrollTop: 0 }, 600);
			return false;
	});

});
