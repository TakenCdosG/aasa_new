jQuery(document).ready(function () {

    jQuery('.form-item-roles .form-checkbox').change(
            function () {
                //alert('Cambió!'+jQuery(this).val());
                jQuery('.form-item-roles .form-checkbox:enabled ').attr('checked', false);
                jQuery(this).attr('checked', true);
            }
    );
    //
    jQuery('.uc-cart-checkout-form #edit-cancel').click(
            function (e) {
                e.preventDefault();

                window.location.href = "/cancel-order";
            }
    );
    //-> Remove: free_membership_application_request.
    jQuery('#edit-field-choose-payment-method-und option[value=free_membership_application_request]').remove();
});