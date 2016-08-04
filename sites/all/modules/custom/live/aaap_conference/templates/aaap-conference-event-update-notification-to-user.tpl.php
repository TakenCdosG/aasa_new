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
                                                    <span style="font-size:large">Thank you for updating your <?php echo $params["site_name"]; ?> <?php echo $params["node_title"]; ?></span><br>
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
                                            <td colspan="2" bgcolor="#007490" style="color:white">
                                                <b>Order Summary:</b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <table width="100%" cellspacing="0" cellpadding="0" width="100%" style="font-family:verdana,arial,helvetica;font-size:small">
                                                    <tbody>
                                                        <tr>
                                                            <td nowrap="">
                                                                <b>Name: </b>
                                                            </td>
                                                            <td width="98%">
                                                                <?php echo $params["first_name"] . " " . $params["last_name"]; ?>            
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td nowrap="">
                                                                <b>Credentials: </b>
                                                            </td>
                                                            <td width="98%">
                                                                <?php echo $params["credentials"]; ?>             
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td nowrap="">
                                                                <b>Title: </b>
                                                            </td>
                                                            <td width="98%">
                                                                <?php echo $params["title"]; ?>             
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td nowrap="">
                                                                <b>Organization: </b>
                                                            </td>
                                                            <td width="98%">
                                                                <?php echo $params["organization"]; ?>             
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td nowrap="">
                                                                <b>Street Address: </b>
                                                            </td>
                                                            <td width="98%">
                                                                <?php echo $params["street_address"]; ?>             
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td nowrap="">
                                                                <b>City, State, Zip: </b>
                                                            </td>
                                                            <td width="98%">
                                                                <?php echo $params["city_state_zip"]; ?>             
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td nowrap="">
                                                                <b>Email Address: </b>
                                                            </td>
                                                            <td width="98%">
                                                                <?php echo $params["email_address"]; ?>             
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td nowrap="">
                                                                <b>Phone Number: </b>
                                                            </td>
                                                            <td width="98%">
                                                                <?php echo $params["phone_number"]; ?>             
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td nowrap="">
                                                                <b>Preferred Name On Badge: </b>
                                                            </td>
                                                            <td width="98%">
                                                                <?php echo $params["preferred_name_on_badge"]; ?>             
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
                                                        <?php if ($params["i_am_a_veteran_attendee_and_am_willing_to_serve_as_an_aasa_buddy_to_new_attendee"] == "yes" || $params["i_am_a_veteran_attendee_and_am_willing_to_serve_as_an_aasa_buddy_to_new_attendee"] == "no"): ?>
                                                            <tr>
                                                                <td nowrap="">
                                                                    <b style="margin: 10px 10px 10px 0px;display: block;position: relative;">I am a veteran attendee and <br>am willing to serve as an <br>AASA buddy to new attendee: </b>
                                                                </td>
                                                                <td width="98%">
                                                                    <?php if ($params["i_am_a_veteran_attendee_and_am_willing_to_serve_as_an_aasa_buddy_to_new_attendee"] == "yes"): ?>
                                                                        Yes
                                                                    <?php else: ?>
                                                                        No
                                                                    <?php endif; ?>        
                                                                </td>
                                                            </tr>
                                                        <?php endif; ?>
                                                        <?php if ($params["i_am_a_first_time_attendee_and_wish_to_be_paired_with_an_aasa_buddy"] == "yes" || $params["i_am_a_first_time_attendee_and_wish_to_be_paired_with_an_aasa_buddy"] == "no"): ?>
                                                            <tr>
                                                                <td nowrap="">
                                                                    <b style="margin: 10px 10px 10px 0px;   display: block;   position: relative;">I am a first time attendee and<br> wish to be paired with an<br> AASA buddy: </b>
                                                                </td>
                                                                <td width="98%">
                                                                    <?php if ($params["i_am_a_first_time_attendee_and_wish_to_be_paired_with_an_aasa_buddy"] == "yes"): ?>
                                                                        Yes
                                                                    <?php else: ?>
                                                                        No
                                                                    <?php endif; ?>        
                                                                </td>
                                                            </tr>
                                                        <?php endif; ?>
                                                        <?php if (!empty($params["hot_topics"])): ?>    
                                                            <tr>
                                                                <td nowrap="">
                                                                    <b>Hot Topics: </b>
                                                                </td>
                                                                <td width="98%">
                                                                    <?php if ($params["hot_topics"] == "managing_competing_missions_clinical_research_and_education"): ?>
                                                                        Managing Competing Missions: Clinical, Research and Education
                                                                    <?php elseif ($params["hot_topics"] == "best_practices_in_incentive_plan_models"): ?>
                                                                        Best Practices in Incentive Plan Models
                                                                    <?php elseif ($params["hot_topics"] == "techniques_for_improving_patient_experience_scores"): ?>  
                                                                        Techniques for Improving Patient Experience Scores
                                                                    <?php elseif ($params["hot_topics"] == "practice_acquisition_integration_demonstrating_the_value_to_physicians_and_staff"): ?>  
                                                                        Practice acquisition/Integration: Demonstrating the Value to Physicians and Staff
                                                                    <?php elseif ($params["hot_topics"] == "the_changing_landscape_of_resident_training"): ?>  
                                                                        The Changing Landscape of Resident Training
                                                                    <?php elseif ($params["hot_topics"] == "funding_clinical_trials"): ?>  
                                                                        Funding Clinical Trials
                                                                    <?php elseif ($params["hot_topics"] == "advocacy_roundtable"): ?>  
                                                                        Advocacy Roundtable
                                                                    <?php endif; ?>      
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
                                                            <td nowrap="">
                                                                <span style="font-weight: bold;color: #00738F;"><b>General Sessions</b></span>
                                                            </td>
                                                            <td width="98%">
                                                                &nbsp;     
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td nowrap="">
                                                                <b>Registration type: </b>
                                                            </td>
                                                            <td width="98%">
                                                                <?php echo $params["general_sessions"]->title; ?> - <b>$<?php echo floatval($params["general_sessions"]->sell_price); ?>.00</b>    
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td nowrap="">
                                                                <b>Registration Date: </b>
                                                            </td>
                                                            <td width="98%">
                                                                <?php echo date("j F Y", $params["general_sessions"]->changed); ?>   
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td nowrap="">
                                                                <b>Payment Method: </b>
                                                            </td>
                                                            <td width="98%">
                                                                <?php if ($params["general_sessions"]->field_payment_method['und'][0]['value'] == "credit_card"): ?>
                                                                    Credit Card
                                                                <?php elseif ($params["general_sessions"]->field_payment_method['und'][0]['value'] == "mail_check"): ?>
                                                                    Mail in Check
                                                                <?php endif; ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td nowrap="">
                                                                <b>Status: </b>
                                                            </td>
                                                            <td width="98%">
                                                                <?php if ($params["general_sessions"]->field_confirmed['und'][0]['value'] == "confirmed"): ?>
                                                                    Confirmed
                                                                <?php elseif ($params["general_sessions"]->field_confirmed['und'][0]['value'] == "not-confirmed"): ?>
                                                                    Pending Confirmation.
                                                                <?php endif; ?>
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
                                                        <!-- 
                                                        //  +=====================+
                                                        //  | Precourse           |
                                                        //  +=====================+
                                                        -->
                                                        <?php if (isset($params["precourse"])): ?>
                                                            <?php if (count($params["precourse"]) > 0): ?>
                                                                <tr>
                                                                    <td nowrap="">
                                                                        <span style="font-weight: bold;color: #00738F;"><b>Pre-Conference Workshop</b></span>
                                                                    </td>
                                                                    <td width="98%">
                                                                        &nbsp;     
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td nowrap="">
                                                                        <b>Selection: </b>
                                                                    </td>
                                                                    <td width="98%">
                                                                        <?php echo $params["precourse"]->title; ?> - <b>$<?php echo floatval($params["precourse"]->sell_price); ?>.00</b>   
                                                                    </td>
                                                                </tr>
                                                                <?php if ($params["precourse"]->field_transaction_type['und'][0]['value'] == "add"): ?>
                                                                    <tr>
                                                                        <td nowrap="">
                                                                            <b>Status: </b>
                                                                        </td>
                                                                        <td width="98%">
                                                                            <?php if ($params["precourse"]->field_confirmed['und'][0]['value'] == "confirmed"): ?>
                                                                                Confirmed
                                                                            <?php elseif ($params["precourse"]->field_confirmed['und'][0]['value'] == "not-confirmed"): ?>
                                                                                Pending Confirmation.
                                                                            <?php endif; ?>
                                                                        </td>
                                                                    </tr>
                                                                <?php elseif ($params["precourse"]->field_transaction_type['und'][0]['value'] == "remove"): ?>
                                                                    <tr>
                                                                        <td nowrap="">
                                                                            <b>Transaction Type: </b>
                                                                        </td>
                                                                        <td width="98%">
                                                                            Remove Service
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td nowrap="">
                                                                            <b>Status: </b>
                                                                        </td>
                                                                        <td width="98%">
                                                                            <?php if ($params["precourse"]->field_confirmed['und'][0]['value'] == "confirmed"): ?>
                                                                                Confirmed
                                                                            <?php elseif ($params["precourse"]->field_confirmed['und'][0]['value'] == "not-confirmed"): ?>
                                                                                Pending Confirmation.
                                                                            <?php endif; ?>
                                                                        </td>
                                                                    </tr>
                                                                <?php endif; ?>
                                                                <tr>
                                                                    <td nowrap="">
                                                                        <b>Date: </b>
                                                                    </td>
                                                                    <td width="98%">
                                                                        <?php echo date("j F Y", $params["precourse"]->changed); ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td nowrap="">
                                                                        <b>Payment Method: </b>
                                                                    </td>
                                                                    <td width="98%">
                                                                        <?php if ($params["precourse"]->field_payment_method['und'][0]['value'] == "credit_card"): ?>
                                                                            Credit Card
                                                                        <?php elseif ($params["precourse"]->field_payment_method['und'][0]['value'] == "mail_check"): ?>
                                                                            Mail in Check
                                                                        <?php endif; ?>
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
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                        <tr>
                                                            <td nowrap="">
                                                                <span style="font-weight: bold;color: #00738F;"><b>Networking Events</b></span>
                                                            </td>
                                                            <td width="98%">
                                                                &nbsp;     
                                                            </td>
                                                        </tr>
                                                        <!-- 
                                                        //  +=====================+
                                                        //  | Celia King Dinner   |
                                                        //  +=====================+
                                                        -->
                                                        <?php if (!empty($params["networking_events_celia_king_dinner"])): ?>
                                                            <tr>
                                                                <td nowrap="">
                                                                    <b>Selection: </b>
                                                                </td>
                                                                <td width="98%">
                                                                    Celia King Dinner
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">
                                                                    <hr noshade="" size="1">
                                                                </td>
                                                            </tr>
                                                        <?php endif; ?>
                                                        <!-- 
                                                        //  +==============================+
                                                        //  | Celia King Dinner Guest      |
                                                        //  +==============================+
                                                        -->
                                                        <?php if (isset($params["celia_king_dinner_guest"])): ?>
                                                            <?php if (count($params["celia_king_dinner_guest"]) > 0): ?>
                                                                <tr>
                                                                    <td nowrap="">
                                                                        <b>Selection: </b>
                                                                    </td>
                                                                    <td width="98%">
                                                                        <?php echo $params["celia_king_dinner_guest"]->title; ?> - <b>$<?php echo floatval($params["celia_king_dinner_guest"]->sell_price); ?>.00</b>   
                                                                    </td>
                                                                </tr>
                                                                <?php if ($params["celia_king_dinner_guest"]->field_transaction_type['und'][0]['value'] == "add"): ?>
                                                                    <tr>
                                                                        <td nowrap="">
                                                                            <b>Status: </b>
                                                                        </td>
                                                                        <td width="98%">
                                                                            <?php if ($params["celia_king_dinner_guest"]->field_confirmed['und'][0]['value'] == "confirmed"): ?>
                                                                                Confirmed
                                                                            <?php elseif ($params["celia_king_dinner_guest"]->field_confirmed['und'][0]['value'] == "not-confirmed"): ?>
                                                                                Pending Confirmation.
                                                                            <?php endif; ?>
                                                                        </td>
                                                                    </tr>
                                                                <?php elseif ($params["celia_king_dinner_guest"]->field_transaction_type['und'][0]['value'] == "remove"): ?>
                                                                    <tr>
                                                                        <td nowrap="">
                                                                            <b>Transaction Type: </b>
                                                                        </td>
                                                                        <td width="98%">
                                                                            Remove Service
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td nowrap="">
                                                                            <b>Status: </b>
                                                                        </td>
                                                                        <td width="98%">
                                                                            <?php if ($params["celia_king_dinner_guest"]->field_confirmed['und'][0]['value'] == "confirmed"): ?>
                                                                                Confirmed
                                                                            <?php elseif ($params["celia_king_dinner_guest"]->field_confirmed['und'][0]['value'] == "not-confirmed"): ?>
                                                                                Pending Confirmation.
                                                                            <?php endif; ?>
                                                                        </td>
                                                                    </tr>
                                                                <?php endif; ?>
                                                                <tr>
                                                                    <td nowrap="">
                                                                        <b>Date: </b>
                                                                    </td>
                                                                    <td width="98%">
                                                                        <?php echo date("j F Y", $params["celia_king_dinner_guest"]->changed); ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td nowrap="">
                                                                        <b>Payment Method: </b>
                                                                    </td>
                                                                    <td width="98%">
                                                                        <?php if ($params["celia_king_dinner_guest"]->field_payment_method['und'][0]['value'] == "credit_card"): ?>
                                                                            Credit Card
                                                                        <?php elseif ($params["celia_king_dinner_guest"]->field_payment_method['und'][0]['value'] == "mail_check"): ?>
                                                                            Mail in Check
                                                                        <?php endif; ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">
                                                                        <hr noshade="" size="1">
                                                                    </td>
                                                                </tr>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                        <!-- 
                                                        //  +===================+
                                                        //  | Dinner Groups     |
                                                        //  +===================+
                                                        -->
                                                        <?php if (isset($params["dinner_groups"])): ?>
                                                            <?php if (count($params["dinner_groups"]) > 0): ?>
                                                                <tr>
                                                                    <td nowrap="">
                                                                        <b>Selection: </b>
                                                                    </td>
                                                                    <td width="98%">
                                                                        <?php echo $params["dinner_groups"]->title; ?> - <b>$<?php echo floatval($params["dinner_groups"]->sell_price); ?>.00</b>   
                                                                    </td>
                                                                </tr>
                                                                <?php if ($params["dinner_groups"]->field_transaction_type['und'][0]['value'] == "add"): ?>
                                                                    <tr>
                                                                        <td nowrap="">
                                                                            <b>Status: </b>
                                                                        </td>
                                                                        <td width="98%">
                                                                            <?php if ($params["dinner_groups"]->field_confirmed['und'][0]['value'] == "confirmed"): ?>
                                                                                Confirmed
                                                                            <?php elseif ($params["dinner_groups"]->field_confirmed['und'][0]['value'] == "not-confirmed"): ?>
                                                                                Pending Confirmation.
                                                                            <?php endif; ?>
                                                                        </td>
                                                                    </tr>
                                                                <?php elseif ($params["dinner_groups"]->field_transaction_type['und'][0]['value'] == "remove"): ?>
                                                                    <tr>
                                                                        <td nowrap="">
                                                                            <b>Transaction Type: </b>
                                                                        </td>
                                                                        <td width="98%">
                                                                            Remove Service
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td nowrap="">
                                                                            <b>Status: </b>
                                                                        </td>
                                                                        <td width="98%">
                                                                            <?php if ($params["dinner_groups"]->field_confirmed['und'][0]['value'] == "confirmed"): ?>
                                                                                Confirmed
                                                                            <?php elseif ($params["dinner_groups"]->field_confirmed['und'][0]['value'] == "not-confirmed"): ?>
                                                                                Pending Confirmation.
                                                                            <?php endif; ?>
                                                                        </td>
                                                                    </tr>
                                                                <?php endif; ?>
                                                                <tr>
                                                                    <td nowrap="">
                                                                        <b>Date: </b>
                                                                    </td>
                                                                    <td width="98%">
                                                                        <?php echo date("j F Y", $params["dinner_groups"]->changed); ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td nowrap="">
                                                                        <b>Payment Method: </b>
                                                                    </td>
                                                                    <td width="98%">
                                                                        <?php if ($params["dinner_groups"]->field_payment_method['und'][0]['value'] == "credit_card"): ?>
                                                                            Credit Card
                                                                        <?php elseif ($params["dinner_groups"]->field_payment_method['und'][0]['value'] == "mail_check"): ?>
                                                                            Mail in Check
                                                                        <?php endif; ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">
                                                                        <hr noshade="" size="1">
                                                                    </td>
                                                                </tr>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                        <!-- 
                                                        //  +===================+
                                                        //  | Golf Outing       |
                                                        //  +===================+
                                                        -->
                                                        <?php if (isset($params["golf_outing"])): ?>
                                                            <?php if (count($params["golf_outing"]) > 0): ?>
                                                                <tr>
                                                                    <td nowrap="">
                                                                        <b>Selection: </b>
                                                                    </td>
                                                                    <td width="98%">
                                                                        <?php echo $params["golf_outing"]->title; ?> - <b>$<?php echo floatval($params["golf_outing"]->sell_price); ?>.00</b>   
                                                                    </td>
                                                                </tr>
                                                                <?php if ($params["golf_outing"]->field_transaction_type['und'][0]['value'] == "add"): ?>
                                                                    <tr>
                                                                        <td nowrap="">
                                                                            <b>Status: </b>
                                                                        </td>
                                                                        <td width="98%">
                                                                            <?php if ($params["golf_outing"]->field_confirmed['und'][0]['value'] == "confirmed"): ?>
                                                                                Confirmed
                                                                            <?php elseif ($params["golf_outing"]->field_confirmed['und'][0]['value'] == "not-confirmed"): ?>
                                                                                Pending Confirmation.
                                                                            <?php endif; ?>
                                                                        </td>
                                                                    </tr>
                                                                <?php elseif ($params["golf_outing"]->field_transaction_type['und'][0]['value'] == "remove"): ?>
                                                                    <tr>
                                                                        <td nowrap="">
                                                                            <b>Transaction Type: </b>
                                                                        </td>
                                                                        <td width="98%">
                                                                            Remove Service
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td nowrap="">
                                                                            <b>Status: </b>
                                                                        </td>
                                                                        <td width="98%">
                                                                            <?php if ($params["golf_outing"]->field_confirmed['und'][0]['value'] == "confirmed"): ?>
                                                                                Confirmed
                                                                            <?php elseif ($params["golf_outing"]->field_confirmed['und'][0]['value'] == "not-confirmed"): ?>
                                                                                Pending Confirmation.
                                                                            <?php endif; ?>
                                                                        </td>
                                                                    </tr>
                                                                <?php endif; ?>
                                                                <tr>
                                                                    <td nowrap="">
                                                                        <b>Date: </b>
                                                                    </td>
                                                                    <td width="98%">
                                                                        <?php echo date("j F Y", $params["golf_outing"]->changed); ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td nowrap="">
                                                                        <b>Payment Method: </b>
                                                                    </td>
                                                                    <td width="98%">
                                                                        <?php if ($params["golf_outing"]->field_payment_method['und'][0]['value'] == "credit_card"): ?>
                                                                            Credit Card
                                                                        <?php elseif ($params["golf_outing"]->field_payment_method['und'][0]['value'] == "mail_check"): ?>
                                                                            Mail in Check
                                                                        <?php endif; ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">
                                                                        <hr noshade="" size="1">
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
                                                        <?php if (!empty($params["mentoring_program"])): ?>
                                                            <tr>
                                                                <td nowrap="">
                                                                    <b>Mentoring Program</b>
                                                                </td>
                                                                <td width="98%">
                                                                    <?php if ($params["mentoring_program"] == "member_attendee_paired_with_mentor"): ?>
                                                                        I am a new member/attendee interested in being paired with a mentor
                                                                    <?php elseif ($params["mentoring_program"] == "member_attendee_serving_as_mentor"): ?>
                                                                        I am a veteran member/attendee interested in serving as a Mentor
                                                                    <?php endif; ?>   
                                                                </td>
                                                            </tr>
                                                        <?php endif; ?>
                                                        <?php if (!empty($params["dietary_restrictions"])): ?>
                                                            <tr>
                                                                <td nowrap="">
                                                                    <b>Dietary Restrictions</b>
                                                                </td>
                                                                <td width="98%">
                                                                    <?php if (is_array($params["dietary_restrictions"])): ?>
                                                                        <?php
                                                                        $str_dietary_restrictions = array();
                                                                        foreach ($params["dietary_restrictions"] as $key => $restriction) {
                                                                            $label_restriction = "";
                                                                            if ($restriction == "vegetarian") {
                                                                                $label_restriction = "Vegetarian";
                                                                            } elseif ($restriction == "vegan") {
                                                                                $label_restriction = "Vegan";
                                                                            } elseif ($restriction == "gluten_free") {
                                                                                $label_restriction = "Gluten free";
                                                                            } elseif ($restriction == "dairy_free") {
                                                                                $label_restriction = "Dairy free";
                                                                            }
                                                                            if (!empty($label_restriction)) {
                                                                                $str_dietary_restrictions[] = $label_restriction;
                                                                            }
                                                                        }
                                                                        $str_labels_restriccions = implode(", ", $str_dietary_restrictions);
                                                                        echo $str_labels_restriccions;
                                                                        ?>    
                                                                    <?php else: ?>
                                                                        <?php if ($params["dietary_restrictions"] == "vegetarian"): ?>
                                                                            Vegetarian
                                                                        <?php elseif ($params["dietary_restrictions"] == "vegan"): ?>
                                                                            Vegan
                                                                        <?php elseif ($params["dietary_restrictions"] == "gluten_free"): ?>
                                                                            Gluten free
                                                                        <?php elseif ($params["dietary_restrictions"] == "dairy_free"): ?>
                                                                            Dairy free
                                                                        <?php endif; ?>   
                                                                    <?php endif; ?>    
                                                                </td>
                                                            </tr>
                                                        <?php endif; ?>
                                                        <?php if (!empty($params["guest_name"])): ?>
                                                            <tr>
                                                                <td nowrap="">
                                                                    <b>Dinner Guest</b>
                                                                </td>
                                                                <td width="98%">
                                                                    <?php echo $params["guest_name"]; ?>   
                                                                </td>
                                                            </tr>
                                                        <?php endif; ?>
                                                        <?php if (!empty($params["guest_dietary_restrictions"])): ?>
                                                            <tr>
                                                                <td nowrap="">
                                                                    <b>Guest Dietary Restrictions</b>
                                                                </td>
                                                                <td width="98%">
                                                                    <?php if (is_array($params["guest_dietary_restrictions"])): ?>
                                                                        <?php
                                                                        $str_guest_dietary_restrictions = array();
                                                                        foreach ($params["guest_dietary_restrictions"] as $key => $restriction) {
                                                                            $label_restriction = "";
                                                                            if ($restriction == "vegetarian") {
                                                                                $label_restriction = "Vegetarian";
                                                                            } elseif ($restriction == "vegan") {
                                                                                $label_restriction = "Vegan";
                                                                            } elseif ($restriction == "gluten_free") {
                                                                                $label_restriction = "Gluten free";
                                                                            } elseif ($restriction == "dairy_free") {
                                                                                $label_restriction = "Dairy free";
                                                                            }
                                                                            if (!empty($label_restriction)) {
                                                                                $str_guest_dietary_restrictions[] = $label_restriction;
                                                                            }
                                                                        }
                                                                        $str_labels_restriccions = implode(", ", $str_guest_dietary_restrictions);
                                                                        echo $str_labels_restriccions;
                                                                        ?>    
                                                                    <?php else: ?>
                                                                        <?php if ($params["guest_dietary_restrictions"] == "vegetarian"): ?>
                                                                            Vegetarian
                                                                        <?php elseif ($params["guest_dietary_restrictions"] == "vegan"): ?>
                                                                            Vegan
                                                                        <?php elseif ($params["guest_dietary_restrictions"] == "gluten_free"): ?>
                                                                            Gluten free
                                                                        <?php elseif ($params["guest_dietary_restrictions"] == "dairy_free"): ?>
                                                                            Dairy free
                                                                        <?php endif; ?>   
                                                                    <?php endif; ?>   
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
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>

                                        <?php if (isset($params["added"])): ?>
                                            <?php if (count($params["added"]) > 0): ?>
                                                <tr>
                                                    <td colspan="2" bgcolor="#007490" style="color:white">
                                                        <b>Items Added:</b><br>
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
                                                                        <b>Items added to your registration:</b>
                                                                        <table width="100%" style="font-family: verdana, arial, helvetica; font-size: small;">
                                                                            <?php foreach ($params["added"] as $product_added): ?>
                                                                                <?php $payment_method = ""; ?>
                                                                                <?php if ($product_added->field_payment_method['und'][0]['value'] == "credit_card"): ?>
                                                                                    <?php $payment_method = "Credit Card"; ?>
                                                                                <?php elseif ($product_added->field_payment_method['und'][0]['value'] == "mail_check"): ?>
                                                                                    <?php $payment_method = "Mail in Check"; ?>
                                                                                <?php endif; ?>
                                                                                <tr>
                                                                                    <td valign="top" nowrap="nowrap">
                                                                                        <b>1 x </b>
                                                                                    </td>
                                                                                    <td width="98%">
                                                                                        <?php echo $product_added->title; ?> - <b><span>$<?php echo floatval($product_added->sell_price); ?>.00</span></b> <small>(Payment Method: <?php echo $payment_method; ?>).</small><br/>
                                                                                    </td>
                                                                                </tr>
                                                                            <?php endforeach; ?>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">
                                                                        <hr noshade="" size="1">
                                                                        <p>
                                                                            Thank you for the added item(s) to your registration.<br/>
                                                                        </p>
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
                                        <?php endif; ?>

                                        <?php if (isset($params["to_add"])): ?>
                                            <?php if (count($params["to_add"]) > 0): ?>
                                                <tr>
                                                    <td colspan="2" bgcolor="#007490" style="color:white">
                                                        <b>Total:</b><br>
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
                                                                        <b>Registration Total:</b>
                                                                        <table width="100%" style="font-family: verdana, arial, helvetica; font-size: small;">
                                                                            <?php $date = ""; ?>
                                                                            <?php $total = 0; ?>
                                                                            <?php foreach ($params["to_add"] as $product_to_add): ?>
                                                                                <?php $payment_method = ""; ?>
                                                                                <?php if ($product_to_add->field_payment_method['und'][0]['value'] == "credit_card"): ?>
                                                                                    <?php $payment_method = "Credit Card"; ?>
                                                                                <?php elseif ($product_to_add->field_payment_method['und'][0]['value'] == "mail_check"): ?>
                                                                                    <?php $payment_method = "Mail in Check"; ?>
                                                                                <?php endif; ?>
                                                                                <tr>
                                                                                    <td valign="top" nowrap="nowrap">
                                                                                        <b>1 x </b>
                                                                                    </td>
                                                                                    <td width="98%">
                                                                                        <?php echo $product_to_add->title; ?> - <b><span>$<?php echo floatval($product_to_add->sell_price); ?>.00</span></b> <small>(Payment Method: <?php echo $payment_method; ?>).</small><br/>
                                                                                    </td>
                                                                                </tr>
                                                                                <?php $date = $product_to_add->changed; ?>
                                                                                <?php $total = $total + floatval($product_to_add->sell_price); ?>
                                                                            <?php endforeach; ?>
                                                                            <tr>
                                                                                <td nowrap="">
                                                                                    Total for this Order:&nbsp;
                                                                                </td>
                                                                                <td width="98%">
                                                                                    <b>$<?php echo number_format((float) $total, 2, '.', ''); ?></b>             
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">
                                                                        <hr noshade="" size="1">
                                                                        <p>
                                                                            Please make check payable to AASA and mail to the address below.<br>
                                                                            <?php echo $params["site_name"]; ?><br>
                                                                            c/o Benson Won<br>
                                                                            2221 Stockton Boulevard<br>
                                                                            Cypress Building 3119<br>
                                                                            Sacramento, CA  95817<br>
                                                                            Registration Receipt<br>
                                                                            Date: <?php echo date("n/j/y", $date); ?> <br>
                                                                            Payment Type: Check <br>
                                                                            Grand Total <br>
                                                                            $<?php echo $total; ?><br>
                                                                            Name: <?php echo $params["first_name"] . " " . $params["last_name"]; ?><br>
                                                                            Organization: <?php echo $params["organization"]; ?><br> 
                                                                            Email: <?php echo $params["email_address"]; ?><br>
                                                                            Street Address: <?php echo $params["street_address"]; ?><br>
                                                                            City, State, Zip: <?php echo $params["city_state_zip"]; ?><br>
                                                                        </p>
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
                                        <?php endif; ?>

                                        <?php if (isset($params["to_delete"])): ?>
                                            <?php if (count($params["to_delete"]) > 0): ?>
                                                <tr>
                                                    <td colspan="2" bgcolor="#007490" style="color:white">
                                                        <b>Items To Be Removed:</b><br>
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
                                                                        <b>Items Removed From Your Registration:</b>
                                                                        <table width="100%" style="font-family: verdana, arial, helvetica; font-size: small;">
                                                                            <?php foreach ($params["to_delete"] as $product_to_delete): ?>
                                                                                <?php $payment_method = ""; ?>
                                                                                <?php if ($product_to_delete->field_payment_method['und'][0]['value'] == "credit_card"): ?>
                                                                                    <?php $payment_method = "Credit Card"; ?>
                                                                                <?php elseif ($product_to_delete->field_payment_method['und'][0]['value'] == "mail_check"): ?>
                                                                                    <?php $payment_method = "Mail in Check"; ?>
                                                                                <?php endif; ?>
                                                                                <tr>
                                                                                    <td valign="top" nowrap="nowrap">
                                                                                        <b>1 x </b>
                                                                                    </td>
                                                                                    <td width="98%">
                                                                                        <?php echo $product_to_delete->title; ?> - <b><span>$<?php echo floatval($product_to_delete->sell_price); ?>.00</span></b> <small>(Payment Method: <?php echo $payment_method; ?>).</small><br/>
                                                                                    </td>
                                                                                </tr>
                                                                            <?php endforeach; ?>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">
                                                                        <hr noshade="" size="1">
                                                                        <p>
                                                                            If you have removed an item, AASA will refund you within 10 business days<br/>
                                                                            Until then, you will be unable to make additional changes to your registration.
                                                                        </p>
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
                                        <?php endif; ?>

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