$(document).ready(function(){$(document).bind("mousewheel",function(o){var t=$(document.body).scrollTop()-2.5*o.originalEvent.wheelDeltaY;o.preventDefault(),$(document.body).stop().animate({scrollTop:t},500)}),setTimeout(function(){$(".codrops-header > h1").css({transform:"translateX(0px)",opacity:"1"})},600),setTimeout(function(){$(".codrops-header span").css({transform:"translateX(0px)",opacity:"1"})},1100),$("#st-trigger-effects").mouseover(function(){$(this).animate({opacity:1},{queue:!1,duration:400})}).mouseout(function(){$(this).animate({opacity:.5},{queue:!1,duration:400})}),$(".dropdown").on("show.bs.dropdown",function(o){$(this).find(".dropdown-menu").first().stop(!0,!0).slideDown()}),$(".dropdown").on("hide.bs.dropdown",function(o){$(this).find(".dropdown-menu").first().stop(!0,!0).slideUp()})});