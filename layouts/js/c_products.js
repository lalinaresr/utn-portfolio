jQuery(document).ready(function ($) {

    $('.btn-products-order').click(function () {
        let checkboxes = $('.form-products :checkbox[required]');
        checkboxes.change(() => {
            if (checkboxes.is(':checked')) {
                checkboxes.removeAttr('required');
            } else {
                checkboxes.attr('required');
            }
        });
    });
});