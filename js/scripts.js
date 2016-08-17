/* Author: Russell Jack

*/

$(document).ready(function(){
/*
 *
 *   search box in #aside
 *
 */

 /*!
  *    search box scripts
  */

	//clears box, makes text normal for search box
	$(".email").click( function() {
		if ($("input.email").val() == "Enter Your Email Address...") {
			$("input.email").val("");
			$("input.email").css({"color": "#333", "font-style": "normal"});			
		}
	});
	//resets the "search" box if nothing entered
	$(".email").blur( function() {
		if ($("input.email").val() == "") {
			$("input.email").val("Enter Your Email Address...");
			$("input.email").css({"color": "#b3b3b3", "font-style": "italic"});			
		}
	});	



 /*!
  *    slideout boxes
  */

	$("#main h3").click( function() {
		if ($(this).next(".slideout").is(":visible")) {
			$(".slideout").slideUp('slow');
		} else {
			$(".slideout").slideUp('slow');
			$(this).next(".slideout").toggle('slow');
		}
	});


});

















