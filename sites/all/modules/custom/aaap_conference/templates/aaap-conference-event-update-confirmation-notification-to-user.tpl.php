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
                                                    <span style="font-size:large"><?php echo $params["site_name"]; ?>: Confirmation of Change to Registration - <?php echo $params["node_title"]; ?></span><br>
                                                </div>
                                            </td>
                                            <td nowrap="" width="121">
                                                <img src="https://aasa1.org/sites/all/themes/aasa/img/main-logo.jpg" width="121" height="118"/> <br>                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td width="98%">You can view more information about the event here: <a href="<?php echo $params["node_url"]; ?>"><?php echo $params["node_title"]; ?></a></td>
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
                                            <td nowrap="">
                                                <b>Name: </b>
                                            </td>
                                            <td width="98%">
                                                <?php echo $params["first_name"] . " " . $params["last_name"]; ?>             
                                            </td>
                                        </tr>
                                        <?php if (isset($params["general_sessions_confirmation_add_email"]) || isset($params["general_precourse_confirmation_add_email"]) || isset($params["general_celia_king_dinner_guest_confirmation_add_email"]) || isset($params["general_dinner_groups_confirmation_add_email"]) || isset($params["general_golf_outing_confirmation_add_email"])): ?>
                                            <tr>
                                                <td colspan="2" bgcolor="#007490" style="color:white">
                                                    <b>Payment Received:</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <table width="100%" cellspacing="0" cellpadding="0" width="100%" style="font-family:verdana,arial,helvetica;font-size:small">
                                                        <tbody>
                                                            <tr>
                                                                <td colspan="2">
                                                                    Thank you for registering. We have received your check payment for the following products:
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">
                                                                    <table border="0" cellpadding="1" cellspacing="0" width="100%" style="font-family:verdana,arial,helvetica;font-size:small">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td nowrap="">
                                                                                    &nbsp;
                                                                                </td>
                                                                                <td>      
                                                                                    &nbsp;
                                                                                </td>
                                                                            </tr>  
                                                                            <tr>
                                                                                <td colspan="2">
                                                                                    <table width="100%" style="font-family: verdana, arial, helvetica; font-size: small;">
                                                                                        <!-- 
                                                                                            //  +=====================+
                                                                                            //  | General Sessions    |
                                                                                            //  +=====================+
                                                                                        -->  
                                                                                        <?php if (isset($params["general_sessions_confirmation_add_email"])): ?>
                                                                                            <?php if (count($params["general_sessions_confirmation_add_email"]) > 0): ?>
                                                                                                <?php $payment_method = ""; ?>
                                                                                                <?php if ($params["general_sessions_confirmation_add_email"]->field_payment_method['und'][0]['value'] == "credit_card"): ?>
                                                                                                    <?php $payment_method = "Credit Card"; ?>
                                                                                                <?php elseif ($params["general_sessions_confirmation_add_email"]->field_payment_method['und'][0]['value'] == "mail_check"): ?>
                                                                                                    <?php $payment_method = "Mail in Check"; ?>
                                                                                                <?php endif; ?>
                                                                                                <tr>
                                                                                                    <td valign="top" nowrap="nowrap">
                                                                                                        <b>1 x </b>
                                                                                                    </td>
                                                                                                    <td width="98%">
                                                                                                        <?php echo $params["general_sessions_confirmation_add_email"]->title; ?> - <b><span>$<?php echo number_format((float) $params["general_sessions_confirmation_add_email"]->sell_price, 2, '.', ''); ?></span></b> <small>(Payment Method: <?php echo $payment_method; ?>).</small><br/>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            <?php endif; ?>
                                                                                        <?php endif; ?>
                                                                                        <!-- 
                                                                                            //  +=====================+
                                                                                            //  | Precourse           |
                                                                                            //  +=====================+
                                                                                        -->  
                                                                                        <?php if (isset($params["general_precourse_confirmation_add_email"])): ?>
                                                                                            <?php if (count($params["general_precourse_confirmation_add_email"]) > 0): ?>
                                                                                                <?php $payment_method = ""; ?>
                                                                                                <?php if ($params["general_precourse_confirmation_add_email"]->field_payment_method['und'][0]['value'] == "credit_card"): ?>
                                                                                                    <?php $payment_method = "Credit Card"; ?>
                                                                                                <?php elseif ($params["general_precourse_confirmation_add_email"]->field_payment_method['und'][0]['value'] == "mail_check"): ?>
                                                                                                    <?php $payment_method = "Mail in Check"; ?>
                                                                                                <?php endif; ?>
                                                                                                <tr>
                                                                                                    <td valign="top" nowrap="nowrap">
                                                                                                        <b>1 x </b>
                                                                                                    </td>
                                                                                                    <td width="98%">
                                                                                                        <?php echo $params["general_precourse_confirmation_add_email"]->title; ?> - <b><span>$<?php echo number_format((float) $params["general_precourse_confirmation_add_email"]->sell_price, 2, '.', ''); ?></span></b> <small>(Payment Method: <?php echo $payment_method; ?>).</small><br/>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            <?php endif; ?>
                                                                                        <?php endif; ?>
                                                                                        <!-- 
                                                                                            //  +===================================+
                                                                                            //  | Celia king dinner guest           |
                                                                                            //  +===================================+
                                                                                        -->  
                                                                                        <?php if (isset($params["general_celia_king_dinner_guest_confirmation_add_email"])): ?>
                                                                                            <?php if (count($params["general_celia_king_dinner_guest_confirmation_add_email"]) > 0): ?>
                                                                                                <?php $payment_method = ""; ?>
                                                                                                <?php if ($params["general_celia_king_dinner_guest_confirmation_add_email"]->field_payment_method['und'][0]['value'] == "credit_card"): ?>
                                                                                                    <?php $payment_method = "Credit Card"; ?>
                                                                                                <?php elseif ($params["general_celia_king_dinner_guest_confirmation_add_email"]->field_payment_method['und'][0]['value'] == "mail_check"): ?>
                                                                                                    <?php $payment_method = "Mail in Check"; ?>
                                                                                                <?php endif; ?>
                                                                                                <tr>
                                                                                                    <td valign="top" nowrap="nowrap">
                                                                                                        <b>1 x </b>
                                                                                                    </td>
                                                                                                    <td width="98%">
                                                                                                        <?php echo $params["general_celia_king_dinner_guest_confirmation_add_email"]->title; ?> - <b><span>$<?php echo number_format((float) $params["general_celia_king_dinner_guest_confirmation_add_email"]->sell_price, 2, '.', ''); ?></span></b> <small>(Payment Method: <?php echo $payment_method; ?>).</small><br/>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            <?php endif; ?>
                                                                                        <?php endif; ?>
                                                                                        <!-- 
                                                                                            //  +=========================+
                                                                                            //  | Dinner groups           |
                                                                                            //  +=========================+
                                                                                        -->  
                                                                                        <?php if (isset($params["general_dinner_groups_confirmation_add_email"])): ?>
                                                                                            <?php if (count($params["general_dinner_groups_confirmation_add_email"]) > 0): ?>
                                                                                                <?php $payment_method = ""; ?>
                                                                                                <?php if ($params["general_dinner_groups_confirmation_add_email"]->field_payment_method['und'][0]['value'] == "credit_card"): ?>
                                                                                                    <?php $payment_method = "Credit Card"; ?>
                                                                                                <?php elseif ($params["general_dinner_groups_confirmation_add_email"]->field_payment_method['und'][0]['value'] == "mail_check"): ?>
                                                                                                    <?php $payment_method = "Mail in Check"; ?>
                                                                                                <?php endif; ?>
                                                                                                <tr>
                                                                                                    <td valign="top" nowrap="nowrap">
                                                                                                        <b>1 x </b>
                                                                                                    </td>
                                                                                                    <td width="98%">
                                                                                                        <?php echo $params["general_dinner_groups_confirmation_add_email"]->title; ?> - <b><span>$<?php echo number_format((float) $params["general_dinner_groups_confirmation_add_email"]->sell_price, 2, '.', ''); ?></span></b> <small>(Payment Method: <?php echo $payment_method; ?>).</small><br/>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            <?php endif; ?>
                                                                                        <?php endif; ?>
                                                                                        <!-- 
                                                                                            //  +=========================+
                                                                                            //  | Golf Outing             |
                                                                                            //  +=========================+
                                                                                        -->  
                                                                                        <?php if (isset($params["general_golf_outing_confirmation_add_email"])): ?>
                                                                                            <?php if (count($params["general_golf_outing_confirmation_add_email"]) > 0): ?>
                                                                                                <?php $payment_method = ""; ?>
                                                                                                <?php if ($params["general_golf_outing_confirmation_add_email"]->field_payment_method['und'][0]['value'] == "credit_card"): ?>
                                                                                                    <?php $payment_method = "Credit Card"; ?>
                                                                                                <?php elseif ($params["general_golf_outing_confirmation_add_email"]->field_payment_method['und'][0]['value'] == "mail_check"): ?>
                                                                                                    <?php $payment_method = "Mail in Check"; ?>
                                                                                                <?php endif; ?>
                                                                                                <tr>
                                                                                                    <td valign="top" nowrap="nowrap">
                                                                                                        <b>1 x </b>
                                                                                                    </td>
                                                                                                    <td width="98%">
                                                                                                        <?php echo $params["general_golf_outing_confirmation_add_email"]->title; ?> - <b><span>$<?php echo number_format((float) $params["general_golf_outing_confirmation_add_email"]->sell_price, 2, '.', ''); ?></span></b> <small>(Payment Method: <?php echo $payment_method; ?>).</small><br/>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            <?php endif; ?>
                                                                                        <?php endif; ?>
                                                                                        <tr>
                                                                                            <td nowrap="">
                                                                                                &nbsp;
                                                                                            </td>
                                                                                            <td>      
                                                                                                &nbsp;
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td nowrap="">
                                                                    &nbsp;
                                                                </td>
                                                                <td>      
                                                                    &nbsp;
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                        <?php if (isset($params["general_precourse_confirmation_remove_email"]) || isset($params["general_celia_king_dinner_guest_confirmation_remove_email"]) || isset($params["general_dinner_groups_confirmation_remove_email"]) || isset($params["general_golf_outing_confirmation_remove_email"])): ?>
                                            <tr>
                                                <td colspan="2" bgcolor="#007490" style="color:white">
                                                    <b>Items Removed:</b><br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <table width="100%" cellspacing="0" cellpadding="0" width="100%" style="font-family:verdana,arial,helvetica;font-size:small">
                                                        <tbody>
                                                            <tr>
                                                                <td colspan="2">
                                                                    The following items have been removed from your registration:
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">
                                                                    <table border="0" cellpadding="1" cellspacing="0" width="100%" style="font-family:verdana,arial,helvetica;font-size:small">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td nowrap="">
                                                                                    &nbsp;
                                                                                </td>
                                                                                <td>      
                                                                                    &nbsp;
                                                                                </td>
                                                                            </tr>  
                                                                            <tr>
                                                                                <td colspan="2">
                                                                                    <table width="100%" style="font-family: verdana, arial, helvetica; font-size: small;">
                                                                                        <!-- 
                                                                                            //  +=====================+
                                                                                            //  | Precourse           |
                                                                                            //  +=====================+
                                                                                        -->  
                                                                                        <?php if (isset($params["general_precourse_confirmation_remove_email"])): ?>
                                                                                            <?php if (count($params["general_precourse_confirmation_remove_email"]) > 0): ?>
                                                                                                <?php $payment_method = ""; ?>
                                                                                                <?php if ($params["general_precourse_confirmation_remove_email"]->field_payment_method['und'][0]['value'] == "credit_card"): ?>
                                                                                                    <?php $payment_method = "Credit Card"; ?>
                                                                                                <?php elseif ($params["general_precourse_confirmation_remove_email"]->field_payment_method['und'][0]['value'] == "mail_check"): ?>
                                                                                                    <?php $payment_method = "Mail in Check"; ?>
                                                                                                <?php endif; ?>
                                                                                                <tr>
                                                                                                    <td valign="top" nowrap="nowrap">
                                                                                                        <b>1 x </b>
                                                                                                    </td>
                                                                                                    <td width="98%">
                                                                                                        <?php echo $params["general_precourse_confirmation_remove_email"]->title; ?> - <b><span>$<?php echo number_format((float) $params["general_precourse_confirmation_remove_email"]->sell_price, 2, '.', ''); ?></span></b> <small>(Payment Method: <?php echo $payment_method; ?>).</small><br/>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            <?php endif; ?>
                                                                                        <?php endif; ?>
                                                                                        <!-- 
                                                                                            //  +===================================+
                                                                                            //  | Celia king dinner guest           |
                                                                                            //  +===================================+
                                                                                        -->  
                                                                                        <?php if (isset($params["general_celia_king_dinner_guest_confirmation_remove_email"])): ?>
                                                                                            <?php if (count($params["general_celia_king_dinner_guest_confirmation_remove_email"]) > 0): ?>
                                                                                                <?php $payment_method = ""; ?>
                                                                                                <?php if ($params["general_celia_king_dinner_guest_confirmation_remove_email"]->field_payment_method['und'][0]['value'] == "credit_card"): ?>
                                                                                                    <?php $payment_method = "Credit Card"; ?>
                                                                                                <?php elseif ($params["general_celia_king_dinner_guest_confirmation_remove_email"]->field_payment_method['und'][0]['value'] == "mail_check"): ?>
                                                                                                    <?php $payment_method = "Mail in Check"; ?>
                                                                                                <?php endif; ?>
                                                                                                <tr>
                                                                                                    <td valign="top" nowrap="nowrap">
                                                                                                        <b>1 x </b>
                                                                                                    </td>
                                                                                                    <td width="98%">
                                                                                                        <?php echo $params["general_celia_king_dinner_guest_confirmation_remove_email"]->title; ?> - <b><span>$<?php echo number_format((float) $params["general_celia_king_dinner_guest_confirmation_remove_email"]->sell_price, 2, '.', ''); ?></span></b> <small>(Payment Method: <?php echo $payment_method; ?>).</small><br/>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            <?php endif; ?>
                                                                                        <?php endif; ?>
                                                                                        <!-- 
                                                                                            //  +=========================+
                                                                                            //  | Dinner groups           |
                                                                                            //  +=========================+
                                                                                        -->  
                                                                                        <?php if (isset($params["general_dinner_groups_confirmation_remove_email"])): ?>
                                                                                            <?php if (count($params["general_dinner_groups_confirmation_remove_email"]) > 0): ?>
                                                                                                <?php $payment_method = ""; ?>
                                                                                                <?php if ($params["general_dinner_groups_confirmation_remove_email"]->field_payment_method['und'][0]['value'] == "credit_card"): ?>
                                                                                                    <?php $payment_method = "Credit Card"; ?>
                                                                                                <?php elseif ($params["general_dinner_groups_confirmation_remove_email"]->field_payment_method['und'][0]['value'] == "mail_check"): ?>
                                                                                                    <?php $payment_method = "Mail in Check"; ?>
                                                                                                <?php endif; ?>
                                                                                                <tr>
                                                                                                    <td valign="top" nowrap="nowrap">
                                                                                                        <b>1 x </b>
                                                                                                    </td>
                                                                                                    <td width="98%">
                                                                                                        <?php echo $params["general_dinner_groups_confirmation_remove_email"]->title; ?> - <b><span>$<?php echo number_format((float) $params["general_dinner_groups_confirmation_remove_email"]->sell_price, 2, '.', ''); ?></span></b> <small>(Payment Method: <?php echo $payment_method; ?>).</small><br/>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            <?php endif; ?>
                                                                                        <?php endif; ?>
                                                                                        <!-- 
                                                                                            //  +=========================+
                                                                                            //  | Golf Outing             |
                                                                                            //  +=========================+
                                                                                        -->  
                                                                                        <?php if (isset($params["general_golf_outing_confirmation_remove_email"])): ?>
                                                                                            <?php if (count($params["general_golf_outing_confirmation_remove_email"]) > 0): ?>
                                                                                                <?php $payment_method = ""; ?>
                                                                                                <?php if ($params["general_golf_outing_confirmation_remove_email"]->field_payment_method['und'][0]['value'] == "credit_card"): ?>
                                                                                                    <?php $payment_method = "Credit Card"; ?>
                                                                                                <?php elseif ($params["general_golf_outing_confirmation_remove_email"]->field_payment_method['und'][0]['value'] == "mail_check"): ?>
                                                                                                    <?php $payment_method = "Mail in Check"; ?>
                                                                                                <?php endif; ?>
                                                                                                <tr>
                                                                                                    <td valign="top" nowrap="nowrap">
                                                                                                        <b>1 x </b>
                                                                                                    </td>
                                                                                                    <td width="98%">
                                                                                                        <?php echo $params["general_golf_outing_confirmation_remove_email"]->title; ?> - <b><span>$<?php echo number_format((float) $params["general_golf_outing_confirmation_remove_email"]->sell_price, 2, '.', ''); ?></span></b> <small>(Payment Method: <?php echo $payment_method; ?>).</small><br/>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            <?php endif; ?>
                                                                                        <?php endif; ?>
                                                                                        <tr>
                                                                                            <td nowrap="">
                                                                                                &nbsp;
                                                                                            </td>
                                                                                            <td>      
                                                                                                &nbsp;
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td nowrap="">
                                                                    &nbsp;
                                                                </td>
                                                                <td>      
                                                                    &nbsp;
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                        <tr>
                                            <td nowrap="">
                                                &nbsp;
                                            </td>
                                            <td>      
                                                &nbsp;
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <hr noshade="" size="1"><br>
                                                <p>
                                                    Thank you, <br /><br />
                                                    <?php echo $params["site_name"]; ?>
                                                </p>
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