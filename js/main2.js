(function($) {

	"use strict";

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	$(".toggle-password").click(function() {

		$(this).toggleClass("fa-eye fa-eye-slash");
		var input = $($(this).attr("toggle"));
		if (input.attr("type") == "password") {
			input.attr("type", "text");
		} else {
			input.attr("type", "password");
		}
	});

	$(".toggle-password1").click(function() {

		$(this).toggleClass("fa-eye fa-eye-slash");
		var input = $($(this).attr("toggle"));
		if (input.attr("type") == "password") {
			input.attr("type", "text");
		} else {
			input.attr("type", "password");
		}
	});
	$(document).ready(function(){
		$("#password-field1").keyup(function(){
			if ($("#password-field").val() != $("#password-field1").val()) {
				$("#msg").html("Password do not match").css("color","red");
				document.getElementById('register').disabled=true;
			}else{
				$("#msg").html("Password match").css("color","green");
				document.getElementById('register').disabled=false;
			}
		});
	});

	$(document).ready(function(){
		$("#password-field").keypress(function(){
			var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{7,}$/
			if (!re.test($("#password-field").val())  ) {
				$("#strength").html("Password should be at least 8 characters and should contain a number, and upper and lower case letters").css("color","red");
				document.getElementById('register').disabled=true;
			}else{
				$("#strength").html("Password is strong").css("color","green");
				document.getElementById('register').disabled=false;
				
				
			}
		});
	});

})(jQuery);	