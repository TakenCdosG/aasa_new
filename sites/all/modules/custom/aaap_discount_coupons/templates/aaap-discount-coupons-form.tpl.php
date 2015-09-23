<div class="row aaap_discount_coupons">
    <div class="col-md-6">
        <div class="box-content">
            <div class="box-codes">
                <?php if (count($codes) > 0): ?>
                    <div class="info">These discount codes have been applied to your order.</div>
                    <?php foreach ($codes as $key => $code): ?>
                        <div class="box-coupon" id="box-coupon-<?php echo $code; ?>">
                            Discount Code <?php echo $code; ?>
                            <small><a class="red discount-coupon-remove" id="discount-coupon-remove" data-code="<?php echo $code; ?>" href="javascript:void(0);"> Remove</a></small>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="info hide">These discount codes have been applied to your order.</div>
                <?php endif; ?>
            </div>

            <div class="form-item form-type-textfield form-item-code">
                <label class="label-title">Discount Code <small>Do you have a discount code?</small></label>
                <div class="box-messages">
                </div>
                <input type="text" id="discount-coupon" name="code" value="" size="25" maxlength="128" class="form-text">
                <div class="description">Enter a discount code and click "Apply to order" below.</div>
            </div>

            <a class="btn btn-info btn-block form-submit-aaap-discount-coupons ajax-processed">Apply to order</a>

        </div>
    </div>
</div>