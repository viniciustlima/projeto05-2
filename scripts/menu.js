$(() => {
	var menuopen = false;
	$("header .mob-button").click(() => {
		if (menuopen) {
			$("section.mobile ul").slideToggle();
			$("header .mob-button i, header .mob-button svg").removeClass("fa-times").addClass("fa-bars");
			menuopen = false;
		} else {
			$("section.mobile ul").slideToggle();
			$("header .mob-button i, header .mob-button svg").removeClass("fa-bars").addClass("fa-times");
			menuopen = true;
		}
	})
})