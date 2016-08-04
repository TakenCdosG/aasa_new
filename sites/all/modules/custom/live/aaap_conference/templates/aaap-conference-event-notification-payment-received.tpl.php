<table width="95%" border="0" cellspacing="0" cellpadding="1" align="center" bgcolor="#006699" style="font-family:verdana,arial,helvetica;font-size:small">
    <tbody>
        <tr>
            <td>
                <table width="100%" border="0" cellspacing="0" cellpadding="5" align="center" bgcolor="#FFFFFF" style="font-family:verdana,arial,helvetica;font-size:small">
                    <tbody>
                        <tr valign="top">
                            <td>
                                <table width="100%" style="font-family:verdana,arial,helvetica;font-size:small">
                                    <tbody>
                                        <tr>
                                            <td>
                                            </td>
                                            <td width="98%">
                                                <div style="padding-left:1em">
                                                    <?php if ($params["operation"] == "insert"): ?>
                                                        <span style="font-size:large">Thank you for registering for the <?php echo $params["site_name"]; ?> <?php echo $params["title"]; ?></span><br>
                                                    <?php else: ?>
                                                        <span style="font-size:large">Thank you for updating your <?php echo $params["site_name"]; ?> <?php echo $params["title"]; ?></span><br>
                                                    <?php endif; ?>
                                                </div>
                                            </td>
                                            <td nowrap="" width="121">
                                                <img src="https://aasa1.org/sites/all/themes/aasa/img/main-logo.jpg" width="121" height="118"/> <br>                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td width="98%">More information about the event here: <a href="<?php echo $params["node_url"]; ?>"><?php echo $params["title"]; ?></a></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr valign="top">
                            <td>
                                <table cellpadding="4" cellspacing="0" border="0" width="100%" style="font-family:verdana,arial,helvetica;font-size:small">
                                    <tbody>
                                        <tr>
                                            <td colspan="2" bgcolor="#007490" style="color:white">
                                                <b>Purchasing Information:</b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap="">
                                                <b>E-mail Address:</b>
                                            </td>
                                            <td width="98%">
                                                <a href="mailto:<?php print $params["primary_email"]; ?>" target="_blank"><?php print $params["primary_email"]; ?></a>                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <table width="100%" cellspacing="0" cellpadding="0" style="font-family:verdana,arial,helvetica;font-size:small">
                                                    <tbody><tr>
                                                            <td valign="top" width="50%">
                                                                <b>Billing Address:</b><br>
                                                                <?php print $params["billing_first_name"]; ?> <?php print $params["billing_last_name"]; ?><br>
                                                                <?php print $params["billing_street1"]; ?><br>
                                                                <?php print $params["billing_city"]; ?>, <?php print $params["billing_postal_code"]; ?><br>
                                                                <br>
                                                                <b>Billing Phone:</b><br>
                                                                <a href="tel:<?php print $params["billing_phone"]; ?>" value="<?php print $params["billing_phone"]; ?>" target="_blank"><?php print $params["billing_phone"]; ?></a><br>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap="">
                                                <b>Order Grand Total:</b>
                                            </td>
                                            <td width="98%">
                                                <b>$<?php print floatval($params["order_total"]); ?>.00</b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td nowrap="">
                                                <b>Payment Method:</b>
                                            </td>
                                            <td width="98%">
                                                Credit card                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" bgcolor="#007490" style="color:white">
                                                <b>Order Summary:</b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <table border="0" cellpadding="1" cellspacing="0" width="100%" style="font-family:verdana,arial,helvetica;font-size:small">
                                                    <tbody>
                                                        <tr>
                                                            <td nowrap="">
                                                                <b>Order Date: </b>
                                                            </td>
                                                            <td width="98%">
                                                                <?php print $params["order_date"]; ?>               
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td nowrap="">
                                                                Products Subtotal:&nbsp;
                                                            </td>
                                                            <td width="98%">
                                                                $<?php print floatval($params["order_total"]); ?>.00                     
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>&nbsp;</td>
                                                            <td>------</td>
                                                        </tr>
                                                        <tr>
                                                            <td nowrap="">
                                                                <b>Total for this Order:&nbsp;</b>
                                                            </td>
                                                            <td>
                                                                <b>$<?php print floatval($params["order_total"]); ?>.00</b>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">
                                                                <br>
                                                                <br>
                                                                <b>Products on order:&nbsp;</b>
                                                                <table width="100%" style="font-family: verdana, arial, helvetica; font-size: small;">
                                                                    <?php foreach ($params["products"] as $product): ?>
                                                                        <tr>
                                                                            <td valign="top" nowrap="nowrap">
                                                                                <b><?php print $product->qty; ?> x </b>
                                                                            </td>
                                                                            <td width="98%">
                                                                                <b><?php print $product->title; ?> - <span>$<?php print floatval($product->price); ?>.00</span></b><br />
                                                                            </td>
                                                                        </tr>
                                                                    <?php endforeach; ?>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <hr noshade="" size="1"><br>
                                                <p>
                                                    <b>Registering:</b><br>
                                                    Event Member information: <?php echo $params["member_first_name"]; ?> <?php echo $params["member_last_name"]; ?><br />
                                                    Billing information: <?php echo $params["billing_first_name"]; ?> <?php echo $params["billing_last_name"]; ?><br /><br />
                                                    Name: <?php echo $params["first_name"] . " " . $params["last_name"]; ?> <br />
                                                    Organization:<?php echo$params["organization"]; ?><br />
                                                    Email: <?php echo $params["email"]; ?><br />
                                                    Address Line 1:<?php echo $params["address_line_1"]; ?><br />
                                                    Address Line 2:<?php echo $params["address_line_2"]; ?><br />
                                                    City:<?php echo $params["city"]; ?><br />
                                                    State/Province:<?php echo $params["state_province"]; ?><br />
                                                    Zip/Postal Code:<?php echo $params["zip_postal_code"]; ?><br /><br />
                                                    Thank you, <br /><br />
                                                    <?php echo $params["site_name"]; ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>