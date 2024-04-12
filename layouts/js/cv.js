jQuery(document).ready(function ($) {

	$("#jobs").owlCarousel({
		slideSpeed: 300,
		paginationSpeed: 400,
		singleItem: true
	});

	$("#btn-info-show").on('click', function (e) {
		e.preventDefault();
		$('#tabsMenu a[href="#infoTab"]').tab('show');
	});

	$("#btn-education-show").on('click', function (e) {
		e.preventDefault();
		$('#tabsMenu a[href="#educationTab"]').tab('show');
	});
	
	$("#btn-experience-show").on('click', function (e) {
		e.preventDefault();
		$('#tabsMenu a[href="#experienceTab"]').tab('show');
	});

	$(".btn-back").on('click', function (e) {
		e.preventDefault();
		$('#tabsMenu a[href="#mainTab"]').tab('show');
	});

	$('.btn-education-tab').click(function () {
		let requiredCheckboxes = $('.the-courses :checkbox[required]');
		requiredCheckboxes.change(function () {
			if (requiredCheckboxes.is(':checked')) {
				requiredCheckboxes.removeAttr('required');
			} else {
				requiredCheckboxes.attr('required', 'required');
			}
		});
	});

	$('.btn-experience-tab').click(function () {
		let requiredCheckboxes = $('.the-knowledges :checkbox[required]');
		requiredCheckboxes.change(function () {
			if (requiredCheckboxes.is(':checked')) {
				requiredCheckboxes.removeAttr('required');
			} else {
				requiredCheckboxes.attr('required', 'required');
			}
		});
	});
});