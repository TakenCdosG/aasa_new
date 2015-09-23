/*
 * @file
 * JavaScript for aaap_discount_coupons.
 *
 */
(function ($) {
    $(document).ready(function () {
        //-> Apply Discount Code.
        $('body').on('click', 'a.form-submit-aaap-discount-coupons', function () {
            var code = $("#discount-coupon").val();
            var nid = Drupal.settings.aaap_discount_coupons.nid;
            $.ajax({
                url: Drupal.settings.basePath + 'discount_code/apply',
                type: "POST",
                dataType: "json",
                data: {code: code, nid: nid},
                success: function (response) {
                    if (response.status) {
                        $(".box-messages .messages").remove();
                        $(".box-content .box-codes").append(response.message);
                        $("#discount-coupon").val("");
                        $('.box-content .box-codes').show();
                        $('.aaap_discount_coupons .box-codes .info').show();
                    } else {
                        $(".box-messages .messages").remove();
                        $(".box-messages").html(response.message);
                    }
                }
            });
        });

        //-> Remove Discount code
        $('body').on('click', 'a.discount-coupon-remove', function () {
            var code = $(this).attr('data-code');
            var nid = Drupal.settings.aaap_discount_coupons.nid;
            $.ajax({
                url: Drupal.settings.basePath + 'discount_code/remove',
                type: "POST",
                dataType: "json",
                data: {code: code, nid: nid},
                success: function (response) {
                    if (response.status) {
                        $(".box-messages .messages").remove();
                        $("#discount-coupon").val("");
                        $("#box-coupon-" + code).remove();
                        if (response.hide_info) {
                            $('.box-content .box-codes').hide();
                            $('.aaap_discount_coupons .box-codes .info').hide();
                        } else {
                            $('.box-content .box-codes').show();
                            $('.aaap_discount_coupons .box-codes .info').show();
                        }
                    } else {
                        $(".box-messages .messages").remove();
                        $(".box-messages").html(response.message);
                    }
                    $(".box-messages .messages").remove();
                    //$(".box-messages").html(response.message);
                    $("#discount-coupon").val("");
                }
            });
        });

    });
})(jQuery);