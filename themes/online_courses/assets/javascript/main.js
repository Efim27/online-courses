//Обработка нажатий на svg object
$.fn.svg_click = function (click_func) {
	this.each(function () {
		let svgDoc = this.contentDocument;
		let svg = svgDoc.getElementsByTagName("svg")[0];
		svg.addEventListener("click", click_func, false);
	});
};

$.fn.toggleAttr = function(attr, attr1, attr2) {
	return this.each(function() {
		var self = $(this);
		if (self.attr(attr) == attr1)
			self.attr(attr, attr2);
		else
			self.attr(attr, attr1);
	});
};

function get_div_by_svg(div_selector, svg) {
	svg_div = null;

	$(div_selector).each(function () {
		if (svg.is(this.contentDocument.getElementsByTagName("svg")[0])) {
			svg_div = $(this);
		}
	});
	return svg_div.parent();
}

$(document).ready(function () {

	$(document).mousedown(function (e){
		var popup = $('.popup__content');
		if (!popup.is(e.target) && popup.has(e.target).length === 0) {
			popup.parent().hide('slow');
		}
	});

	$('.popup__close').click(function (e) {
		$(this).parent().parent().parent().hide('slow');
	});

	$('.signin-link').click(function (e) {
		e.preventDefault();
		$('.popup').hide('slow');
		$('.popup-signin').show('slow').css('display', 'flex');
	});

	$('.signup-link').click(function (e) {
		e.preventDefault();
		$('.popup').hide('slow');
		$('.popup-signup').show('slow').css('display', 'flex');
	});

	$('.faq-stage__more-btn').click(function () {
		$(this).toggleClass('more-btn_close');
		$(this).prev().find('.faq-stage__answer').toggle('slow');
	});

	$(window).load(function () {
		$(".side-menu").addClass('side-menu_loaded');
		$(".popup").addClass('popup_loaded');

		$(".side-menu-btn object").svg_click(function () {
			$(".side-menu").show("slow");
		});

		$(".side-menu__close object").svg_click(function () {
			$(".side-menu").hide("slow");
		});

		$('.popup__close object').svg_click(function () {
			let svg = $(this);
			let object_selector = '.popup__close object';
			let svg_div = get_div_by_svg(object_selector, svg);
			svg_div.parent().parent().parent().hide('slow');
		});

		$('.text-input__toggle-pswd object').svg_click(function () {
			let svg = $(this);
			let object_selector = '.text-input__toggle-pswd object';
			svg_div = get_div_by_svg(object_selector, svg);
			svg_div.parent().find('input').toggleAttr('type', 'text', 'password');
		});
	});
});
