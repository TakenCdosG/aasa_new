<?php
mail($edit['mail'], SITE_NAME.' Membership Application Approved; Pending Payment','Your application for '.SITE_NAME.' membership has been approved. Please remit your membership dues by check or credit card.'."\r\n \r\n"
.'Mail Checks to:'. "\r\n"
.'Benson Won, MPH'."\r\n"
.'Chief Administrative Officer'. "\r\n"
.'Department of Surgery'. "\r\n"
.'UC Davis School of Medicine'. "\r\n"
.'UC Davis Health System'."\r\n"
.'916-734-7886'."\r\n"
.'http://surgery.ucdmc.ucdavis.edu'."\r\n \r\n"
.'Registration Receipt'. "\r\n"
.'Registration Fee $'.$config_data['registration_fee']."\r\n" //TODO: HARDCODED-- OBTAIN FROM ACTUAL PRODUCT PRICE OR ORDER TOTAL
.'Name: '.$user_data->field_first_name['und'][0]['value']." ".$user_data->field_last_name['und'][0]['value']. "\r\n"
.'Institution: '.$user_data->field_institution['und'][0]['value']. "\r\n"
.'Email: '.$user_data->mail. "\r\n"
.'Address Line 1: '.$user_data->field_address_line_1['und'][0]['value']. "\r\n"
.'Address Line 2: '.$user_data->field_address_line_2['und'][0]['value']. "\r\n"
.'City: '.$user_data->field_city['und'][0]['value']. "\r\n"
.'State/Province: '.$user_data->field_state['und'][0]['value']. "\r\n"
.'Zip/Postal Code: '.$user_data->field_zip['und'][0]['value']. "\r\n \r\n"


.'Make a Credit Card Payment:'. "\r\n"
.$onetime. "\r\n \r\n"

.'Thank you,'. "\r\n"
.SITE_NAME, HEADERS);

