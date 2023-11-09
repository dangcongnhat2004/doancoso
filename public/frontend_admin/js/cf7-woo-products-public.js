jQuery(document).ready(function ($) {
    'use strict';
    if ($('form.wpcf7-form').length > 0) {
        use_select_two();
        $('#categorySelected').on('change', function () {
            $('#spinner').show()
            $('#Chooseproduct').hide();
            $('#Chooseproduct select').empty();
            let cat = $(this).val();
            if (cat !== '') {
                $.ajax({
                    url: dd_cf7_ajax.ajaxurl,
                    data: {
                        'action': 'dd_cf7_get_wc_products',
                        'category': cat,
                    },
                    type: 'POST',
                    dataType: 'HTML'
                }).done(function (xhr) {
                    $('#spinner').hide();
                    $('#Chooseproduct select').append(xhr);
                    $('#Chooseproduct').show();
                }).fail(function (xhr) {
                    console.log(xhr)
                });
            } else {
                $('#spinner').hide();
            }
        });
    }
});
jQuery(document).on('ajaxComplete', function () {
    use_select_two();
});
/* Select 2 Function */
function use_select_two() {
    if (dd_cf7_ajax.select2 === 'true' && jQuery('form.wpcf7-form').length > 0 ) {
        jQuery('select.duck-select').val(null).trigger('change').select2({
            placeholder: dd_cf7_ajax.placeholder,
        });
        jQuery('#categorySelected').select2({
            placeholder: dd_cf7_ajax.cat_placeholder,
        });
    }
}