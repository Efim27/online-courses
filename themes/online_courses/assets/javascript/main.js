//Обработка нажатий на svg object
$.fn.svg_click = function (click_func) {
	this.each(function () {
		console.log(this);
		let svgDoc = this.contentDocument;
		let svg = svgDoc.getElementsByTagName("svg")[0];
		svg.addEventListener("click", click_func, false);
	});
};

$(document).ready(function () {
	$(window).load(function () {
		$(".side-menu").addClass('side-menu_loaded');

		$(".side-menu-btn object").svg_click(function () {
			$(".side-menu").show("slow");
		});

		$(".side-menu__close object").svg_click(function () {
			$(".side-menu").hide("slow");
		});
	});
});
