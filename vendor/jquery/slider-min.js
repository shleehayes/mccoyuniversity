$(document).ready(function(){$("#slider").cycle({fx:"scrollHorz",next:"#next",prev:"#prev",timeout:3e3,pause:1}),$(".article-item").hover(function(){$(this).find(".img-title").fadeIn(300)},function(){$(this).find(".img-title").fadeOut(100)}),$("#icon_link").click(function(){$(".topnav").toggleClass("responsive")}),$("#i-nav").click(function(){$(this).toggleClass("open"),$("ul").toggleClass("show")})});