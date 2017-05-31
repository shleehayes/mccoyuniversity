$( document ).ready(function() {

	<!-- Navigation -->
	$("#icon_link").click(function() {
		$(".topnav").toggleClass("responsive");
	});
	$(".topnav a.nav_link").click(function() {
		$(".topnav").toggleClass("responsive");
	});

	<!-- BacktoTop Button -->
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
