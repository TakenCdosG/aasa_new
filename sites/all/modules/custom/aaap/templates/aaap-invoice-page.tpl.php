<?php
/**
 * @file
 * This file is the default customer invoice template for Ubercart.
 *
 * Available variables:
 * - $products: An array of product objects in the order, with the following
 *   members:
 *   - title: The product title.
 *   - model: The product SKU.
 *   - qty: The quantity ordered.
 *   - total_price: The formatted total price for the quantity ordered.
 *   - individual_price: If quantity is more than 1, the formatted product
 *     price of a single item.
 *   - details: Any extra details about the product, such as attributes.
 * - $line_items: An array of line item arrays attached to the order, each with
 *   the following keys:
 *   - line_item_id: The type of line item (subtotal, shipping, etc.).
 *   - title: The line item display title.
 *   - formatted_amount: The formatted amount of the line item.
 * - $shippable: TRUE if the order is shippable.
 *
 * Tokens: All site, store and order tokens are also available as
 * variables, such as $site_logo, $store_name and $order_first_name.
 *
 * Display options:
 * - $op: 'view', 'print', 'checkout-mail' or 'admin-mail', depending on
 *   which variant of the invoice is being rendered.
 * - $business_header: TRUE if the invoice header should be displayed.
 * - $shipping_method: TRUE if shipping information should be displayed.
 * - $help_text: TRUE if the store help message should be displayed.
 * - $email_text: TRUE if the "do not reply to this email" message should
 *   be displayed.
 * - $store_footer: TRUE if the store URL should be displayed.
 * - $thank_you_message: TRUE if the 'thank you for your order' message
 *   should be displayed.
 *
 * @see template_preprocess_uc_order()
 */
?>

<?php
/**
 * @file
 * Default theme implementation to display a printable Ubercart invoice.
 *
 * @see template_preprocess_uc_order_invoice_page()
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

    <head>
        <?php print $head; ?>
        <title><?php print $head_title; ?></title>
        <style type="text/css">
            .buttons {
                text-align: right;
                margin: 0 1em 1em 0;
            }
        </style>
        <style type="text/css" media="print">
            .buttons {
                display: none;
            }
        </style>
    </head>
    <body>
        <div class="buttons">
            <input type="button" value="<?php print t('Print invoice'); ?>" onclick="window.print();" />
        </div>

        <table width="95%" border="0" cellspacing="0" cellpadding="1" align="center" bgcolor="#007490" style="font-family: verdana, arial, helvetica; font-size: small;">
            <tr>
                <td>
                    <table width="100%" border="0" cellspacing="0" cellpadding="5" align="center" bgcolor="#FFFFFF" style="font-family: verdana, arial, helvetica; font-size: small;">
                        <?php if ($params['business_header']): ?>
                            <tr valign="top">
                                <td>
                                    <table width="100%" style="font-family: verdana, arial, helvetica; font-size: small;">
                                        <tr>
                                            <td>
                                                <?php if (isset($params['site_logo'])): ?>
                                                    <a href="http://aasa1.org" title="Home" rel="home" id="logo">
                                                        <img src="<?php print $params['site_logo']; ?>">
                                                    </a>
                                                <?php endif; ?>

                                            </td>
                                            <td width="98%">
                                                <div style="padding-left: 1em;">
                                                    <span style="font-size: large;"><?php print $params['site_name']; ?></span><br />
                                                    <?php print $site_slogan; ?>
                                                </div>
                                            </td>
                                            <td nowrap="nowrap">
                                                <?php print $store_address; ?><br /><?php print $store_phone; ?>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        <?php endif; ?>

                        <tr valign="top">
                            <td>
                                <?php if ($thank_you_message): ?>
                                    <p><b><?php print t('Thanks for your order, !order_first_name!', array('!order_first_name' => $order_first_name)); ?></b></p>
                                    <?php if (isset($order->data['new_user'])): ?>
                                        <p><b><?php print t('An account has been created for you with the following details:'); ?></b></p>
                                        <p><b><?php print t('Username:'); ?></b> <?php print $order_new_username; ?><br />
                                            <b><?php print t('Password:'); ?></b> <?php print $order_new_password; ?></p>
                                    <?php endif; ?>

                                    <p><b><?php print t('Want to manage your order online?'); ?></b><br />
                                        <?php print t('If you need to check the status of your order, please visit our home page at !store_link and click on "My account" in the menu or login with the following link:', array('!store_link' => $store_link)); ?>
                                        <br /><br /><?php print $site_login_link; ?></p>
                                <?php endif; ?>

                                <table cellpadding="4" cellspacing="0" border="0" width="100%" style="font-family: verdana, arial, helvetica; font-size: small;">
                                    <tr>
                                        <td colspan="2" bgcolor="#007490" style="color: white;">
                                            <b><?php print t('Purchasing Information:'); ?></b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td nowrap="nowrap">
                                            <b><?php print t('Name:'); ?></b>
                                        </td>
                                        <td width="98%">
                                            <?php print $params['billing_first_name']; ?> <?php print $params['billing_last_name']; ?><br />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td nowrap="nowrap">
                                            <b><?php print t('E-mail Address:'); ?></b>
                                        </td>
                                        <td width="98%">
                                            <?php print $params['primary_email']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">

                                            <table width="100%" cellspacing="0" cellpadding="0" style="font-family: verdana, arial, helvetica; font-size: small;">
                                                <tr>
                                                    <td valign="top" width="50%">
                                                        <b><?php print t('Billing Address:'); ?></b><br />
                                                        <?php print $params['billing_company']; ?><br />
                                                        <?php print $params['billing_street1']; ?><br />
                                                        <?php if (!empty($params['billing_street2'])): ?>
                                                            <?php print $params['billing_street2']; ?><br />
                                                        <?php endif; ?>
                                                        <?php print $params['billing_city']; ?>, <?php print $params['billing_zone']; ?> <?php print $params['billing_postal_code']; ?><br />
                                                        <br />
                                                        <?php if (isset($params['billing_phone'])): ?>
                                                            <b><?php print t('Billing Phone:'); ?></b><br />
                                                            <?php print $order_billing_phone; ?><br />
                                                        <?php endif; ?>
                                                    </td>
                                                    <?php if ($shippable): ?>
                                                        <td valign="top" width="50%">
                                                            <b><?php print t('Shipping Address:'); ?></b><br />
                                                            <?php print $order_shipping_address; ?><br />
                                                            <br />
                                                            <b><?php print t('Shipping Phone:'); ?></b><br />
                                                            <?php print $order_shipping_phone; ?><br />
                                                        </td>
                                                    <?php endif; ?>
                                                </tr>
                                            </table>

                                        </td>
                                    </tr>
                                    <?php if ($params['order_type'] != "national_conference_registration"): ?>
                                        <tr>
                                            <td nowrap="nowrap">
                                                <b><?php print t('Order Grand Total:'); ?></b>
                                            </td>
                                            <td width="98%">
                                                <b><?php print $params['total_order']; ?></b>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                    <tr>
                                        <td nowrap="nowrap">
                                            <b><?php print t('Payment Method:'); ?></b>
                                        </td>
                                        <td width="98%">
                                            <?php print $params['payment_method']; ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" bgcolor="#007490" style="color: white;">
                                            <b><?php print t('Order Summary:'); ?></b>
                                        </td>
                                    </tr>

                                    <?php if ($shippable): ?>
                                        <tr>
                                            <td colspan="2" bgcolor="#EEEEEE">
                                                <font color="#CC6600"><b><?php print t('Shipping Details:'); ?></b></font>
                                            </td>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <td colspan="2">

                                            <table border="0" cellpadding="1" cellspacing="0" width="100%" style="font-family: verdana, arial, helvetica; font-size: small;">
                                                <tr>
                                                    <td nowrap="nowrap">
                                                        <b><?php print t('Order #:'); ?></b>
                                                    </td>
                                                    <td width="98%">
                                                        <?php print $params['order_id']; ?>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td nowrap="nowrap">
                                                        <b><?php print t('Order Date: '); ?></b>
                                                    </td>
                                                    <td width="98%">
                                                        <?php print $params['date']; ?>
                                                    </td>
                                                </tr>

                                                <?php if ($shipping_method && $shippable): ?>
                                                    <tr>
                                                        <td nowrap="nowrap">
                                                            <b><?php print t('Shipping Method:'); ?></b>
                                                        </td>
                                                        <td width="98%">
                                                            <?php print $order_shipping_method; ?>
                                                        </td>
                                                    </tr>
                                                <?php endif; ?>

                                                <?php if ($params['order_type'] != "national_conference_registration"): ?>
                                                    <tr>
                                                        <td nowrap="nowrap">
                                                            <?php print t('Products Subtotal:'); ?>&nbsp;
                                                        </td>
                                                        <td width="98%">
                                                            <?php print $params['products_subtotal']; ?>
                                                        </td>
                                                    </tr>

                                                    <?php foreach ($line_items as $item): ?>
                                                        <?php if ($item['type'] == 'subtotal' || $item['type'] == 'total') continue; ?>
                                                        <tr>
                                                            <td nowrap="nowrap">
                                                                <?php print $item['title']; ?>:
                                                            </td>
                                                            <td>
                                                                <?php print $item['formatted_amount']; ?>
                                                            </td>
                                                        </tr>

                                                    <?php endforeach; ?>

                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td>------</td>
                                                    </tr>

                                                    <tr>
                                                        <td nowrap="nowrap">
                                                            <b><?php print t('Total for this Order:'); ?>&nbsp;</b>
                                                        </td>
                                                        <td>
                                                            <b><?php print $params['total_order']; ?></b>
                                                        </td>
                                                    </tr>
                                                <?php endif; ?>
                                                <tr>
                                                    <td colspan="2">
                                                        <br /><b><?php print t('Products on order:'); ?>&nbsp;</b>

                                                        <table width="100%" style="font-family: verdana, arial, helvetica; font-size: small;">
                                                            <!-- national_conference_registration -->
                                                            <?php if ($params['order_type'] == "national_conference_registration"): ?>

                                                                <?php foreach ($params['products'] as $product): ?>

                                                                    <?php $payment_method = ""; ?>
                                                                    <?php if ($product["field_payment_method"]['und'][0]['value'] == "credit_card"): ?>
                                                                        <?php $payment_method = "Credit Card"; ?>
                                                                    <?php elseif ($product["field_payment_method"]['und'][0]['value'] == "mail_check"): ?>
                                                                        <?php $payment_method = "Mail in Check"; ?>
                                                                    <?php endif; ?>
                                                                    <tr>
                                                                        <td valign="top" nowrap="nowrap">
                                                                            <b>1 x </b>
                                                                        </td>
                                                                        <td width="98%">
                                                                            <?php echo $product["title"]; ?> - <b><span>$<?php echo floatval($product["sell_price"]); ?>.00</span></b> <small>(Payment Method: <?php echo $payment_method; ?>).</small><br/>
                                                                        </td>
                                                                    </tr>
                                                                    <?php $total = $total + floatval($product["sell_price"]); ?>
                                                                <?php endforeach; ?>

                                                                <?php if (isset($params["subtotal"])): ?>
                                                                    <tr>
                                                                        <td valign="top" nowrap="nowrap">
                                                                            <b>Subtotal</b>
                                                                        </td>
                                                                        <td width="98%">
                                                                            <b>$<?php echo number_format((float) $params["subtotal"]["amount"], 2, '.', ''); ?></b><br/>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>&nbsp;</td>
                                                                        <td>------</td>
                                                                    </tr>
                                                                <?php endif; ?>

                                                                <?php $calculate = FALSE; ?>
                                                                <?php if (isset($params["subtotal"]["amount"]) && isset($params["coupon"])): ?>
                                                                    <?php $total = floatval($params["subtotal"]["amount"]); ?>
                                                                    <?php $calculate = TRUE; ?>
                                                                <?php endif; ?>    

                                                                <?php if (isset($params["coupon"])): ?>
                                                                    <?php foreach ($params["coupon"] as $coupon): ?>
                                                                        <tr>
                                                                            <td valign="top" nowrap="nowrap">
                                                                                <?php echo $coupon["title"]; ?>
                                                                            </td>
                                                                            <td width="98%">
                                                                                <b><span>-$<?php echo number_format(((float) $coupon["amount"] * -1), 2, '.', ''); ?></span></b><br/>
                                                                            </td>
                                                                        </tr>
                                                                        <?php if ($calculate): ?>
                                                                            <?php $total = $total + floatval($coupon["amount"]); ?>
                                                                        <?php endif; ?>
                                                                    <?php endforeach; ?>
                                                                <?php endif; ?>

                                                                <tr>
                                                                    <td nowrap="">
                                                                        <h3>Total for this Order:&nbsp;</h3>
                                                                    </td>
                                                                    <td width="98%">
                                                                        <h3><b>$<?php echo number_format((float) $total, 2, '.', ''); ?></b></h3>                   
                                                                    </td>
                                                                </tr>

                                                            <?php else: ?>
                                                                <?php foreach ($params['products'] as $product): ?>
                                                                    <tr>
                                                                        <td valign="top" nowrap="nowrap">
                                                                            <b><?php print $product->qty; ?> x </b>
                                                                        </td>
                                                                        <td width="98%">
                                                                            <b><?php print $product->title; ?> - <?php print $product->total_price; ?></b>
                                                                            <?php if (isset($product->individual_price)): ?>
                                                                                <?php print $product->individual_price; ?><br />
                                                                            <?php endif; ?>
                                                                            <?php if (isset($product->model)): ?>
                                                                                <?php print t('SKU'); ?>: <?php print $product->model; ?><br />
                                                                            <?php endif; ?>
                                                                            <?php if (isset($product->details)): ?>
                                                                                <?php print $product->details; ?> 
                                                                            <?php endif; ?>
                                                                        </td>
                                                                    </tr>
                                                                <?php endforeach; ?>
                                                            <?php endif; ?>

                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <hr noshade="" size="1"/><br/>
                                                    </td>
                                                </tr>
                                                <?php if ($params['payment_method'] == "Mail in Check"): ?>
                                                    <tr>
                                                        <td colspan="2">
                                                            Please make check payable to AASA and mail to the address below.<br/>
                                                            <?php echo $params["site_name"]; ?><br/>
                                                            c/o Benson Won<br/>
                                                            2221 Stockton Boulevard<br/>
                                                            Cypress Building 3119<br/>
                                                            Sacramento, CA  95817<br/>
                                                            Registration Receipt<br/>
                                                            Date: <?php echo $params['date']; ?> <br/>
                                                            Payment Type: Check <br/>
                                                            Grand Total <br/>
                                                            <?php print $params['total_order']; ?><br/>
                                                            Name: <?php print $params['billing_first_name']; ?> <?php print $params['billing_last_name']; ?><br/>
                                                            Email: <?php echo $params["primary_email"]; ?><br/>
                                                            Billing Address: <br/>
                                                            <?php print $params['billing_company']; ?><br />
                                                            <?php print $params['billing_street1']; ?><br />
                                                            <?php if (!empty($params['billing_street2'])): ?>
                                                                <?php print $params['billing_street2']; ?><br />
                                                            <?php endif; ?>
                                                            <?php print $params['billing_city']; ?>, <?php print $params['billing_zone']; ?> <?php print $params['billing_postal_code']; ?><br />
                                                            <br />
                                                            <?php if (isset($params['billing_phone'])): ?>
                                                                <b><?php print t('Billing Phone:'); ?></b><br />
                                                                <?php print $order_billing_phone; ?><br />
                                                            <?php endif; ?>
                                                        </td>
                                                    </tr>
                                                <?php endif; ?>
                                                <tr>
                                                    <td colspan="2">
                                                        Thank you, <br/>
                                                        <?php print $params['site_name']; ?> 
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                    </tr>

                                    <?php if ($help_text || $email_text || $store_footer): ?>
                                        <tr>
                                            <td colspan="2">
                                                <hr noshade="noshade" size="1" /><br />

                                                <?php if ($help_text): ?>
                                                    <p><b><?php print t('Where can I get help with reviewing my order?'); ?></b><br />
                                                        <?php print t('To learn more about managing your orders on !store_link, please visit our <a href="!store_help_url">help page</a>.', array('!store_link' => $store_link, '!store_help_url' => $store_help_url)); ?>
                                                        <br /></p>
                                                <?php endif; ?>

                                                <?php if ($email_text): ?>
                                                    <p><?php print t('Please note: This e-mail message is an automated notification. Please do not reply to this message.'); ?></p>

                                                    <p><?php print t('Thanks again for shopping with us.'); ?></p>
                                                <?php endif; ?>

                                                <?php if ($store_footer): ?>
                                                    <p><b><?php print $store_link; ?></b><br /><b><?php print $site_slogan; ?></b></p>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endif; ?>

                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>
