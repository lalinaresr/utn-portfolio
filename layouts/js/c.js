jQuery(document).ready(function ($) {
	new WOW().init();
	$("span.menu").click(() => $(".head-nav ul").slideToggle(300, () => { }));
});