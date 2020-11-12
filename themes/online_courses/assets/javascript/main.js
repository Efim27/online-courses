//Ограничение по кол-ву символов текст
var text_limit = 250;

//Обработка нажатий на svg object
$.fn.svg_click = function (click_func) {
	this.each(function () {
		let svgDoc = this.contentDocument;
		let svg = svgDoc.getElementsByTagName("svg")[0];
		svg.addEventListener("click", click_func, false);
	});
};

$.fn.toggleAttr = function (attr, attr1, attr2) {
	return this.each(function () {
		var self = $(this);
		if (self.attr(attr) == attr1) self.attr(attr, attr2);
		else self.attr(attr, attr1);
	});
};

$.fn.text_limit = function () {
	return this.each(function () {
		let str = $(this)[0].textContent;
		let strtemp = str.substr(0, text_limit);
		str =
			strtemp +
			'<span class="text-limited__hidden">' +
			str.substr(text_limit, str.length) +
			'</span><span class="text-limited__dots">...</span>';
		$(this).html(str);
	});
};

$.fn.text_unlimit = function () {
	return this.each(function () {
		$(this).find(".text-limited__dots").remove();
		$(this).html($(this)[0].textContent);
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

function contact_form_success() {
	alert("Вы успешно отправили нам вопрос");
}

if ($(".project-review").length > 0) {
	let project_review_slider = new Glide(".project-review", {
		type: "carousel",
		perView: 1,
		focusAt: "center",
	});
	project_review_slider.mount();
} else {
	project_review_slider = null;
}

$(document).ready(function () {
	$(document).mousedown(function (e) {
		var popup = $(".popup__content");
		if (!popup.is(e.target) && popup.has(e.target).length === 0) {
			popup.parent().hide("slow");
		}
	});

	$(".text-limited").text_limit();
	$(".btn-text-limited").click(function (e) {
		e.preventDefault();
		let parent_div = $(this).parent();
		$(this).hide("slow");
		parent_div.find(".text-limited").text_unlimit();
	});

	$(".popup__close").click(function (e) {
		$(this).parent().parent().parent().hide("slow");
	});

	$(".signin-link").click(function (e) {
		e.preventDefault();
		$(".popup").hide("slow");
		$(".popup-signin").show("slow").css("display", "flex");
	});

	$(".signup-link").click(function (e) {
		e.preventDefault();
		$(".popup").hide("slow");
		$(".popup-signup").show("slow").css("display", "flex");
	});

	$(".faq-stage__more-btn").click(function () {
		$(this).toggleClass("more-btn_close");
		$(this).prev().find(".faq-stage__answer").toggle("slow");
	});

	$(".course-page-block__more-btn").click(function () {
		$(this).toggleClass("more-btn_close");
		$(this)
			.parent()
			.parent()
			.find(".course-page-block__content")
			.toggle("slow");
	});

	$(window).load(function () {
		//svg hover
		$(".svg-link").on("mouseenter", function () {
			$(this)
				.find("object")
				.get(0)
				.contentDocument.getElementsByTagName("svg")[0]
				.classList.add("hover");
		});

		$(".svg-link").on("mouseleave", function () {
			$(this)
				.find("object")
				.get(0)
				.contentDocument.getElementsByTagName("svg")[0]
				.classList.remove("hover");
		});

		$(".side-menu").addClass("side-menu_loaded");
		$(".popup").addClass("popup_loaded");
		$(".project-reviews__btns_mini").addClass(
			"project-reviews__btns_mini-loaded"
		);

		$(".project-reviews__btn-left object").svg_click(function () {
			project_review_slider.go("<");
		});
		$(".project-reviews__btn-right object").svg_click(function () {
			project_review_slider.go(">");
		});

		$(".side-menu-btn object").svg_click(function () {
			$(".side-menu").show("slow");
		});

		$(".side-menu__close object").svg_click(function () {
			$(".side-menu").hide("slow");
		});

		$(".contact-us__btn-submit object").svg_click(function () {
			$(".contact-us__form").submit();
		});

		$(".popup__close object").svg_click(function () {
			let svg = $(this);
			let object_selector = ".popup__close object";
			let svg_div = get_div_by_svg(object_selector, svg);
			svg_div.parent().parent().parent().hide("slow");
		});

		$(".text-input__toggle-pswd object").svg_click(function () {
			let svg = $(this);
			let object_selector = ".text-input__toggle-pswd object";
			svg_div = get_div_by_svg(object_selector, svg);
			svg_div
				.parent()
				.find("input")
				.toggleAttr("type", "text", "password");
		});
	});

	changeWord();
	setInterval(changeWord, 4000);
});

var words = document.getElementsByClassName("welcome-title-content__word");
var wordArray = [];
var currentWord = 0;

words[currentWord].style.opacity = 1;
for (var i = 0; i < words.length; i++) {
	splitLetters(words[i]);
}

function changeWord() {
	var cw = wordArray[currentWord];
	var nw =
		currentWord == words.length - 1
			? wordArray[0]
			: wordArray[currentWord + 1];
	for (var i = 0; i < cw.length; i++) {
		animateLetterOut(cw, i);
	}

	for (var i = 0; i < nw.length; i++) {
		nw[i].className = "letter behind";
		nw[0].parentElement.style.opacity = 1;
		animateLetterIn(nw, i);
	}

	currentWord = currentWord == wordArray.length - 1 ? 0 : currentWord + 1;
}

function animateLetterOut(cw, i) {
	setTimeout(function () {
		cw[i].className = "letter out";
	}, i * 80);
}

function animateLetterIn(nw, i) {
	setTimeout(function () {
		nw[i].className = "letter in";
	}, 340 + i * 80);
}

function splitLetters(word) {
	var content = word.innerHTML;
	word.innerHTML = "";
	var letters = [];
	for (var i = 0; i < content.length; i++) {
		var letter = document.createElement("span");
		letter.className = "letter";
		letter.innerHTML = content.charAt(i);
		word.appendChild(letter);
		letters.push(letter);
	}

	wordArray.push(letters);
}
