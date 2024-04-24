jQuery(document).ready(function ($) {

    $(".btn-products-form").click(() => {
        let checkboxes = $("#products-form :checkbox[required]");
        checkboxes.change(() => {
            if (checkboxes.is(':checked')) {
                checkboxes.removeAttr('required');
            } else {
                checkboxes.attr('required');
            }
        });
    });
});