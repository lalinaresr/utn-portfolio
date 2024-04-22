jQuery(document).ready(function ($) {

	$("#jobs").owlCarousel({
		slideSpeed: 300,
		paginationSpeed: 400,
		singleItem: true
	});

	$("#btn-info-show").on('click', function (e) {
		e.preventDefault();
		$('#all-tabs a[href="#info-tab"]').tab('show');
	});

	$("#btn-education-show").on('click', function (e) {
		e.preventDefault();
		$('#all-tabs a[href="#education-tab"]').tab('show');
	});

	$("#btn-experience-show").on('click', function (e) {
		e.preventDefault();
		$('#all-tabs a[href="#experience-tab"]').tab('show');
	});

	$(".btn-back").on('click', function (e) {
		e.preventDefault();
		$('#all-tabs a[href="#main-tab"]').tab('show');
	});

	$(".btn-education-tab").click(() => {
		let checkboxes = $(".the-courses :checkbox[required]");
		checkboxes.change(() => {
			if (checkboxes.is(':checked')) {
				checkboxes.removeAttr('required');
			} else {
				checkboxes.attr('required', true);
			}
		});
	});

	$(".btn-experience-tab").click(() => {
		let checkboxes = $(".the-knowledges :checkbox[required]");
		checkboxes.change(() => {
			if (checkboxes.is(':checked')) {
				checkboxes.removeAttr('required');
			} else {
				checkboxes.attr('required', true);
			}
		});
	});
});