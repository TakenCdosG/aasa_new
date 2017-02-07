/*
 * @file
 * JavaScript for aaap conference.
 *
 */
(function ($) {
    $(document).ready(function () { 

    	function updateBoxDiscountCoupons(){
    		var $aaap_discount_coupons = $('.webform-component--discount-codes');
			var $payment_method = $( "#edit-submitted-payment-method option:selected" ).val();
		 	if($payment_method != 'credit_card'){
		 		$aaap_discount_coupons.addClass('hidden');
		 	}else{
		 		$aaap_discount_coupons.removeClass('hidden');
		 	}
    	}
    	var $aaap_discount_coupons = $('.webform-component--discount-codes');
    	if ( $aaap_discount_coupons.length > 0 ) {
			$( "#edit-submitted-payment-method" ).change(function() {
			  updateBoxDiscountCoupons();
			});
    	}
    	updateBoxDiscountCoupons();
    });
})(jQuery);

jQuery(document).ready(function () { 
	jQuery('.webform-component--payment-method').css( "display", "none" );
	var select = ".webform-component--how-many-of-your-guests-will-be-attending-the-evening-event select";
	jQuery( select ).change(function() {
	  var number_guess = jQuery( select + " option:selected" ).val();
	  number_guess = Number(number_guess);
	  if(number_guess > 0){
	  	jQuery('.webform-component--payment-method').css( "display", "block" );
	  }else{
	  	jQuery('.webform-component--payment-method').css( "display", "none" );
	  }
	});
});