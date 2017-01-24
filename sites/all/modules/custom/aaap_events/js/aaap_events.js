/*
 * @file
 * JavaScript for aaap conference.
 *
 */
(function ($) {
    $(document).ready(function () { 
    	var $aaap_discount_coupons = $('.webform-component--discount-codes');
    	if ( $aaap_discount_coupons.length > 0 ) {
			$( "#edit-submitted-payment-method" ).change(function() {
			 	var $payment_method = $( "#edit-submitted-payment-method option:selected" ).val();
			 	if($payment_method != 'credit_card'){
			 		$aaap_discount_coupons.addClass('hidden');
			 	}else{
			 		$aaap_discount_coupons.removeClass('hidden');
			 	}
			});
    	}
    });
})(jQuery);