jQuery(document).ready(function(){

	var elements = document.getElementsByClassName("special");

	for (var i = 0, l = elements.length; i < l; i++) {

		elements[i].innerHTML = elements[i].innerHTML.replace('Special', '<em>Special</em>');

	}

	jQuery(".appear-animation:nth-child(2)").delay(800);

	jQuery(".masonry-item:nth-child(2)").addClass("w2");

	jQuery(".tab_title:first-child").addClass("active");

	jQuery(".tab-pane:first-child").addClass("active");



	jQuery(".context-contact>#edit-actions>#edit-submit").attr('value', "Send Message");
	jQuery("#edit-submit").attr('value', "Login");




});