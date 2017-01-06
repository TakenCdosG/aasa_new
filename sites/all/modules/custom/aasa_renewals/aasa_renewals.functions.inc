<?php

function get_renewal_config_info(){
	$nid = get_aasa_renewal_config_page_nid();
	$response = new stdClass();
	$response->config_page = $nid;
	if($nid != FALSE){
	    $query = db_select('node', 'n');
	    $query->condition('n.type', 'aaap_module_configurations');
	    $query->condition('n.nid', $nid);
	    // Node Field
    	$query->fields('n', array('nid', 'title', 'created', 'uid', 'status'));

	    // Initial Renewal Price Fields
	    // 1) Amount Regular Member
	    $query->leftJoin('field_data_field_amount_regular_member_init', 'arm', 'n.nid = arm.entity_id');
	    $query->fields('arm', array('field_amount_regular_member_init_value'));
	    // 2) Amount Affiliate Member
	    $query->leftJoin('field_data_field_amount_adjunct_member_init', 'afm', 'n.nid = afm.entity_id');
	    $query->fields('afm', array('field_amount_adjunct_member_init_value'));
	    // 3) Amount Honorary Member
	    $query->leftJoin('field_data_field_amount_emeritus_membr_init', 'aem', 'n.nid = aem.entity_id');
	    $query->fields('aem', array('field_amount_emeritus_membr_init_value'));

	    // Renewal Period
	    $query->leftJoin('field_data_field_renewal_period', 'rp', 'n.nid = rp.entity_id');
	    $query->fields('rp', array('field_renewal_period_value', 'field_renewal_period_value2'));	    

	    // Reminder Emails Subject
	    $query->leftJoin('field_data_field_reminder_email_subject', 'res', 'n.nid = res.entity_id');
	    $query->fields('res', array('field_reminder_email_subject_value'));

	    // Reminder Emails Content
	    $query->leftJoin('field_data_field_reminder_email_body', 'reb', 'n.nid = reb.entity_id');
	    $query->fields('reb', array('field_reminder_email_body_value'));

	    // Membership Registration Fee
	    $query->leftJoin('field_data_field_membership_registration_fe', 'mrf', 'n.nid = mrf.entity_id');
	    $query->fields('mrf', array('field_membership_registration_fe_value'));

	    // LIMIT to 1 records
  		$query->range(0, 1);
  		$result = $query->execute();
  		while($record = $result->fetchObject()) {
  			// Node Field
  			$node = "";
  			 if(isset($record->nid)){
	            $node = $record->nid;
	        }
	        $response->nid = $node;
	        // Title
  			$title = "";
  			if(isset($record->title)){
	            $title = $record->title;
	        }
	        $response->title = $title;
	        // Created
  			$created = "";
  			if(isset($record->created)){
	            $created = $record->created;
	        }
	        $response->created = $created;
	        // Uid
  			$uid = "";
  			if(isset($record->uid)){
	            $uid = $record->uid;
	        }
	        $response->uid = $uid;
	        // Status
  			$status = "";
  			if(isset($record->status)){
	            $status = $record->status;
	        }
	        $response->status = $status;
	        // Initial Renewal Price Fields
	        // 1) Amount Regular Member
	        $field_amount_regular_member_init_value = "";
  			if(isset($record->field_amount_regular_member_init_value)){
	            $field_amount_regular_member_init_value = $record->field_amount_regular_member_init_value;
	        }
	        $response->field_amount_regular_member_init_value = $field_amount_regular_member_init_value;
	        // 2) Amount Affiliate Member
	        $field_amount_adjunct_member_init_value = "";
  			if(isset($record->field_amount_adjunct_member_init_value)){
	            $field_amount_adjunct_member_init_value = $record->field_amount_adjunct_member_init_value;
	        }
	        $response->field_amount_adjunct_member_init_value = $field_amount_adjunct_member_init_value;
	        // 3) Amount Honorary Member
	        $field_amount_emeritus_membr_init_value = "";
  			if(isset($record->field_amount_emeritus_membr_init_value)){
	            $field_amount_emeritus_membr_init_value = $record->field_amount_emeritus_membr_init_value;
	        }
	        $response->field_amount_emeritus_membr_init_value = $field_amount_emeritus_membr_init_value;

	        // Renewal Period
	        $field_renewal_period_value = "";
  			if(isset($record->field_renewal_period_value)){
	            $field_renewal_period_value = $record->field_renewal_period_value;
	        }
	        $response->field_renewal_period_from = $field_renewal_period_value;

	        $field_renewal_period_value2 = "";
  			if(isset($record->field_renewal_period_value2)){
	            $field_renewal_period_value2 = $record->field_renewal_period_value2;
	        }
	        $response->field_renewal_period_to = $field_renewal_period_value2;

	        // Reminder Emails Subject
	        $field_reminder_email_subject_value = "";
  			if(isset($record->field_reminder_email_subject_value)){
	            $field_reminder_email_subject_value = $record->field_reminder_email_subject_value;
	        }
	        $response->field_reminder_email_subject_value = $field_reminder_email_subject_value;

	        // Reminder Emails Content
	        $field_reminder_email_body_value = "";
  			if(isset($record->field_reminder_email_body_value)){
	            $field_reminder_email_body_value = $record->field_reminder_email_body_value;
	        }
	        $response->field_reminder_email_body_value = $field_reminder_email_body_value;

	        // Membership Registration Fee
	        $field_membership_registration_fe_value = "";
  			if(isset($record->field_membership_registration_fe_value)){
	            $field_membership_registration_fe_value = $record->field_membership_registration_fe_value;
	        }
	        $response->field_membership_registration_fe_value = $field_membership_registration_fe_value;

	        // Reminder Emails Date
	  		$response->reminder_emails = get_reminder_emails_info($nid);

        	break;
   		}
   		return $response;
	}
}

function get_reminder_emails_info($nid){
    $query_reminder_emails = db_select('field_data_field_reminder_emails', 'f');
	$query_reminder_emails->condition('f.bundle', "aaap_module_configurations");
	$query_reminder_emails->condition('f.entity_id', $nid);
	// Fields
	$query_reminder_emails->fields('f', array('field_reminder_emails_value'));
	$result_reminder_emails = $query_reminder_emails->execute();
	$reminder_emails = array();
	while($record_reminder_emails = $result_reminder_emails->fetchObject()) {
		if(isset($record_reminder_emails->field_reminder_emails_value)){
			$item_id = $record_reminder_emails->field_reminder_emails_value;
			$item = get_reminder_email_date_info($item_id);
			$reminder_emails[] = $item;
		}
	}
	return $reminder_emails;
}

function get_reminder_email_date_info($item_id){
	$field_reminder_emails = field_collection_item_load($item_id);
	$item = new stdClass();

	$field_amount_adjunct_member = "";
	if(isset($field_reminder_emails->field_amount_adjunct_member['und'][0]['value'])){
		$field_amount_adjunct_member = $field_reminder_emails->field_amount_adjunct_member['und'][0]['value'];
	}
	$item->field_amount_adjunct_member = $field_amount_adjunct_member;

	$field_amount_emeritus_member = "";
	if(isset($field_reminder_emails->field_amount_emeritus_member['und'][0]['value'])){
		$field_amount_emeritus_member = $field_reminder_emails->field_amount_emeritus_member['und'][0]['value'];
	}
	$item->field_amount_emeritus_member = $field_amount_emeritus_member;

	$field_field_amount = "";
	if(isset($field_reminder_emails->field_field_amount['und'][0]['value'])){
		$field_field_amount = $field_reminder_emails->field_field_amount['und'][0]['value'];
	}
	$item->field_field_amount = $field_field_amount;

	$field_reminder_date = "";
	if(isset($field_reminder_emails->field_reminder_date['und'][0]['value'])){
		$field_reminder_date = $field_reminder_emails->field_reminder_date['und'][0]['value'];
	}
	$item->field_reminder_date = $field_reminder_date;
	return $item;
}

function get_aasa_renewal_config_page_nid(){
   return variable_get('aasa_renewal_config_page_nid', FALSE);
}

function get_renewal_period_mockup($renewal_config_info){
	$header = array('From', 'To', 'Amount Regular Member', 'Amount Affiliate Member', 'Amount Honorary Member');
	$rows = array();
	$from = $renewal_config_info->field_renewal_period_from;
	if(!empty($from)){
		$from = set_format_date($from);
	}
	$to = $renewal_config_info->field_renewal_period_to;
	if(!empty($to)){
		$to = set_format_date($to);
	}
	$amount_regular_member = '$'.$renewal_config_info->field_amount_regular_member_init_value;
	$amount_affiliate_member = '$'.$renewal_config_info->field_amount_adjunct_member_init_value;
	$amount_honorary_member = '$'.$renewal_config_info->field_amount_emeritus_membr_init_value;
	$rows[] = array(
		array('data' => $from, 'align' => 'center'),
		array('data' => $to, 'align' => 'center'),
		array('data' => $amount_regular_member, 'align' => 'center'), 
		array('data' => $amount_affiliate_member, 'align' => 'center'),
		array('data' => $amount_honorary_member, 'align' => 'center')
	);
	$table_attributes = array('id' => 'renewal-period-table', 'class' => array('sticky-enabled table-select-processed tableheader-processed sticky-table'), 'style' => 'max-width: 900px;');
	return theme('table', array('header' => $header, 'rows' => $rows, 'attributes' => $table_attributes));
}

function get_current_available_reminder_date_and_amount_mockup($renewal_config_info){

	$header = array('Renewal Date', 'Amount Regular Member', 'Amount Affiliate Member', 'Amount Honorary Member ');
	$current_available_reminder_date_and_amount = get_current_available_reminder_date_and_amount($renewal_config_info);
	$rows = array();
	$reminder_date = $current_available_reminder_date_and_amount->field_reminder_date;
	if(!empty($reminder_date)){
		$reminder_date = set_format_date($reminder_date);
	}
	$amount_regular_member = '$'.$current_available_reminder_date_and_amount->field_field_amount;
	$amount_affiliate_member = '$'.$current_available_reminder_date_and_amount->field_amount_adjunct_member;
	$amount_honorary_member = '$'.$current_available_reminder_date_and_amount->field_amount_emeritus_member;
	$rows[] = array($reminder_date, $amount_regular_member, $amount_affiliate_member, $amount_honorary_member);
	$table_attributes = array('id' => 'current-available-reminder-date_and-amount-table', 'class' => array('sticky-enabled table-select-processed tableheader-processed sticky-table'), 'style' => 'max-width: 900px;');
	return theme('table', array('header' => $header, 'rows' => $rows, 'attributes' => $table_attributes));

}

function apply_to_send_email($last_field_reminder_email_timestamp, $renewal_config_info){
	$current_item_reminder_date_time = intval($last_field_reminder_email_timestamp);
	$now_time = strtotime('now');
	$from = $renewal_config_info->field_renewal_period_from;
	$from_time = strtotime($from);
	$to = $renewal_config_info->field_renewal_period_to;
	$to_time = strtotime($to);
	if($current_item_reminder_date_time >= $from_time && $current_item_reminder_date_time <= $to_time && $current_item_reminder_date_time <= $now_time){
		return FALSE;
	}else{
		if($current_item_reminder_date_time > $to_time){
		  return FALSE;
		}else{
		  return TRUE;
		}
	}
}

function get_current_available_reminder_date_and_amount($renewal_config_info){
	$now_time = strtotime('now');
	$from = $renewal_config_info->field_renewal_period_from;
	$from_time = strtotime($from);
	$to = $renewal_config_info->field_renewal_period_to;
	$to_time = strtotime($to);
	$current_available_reminder_date_and_amount = new stdClass();
	$current_available_reminder_date_and_amount->reminder_date_time = "";

	// Set Default Value
	$current_available_reminder_date_and_amount->reminder_date_time = $from_time;
	$current_available_reminder_date_and_amount->field_amount_adjunct_member = $renewal_config_info->field_amount_adjunct_member_init_value;
	$current_available_reminder_date_and_amount->field_amount_emeritus_member = $renewal_config_info->field_amount_emeritus_membr_init_value;
	$current_available_reminder_date_and_amount->field_field_amount = $renewal_config_info->field_amount_regular_member_init_value;
	$current_available_reminder_date_and_amount->field_reminder_date = $renewal_config_info->field_renewal_period_to;

	$reminder_emails = $renewal_config_info->reminder_emails;
	foreach ($reminder_emails as $key => $item) {
		$current_item_reminder_date = $item->field_reminder_date;
		$current_item_reminder_date_time = strtotime($current_item_reminder_date);
		// We verify that the date is within the range of the renewal period.
		$set_val = FALSE;
		if($current_item_reminder_date_time >= $from_time && $current_item_reminder_date_time <= $to_time && $current_item_reminder_date_time <= $now_time){
			if(!empty($current_available_reminder_date_and_amount->reminder_date_time)){
				if($current_available_reminder_date_and_amount->reminder_date_time < $current_item_reminder_date_time){
					$set_val = TRUE;
				}
			}else{
				$set_val = TRUE;
			}
		}
		if($set_val){

			$current_available_reminder_date_and_amount->reminder_date_time = $current_item_reminder_date_time;
			$current_available_reminder_date_and_amount->field_amount_adjunct_member = $item->field_amount_adjunct_member;
			$current_available_reminder_date_and_amount->field_amount_emeritus_member = $item->field_amount_emeritus_member;
			$current_available_reminder_date_and_amount->field_field_amount = $item->field_field_amount;
			$current_available_reminder_date_and_amount->field_reminder_date = $item->field_reminder_date;
		}

	}

	return $current_available_reminder_date_and_amount;
}

function get_user_membership_renewal_table_mockup($renewal_config_info){
	$from = $renewal_config_info->field_renewal_period_from;
	$from_time = strtotime($from);
	$to = $renewal_config_info->field_renewal_period_to;
	$to_time = strtotime($to);
	$limit = 20;
	// Default sort
	// Check if there is sorting request
	if(isset($_GET['sort']) && isset($_GET['order'])){
	 // Sort it Ascending or Descending?
	  if($_GET['sort'] == 'asc')
	    $sort = 'ASC';
	  else
	    $sort = 'DESC';

	  // Which column will be sorted
	   switch($_GET['order']){
	     case 'User':
	       $order = 'mail';
	       break;
	     default:
	       $order = 'mail';
	   }

	}else{
	   	$sort = 'ASC';
   		$order = 'mail';	
	}

	$header = array(
		//array('data' => get_checkbox_field($uid = "", $all = TRUE)),
		array('data' => t('User'),'field' => 'user_email'),
		array('data' => t('Renewal Date'),'field' => 'renewal_date'),
		array('data' => t('Reminder Emails'),'field' => 'reminder_emails'),
		array('data' => t('Rol'),'field' => 'rol'),
		array('data' => t('Status'),'field' => 'status'),
		array('data' => t('Options')),
	);
	$users = get_users_info($limit, $order, $sort);

	$rows = array();
	// Looping for filling the table rows
  	foreach ($users as $ord) {

		// Fill the table rows
		$name = $ord->first_name." ".$ord->last_name." - ";
  		$email_option = $name.l($ord->mail, 'user/'. $ord->uid);;

		$renewal_date = (!empty($ord->field_renewal_date_value))?set_format_date($ord->field_renewal_date_value):"";
		$already_sent = FALSE;
		if(empty($ord->field_reminder_email_value)){
			$reminder_emails = "Not sent";
		}else{
			$already_sent = TRUE;
			$reminder_emails = "Sent - ".'<small><'.set_format_timestamp_date($ord->field_reminder_email_value).'></small>';
		}
		
		$user_roles = array();
		$user_roles_key = array();
		foreach ($ord->user_roles as $key => $role) {
			$user_roles[] = $role->name;
			$user_roles_key[] = $role->rid;
		}
		$roles = implode("," , $user_roles);

		$options = array();
		$send_link = l('Send Reminder Email', 'renewal/send_reminder_email/'. $ord->uid);;
		$re_send_link =  l('Re-Send Reminder Email', 'renewal/re_send_reminder_email/'. $ord->uid);
		if($already_sent){
			$send_reminder_email = $re_send_link;
		}else{
			$send_reminder_email = $send_link;
		}

		$options[] = $send_reminder_email;
		if(!in_array(EXPIRED_MEMBER_RID, $user_roles_key)){
			$options[] = l('Expire User', 'renewal/expire_user/'. $ord->uid);
		}

		$status = "";
		if(in_array(ACTIVE_MEMBER_RID, $user_roles_key)){
			if(!empty($ord->field_renewal_date_value)){
				$user_last_renewal_date = strtotime($ord->field_renewal_date_value);
				if($user_last_renewal_date >= $from_time){
					$status = "Renewed";
					$options = array();
					$options[] = l('View','user/'. $ord->uid);
				}else{
					$status = "No Renewed";
				}
			}else{
				$status = "No Renewed";
			}
	   }else{
		   $status = "No Renewed";
	   }

	    $rows[] = array(
	    	//get_checkbox_field($ord->uid),
		    $email_option,
		    $renewal_date,
		    $reminder_emails,
		    $roles,
		    $status,
	     	implode(" | " , $options),
	    );

  	}

	$table_attributes = array('id' => 'user-membership-renewal-table', 'class' => array('sticky-enabled table-select-processed tableheader-processed sticky-table'), 'style' => 'max-width: 2000px;');
  	$table = theme('table', array('header' => $header, 'rows' => $rows, 'attributes' => $table_attributes));
  	$count = count($rows);
  	$form = drupal_get_form('aasa_renewals_options_form');
  	$aasa_renewals_options_form = drupal_render($form);

  	$form = drupal_get_form('aasa_renewals_send_test_reminder_emails_form');
  	$aasa_renewals_send_test_reminder_emails_form = drupal_render($form);

  	// Number of records (or users, in our case) to show per page.
  	$pager = theme('pager', array('quantity', $count));
  	$html = $table . $pager . $aasa_renewals_options_form . $aasa_renewals_send_test_reminder_emails_form;
  	
  	return $html;
}

function get_user_info($uid){
	$query = db_select('users', 'u');
	// User Field
    $query->fields('u', array('uid', 'mail', 'created', 'status', 'login'));
    $query->condition('u.uid', $uid);

 	// Field Renewal Date
    $query->leftJoin('field_data_field_renewal_date', 'rd', 'u.uid = rd.entity_id');
    $query->fields('rd', array('field_renewal_date_value'));

    // Field Reminder Emails
    $query->leftJoin('field_data_field_reminder_email', 're', 'u.uid = re.entity_id');
    $query->fields('re', array('field_reminder_email_value'));

    // Field Roles
    $query->leftJoin('users_roles', 'ur', 'ur.uid = u.uid');
    $query->condition('ur.rid', array('5', '8'), 'IN');

    // Field First Name
    $query->leftJoin('field_data_field_first_name', 'fn', 'u.uid = fn.entity_id');
    $query->fields('fn', array('field_first_name_value'));
   
    // Field Second Name
    $query->leftJoin('field_data_field_last_name', 'ln', 'u.uid = ln.entity_id');
    $query->fields('ln', array('field_last_name_value'));

    $query->range(0, 1);
    $result = $query->execute();
    $response = new stdClass();
    while($record = $result->fetchObject()) {
    	// First Name
        $first_name = "";
        if(isset($record->field_first_name_value)){
        	$first_name = $record->field_first_name_value;
        }
        $response->first_name = $first_name;

    	// Last name
        $last_name = "";
        if(isset($record->field_last_name_value)){
        	$last_name = $record->field_last_name_value;
        }
        $response->last_name = $last_name;

    	// Uid
        $uid = "";
        if(isset($record->uid)){
        	$uid = $record->uid;
        }
        $response->uid = $uid;

    	// Mail
        $mail = "";
        if(isset($record->mail)){
        	$mail = $record->mail;
        }
        $response->mail = $mail;

        // Created
        $created = "";
        if(isset($record->created)){
        	$created = $record->created;
        }
        $response->created = $created;

        // Login
        $login = "";
        if(isset($record->login)){
        	$login = $record->login;
        }
        $response->login = $login;

        // Field Renewal Date
        $field_renewal_date_value = "";
        if(isset($record->field_renewal_date_value)){
        	$field_renewal_date_value = $record->field_renewal_date_value;
        }
        $response->field_renewal_date_value = $field_renewal_date_value;
        
        // Field Reminder Emails
        $field_reminder_email_value = "";
        if(isset($record->field_reminder_email_value)){
        	$field_reminder_email_value = $record->field_reminder_email_value;
        }
        $response->field_reminder_email_value = $field_reminder_email_value;

        // Field Status(User Rules)...
        $user_roles = array();
        if(!empty($response->uid)){
        	$user_roles = get_user_roles($response->uid);
        }
        $response->user_roles = $user_roles;
        break;
    }
    return $response;
}

function get_users_info($limit, $order, $sort, $page = 1){
	if($limit != -1){
    	$start = ($page - 1) * $limit;
		$query = db_select('users', 'u')->extend('PagerDefault');
    }else{
    	$start = 0;
		$query = db_select('users', 'u');
    }
	// User Field
    $query->fields('u', array('uid', 'mail', 'created', 'status', 'login'));
    $query->condition('u.uid', array('0'), 'NOT IN');

 	// Field Renewal Date
    $query->leftJoin('field_data_field_renewal_date', 'rd', 'u.uid = rd.entity_id');
    $query->fields('rd', array('field_renewal_date_value'));

    // Field Reminder Emails
    $query->leftJoin('field_data_field_reminder_email', 're', 'u.uid = re.entity_id');
    $query->fields('re', array('field_reminder_email_value'));

    // Field Roles
    $query->leftJoin('users_roles', 'ur', 'ur.uid = u.uid');
    $query->condition('ur.rid', array('5', '8'), 'IN');

    // Field First Name
    $query->leftJoin('field_data_field_first_name', 'fn', 'u.uid = fn.entity_id');
    $query->fields('fn', array('field_first_name_value'));
   
    // Field Second Name
    $query->leftJoin('field_data_field_last_name', 'ln', 'u.uid = ln.entity_id');
    $query->fields('ln', array('field_last_name_value'));

    // Field Status...
    $query->orderBy($order, $sort);
    if($limit != -1){
    	$query->limit($limit);
    }
    
    $result = $query->execute();
    $rows = array();
    // Looping for filling the table rows
    while($record = $result->fetchObject()) {
    	$response = new stdClass();

    	// First Name
        $first_name = "";
        if(isset($record->field_first_name_value)){
        	$first_name = $record->field_first_name_value;
        }
        $response->first_name = $first_name;

    	// Last name
        $last_name = "";
        if(isset($record->field_last_name_value)){
        	$last_name = $record->field_last_name_value;
        }
        $response->last_name = $last_name;

    	// Uid
        $uid = "";
        if(isset($record->uid)){
        	$uid = $record->uid;
        }
        $response->uid = $uid;

    	// Mail
        $mail = "";
        if(isset($record->mail)){
        	$mail = $record->mail;
        }
        $response->mail = $mail;

        // Created
        $created = "";
        if(isset($record->created)){
        	$created = $record->created;
        }
        $response->created = $created;

        // Login
        $login = "";
        if(isset($record->login)){
        	$login = $record->login;
        }
        $response->login = $login;

        // Field Renewal Date
        $field_renewal_date_value = "";
        if(isset($record->field_renewal_date_value)){
        	$field_renewal_date_value = $record->field_renewal_date_value;
        }
        $response->field_renewal_date_value = $field_renewal_date_value;
        
        // Field Reminder Emails
        $field_reminder_email_value = "";
        if(isset($record->field_reminder_email_value)){
        	$field_reminder_email_value = $record->field_reminder_email_value;
        }
        $response->field_reminder_email_value = $field_reminder_email_value;

        // Field Status(User Rules)...
        $user_roles = array();
        if(!empty($response->uid)){
        	$user_roles = get_user_roles($response->uid);
        }
        $response->user_roles = $user_roles;
        $rows[] = $response;
    }
    return $rows;
}

function get_user_roles($uid){
	$query = db_select('users_roles', 'ur');
	$query->condition('ur.uid', $uid);
	// Users_roles Field
    $query->fields('ur', array('rid'));
 	// Field Role Name
    $query->leftJoin('role', 'r', 'ur.rid = r.rid');
    $query->fields('r', array('name'));
    $result = $query->execute();
    $user_roles = array();
    // Looping for filling the table rows
    while($record = $result->fetchObject()) {
    	$response = new stdClass();
    	 // Rid
        $rid = "";
        if(isset($record->rid)){
        	$rid = $record->rid;
        }
        $response->rid = $rid;
    	 // Name
        $name = "";
        if(isset($record->name)){
        	$name = $record->name;
        }
        $response->name = $name;
        $user_roles[] = $response;
    }
    return $user_roles;
}

function set_format_timestamp_date($timestamp){
	return format_date($timestamp, 'custom', 'Y-m-d H:i:s', drupal_get_user_timezone());
}

function set_format_date($strtime){
	return format_date(strtotime($strtime), 'custom', 'Y-m-d H:i:s', drupal_get_user_timezone());
}

function get_checkbox_field($uid = "", $all = FALSE){
	$class = "normal-uid";
	if($all){
		$class = "all-uid";
	}
	$checkbox = '<input type="checkbox" class="form-checkbox '.$class.'" data-uid="'.$uid.'">';
	return $checkbox;
}

function send_reminder_email($from = 'aasa1@aasa1.org', $from_name, $to, $subject, $body, $sent = TRUE){
	if($from != 'aasa1@aasa1.org'){ $from = 'aasa1@aasa1.org'; }
	$test_environment = (variable_get("aasa_renewals_environment", "test") == "test");
	$test_emails = variable_get("aasa_renewals_environment_test_emails", 'adrian.morelos@akendos.com');
	$test_emails_array =  explode(',', str_replace(" ", "",$test_emails));
	$allow = TRUE;
	if(!in_array($to, $test_emails_array) && $test_environment){
		$allow = FALSE;
	}
	//  +=====================================+
	//  | Mail                                |
	//  +=====================================+ 
	$response = new stdClass();
	$response->from = $from;
	$response->from_name = $from_name;
	$response->to = $to;
	$response->subject = $subject;
	$response->body = $body;
	$response->sent = $sent;

	$message = $body;
    $email = new PHPMailer();
    $email->From = $from;
    $email->FromName = $from_name;
    $email->Subject = $subject;
    $email->Body = $message;
    $email->IsHTML(true);
    $email->AddAddress($to, '');
    
    if($sent){
    	if($allow){
		    if(!$email->Send()) {
		    	$response->sent = FALSE;
				$response->msg = "Mailer Error: " . $mail->ErrorInfo;
			} else {
				$response->msg = "Mail Message sent!";
				$response->sent = TRUE;
			}
    	}else{
    		$response->msg = "Mail Message sent<Test Environment>!";
			$response->sent = TRUE;
    	}
    }else{
			$response->msg = "Mail Message sent<Simulation>!";
			$response->sent = TRUE;
    }
    $json_encode = json_encode($response);
    watchdog('reminder_email', '<b>Detail: </b><br><pre>'.$json_encode.'</pre>');
    // dormir durante 10 segundos
  	sleep(10);
	return $response;
}

function aasa_renewals_send_reminder_email_process(){
  $operations = array();
  $sort = 'ASC';
  $order = 'mail';	
  $limit = -1;
  $renewal_config_info = get_renewal_config_info();
  $users = get_users_info($limit, $order, $sort);
  $rows = array();
  // Looping for filling the table rows
  foreach ($users as $ord) {
	 $operation =  array('aasa_renewals_send_reminder_email_do_process', array($ord, $renewal_config_info));
     $operations[] = $operation;
  }
  $batch = array();
  $num_operations = count($operations); 
  if($num_operations > 0){
	$batch = array(
	  'title' => t('Manage Renewal Process - Sending reminder emails...'),
	  'operations' => $operations,
	  'finished' => 'aasa_renewals_send_reminder_email_process_finished_callback',
	  'file' => drupal_get_path("module", "aasa_renewals").'/aasa_renewals.functions.inc',
	  'progressive' => FALSE,
	);
  }
  return $batch;
}

function aasa_renewals_reset_send_reminder_email_process(){
  $operations = array();
  $sort = 'ASC';
  $order = 'mail';	
  $limit = -1;
  $renewal_config_info = get_renewal_config_info();
  $users = get_users_info($limit, $order, $sort);
  $rows = array();
  // Looping for filling the table rows
  foreach ($users as $ord) {
	 $operation =  array('aasa_renewals_reset_send_reminder_email_do_process', array($ord, $renewal_config_info));
     $operations[] = $operation;
  }
  $batch = array();
  $num_operations = count($operations); 
  if($num_operations > 0){
	$batch = array(
	  'title' => t('Manage Reset reminder emails date...'),
	  'operations' => $operations,
	  'finished' => 'aasa_renewals_reset_send_reminder_email_process_finished_callback',
	  'file' => drupal_get_path("module", "aasa_renewals").'/aasa_renewals.functions.inc',
	);
  }
  return $batch;
}

function aasa_renewals_expire_all_user_process(){
  $operations = array();
  $sort = 'ASC';
  $order = 'mail';	
  $limit = -1;
  $renewal_config_info = get_renewal_config_info();
  $users = get_users_info($limit, $order, $sort);
  $rows = array();
  // Looping for filling the table rows
  foreach ($users as $ord) {
	 $operation =  array('aasa_renewals_expire_all_user_do_process', array($ord, $renewal_config_info));
     $operations[] = $operation;
  }
  $batch = array();
  $num_operations = count($operations); 
  if($num_operations > 0){
	$batch = array(
	  'title' => t('Manage Renewal Process - Expiring users...'),
	  'operations' => $operations,
	  'finished' => 'aasa_renewals_expire_all_user_process_finished_callback',
	  'file' => drupal_get_path("module", "aasa_renewals").'/aasa_renewals.functions.inc',
	);
  }
  return $batch;
}

function aasa_renewals_expire_all_user_do_process($user_info, $renewal_config_info, &$context){
  $test_environment = (variable_get("aasa_renewals_environment", "test") == "test");
  $test_emails = variable_get("aasa_renewals_environment_test_emails", 'adrian.morelos@akendos.com');
  $test_emails_array =  explode(',', str_replace(" ", "",$test_emails));
  $allow = TRUE;
  if(!in_array($user_info->mail, $test_emails_array) && $test_environment){
	$allow = FALSE;
  }

  $name = $user_info->first_name." ".$user_info->last_name." - ";
  $item = $name.l($user_info->mail, 'user/'. $user_info->uid);;
  $context['results'][] = 'User : ' . $item;
  $context['message'] =  'Processing User: ' . $item . ' - <'. $user_info->uid .'>';
  $apply = FALSE;
  $user_roles = array();
  $user_roles_key = array();
  foreach ($user_info->user_roles as $key => $role) {
		$user_roles[] = $role->name;
		$user_roles_key[] = $role->rid;
   }
   $apply = FALSE;
   if(in_array(ACTIVE_MEMBER_RID, $user_roles_key)){
		if(!empty($user_info->field_renewal_date_value)){
			$from = $renewal_config_info->field_renewal_period_from;
			$from_time = strtotime($from);
			$to = $renewal_config_info->field_renewal_period_to;
			$to_time = strtotime($to);
			$user_last_renewal_date = strtotime($user_info->field_renewal_date_value);
			if($user_last_renewal_date < $from_time){
				$apply = TRUE;
			}
		}else{
			$apply = TRUE;
		}
   }

   if($apply && $allow){
    	custom_add_role_to_user($user_info->uid, 'Expired Member');
   }

}

function aasa_renewals_expire_all_user_process_finished_callback($success, $results, $operations) {
  // The 'success' parameter means no fatal PHP errors were detected. All
  // other error management should be handled using 'results'.
  if ($success) {
    $message = format_plural(count($results), 'One user processed.', '@count users processed.');
  }
  else {
    $message = t('Finished with an error.');
  }
  drupal_set_message($message);
}

function aasa_renewals_reset_send_reminder_email_do_process($user_info, $renewal_config_info, &$context){
  $name = $user_info->first_name." ".$user_info->last_name." - ";
  $item = $name.l($user_info->mail, 'user/'. $user_info->uid);;
  $context['results'][] = 'User : ' . $item;
  $context['message'] =  'Processing User: ' . $item . ' - <'. $user_info->uid .'>';

  $from = $renewal_config_info->field_renewal_period_from;
  $from_time = strtotime($from);
  $to = $renewal_config_info->field_renewal_period_to;
  $to_time = strtotime($to);

  $status = "";
  $ord = $user_info;
  $user_roles = array();
  $user_roles_key = array();
  foreach ($ord->user_roles as $key => $role) {
	$user_roles[] = $role->name;
	$user_roles_key[] = $role->rid;
  }

  if(in_array(ACTIVE_MEMBER_RID, $user_roles_key)){
	if(!empty($ord->field_renewal_date_value)){
		$user_last_renewal_date = strtotime($ord->field_renewal_date_value);
		if($user_last_renewal_date >= $from_time){
			$status = "Renewed";
		}else{
			$status = "No Renewed";
		}
	}else{
		$status = "No Renewed";
	}
  }else{
   $status = "No Renewed";
  }

  if($status != "Renewed"){
	  $user_object = user_load($ord->uid);
	  $user_object->field_reminder_email['und'][0]['value'] = "";
	  user_save($user_object);
  }

}

function aasa_renewals_reset_send_reminder_email_process_finished_callback($success, $results, $operations) {
  // The 'success' parameter means no fatal PHP errors were detected. All
  // other error management should be handled using 'results'.
  if ($success) {
    $message = format_plural(count($results), 'One user processed.', '@count users processed.');
  }
  else {
    $message = t('Finished with an error.');
  }
  drupal_set_message($message);
}

function aasa_renewals_send_reminder_email_do_process($user_info, $renewal_config_info, &$context){

  $test_environment = (variable_get("aasa_renewals_environment", "test") == "test");
  $test_emails = variable_get("aasa_renewals_environment_test_emails", 'adrian.morelos@akendos.com');
  $test_emails_array =  explode(',', str_replace(" ", "",$test_emails));
  $allow = TRUE;

  $name = $user_info->first_name." ".$user_info->last_name." - ";
  $item = $name.l($user_info->mail, 'user/'. $user_info->uid);;
  $context['results'][] = 'User : ' . $item;
  $context['message'] =  'Processing User: ' . $item . ' - <'. $user_info->uid .'> '.date('h:i:s') ;
  $apply = FALSE;
  $response = new stdClass();
  if(isset($user_info->mail)){
    if(!empty($user_info->field_reminder_email_value)){
      if(apply_to_send_email($user_info->field_reminder_email_value, $renewal_config_info)){
        $apply = TRUE;
      }
    }else{
       $apply = TRUE;
    }
    
    if($apply){
      $subject = $renewal_config_info->field_reminder_email_subject_value;
      $body = $renewal_config_info->field_reminder_email_body_value;
      $emails = $user_info->mail;
      $from = 'aasa1@aasa1.org';
      $from_name = 'AASA';
      $response = send_reminder_email($from, $from_name, $emails, $subject, $body, TRUE);
      if(!in_array($emails, $test_emails_array) && $test_environment){
		$allow = FALSE;
	  }
    }else{
       $response->sent = FALSE;
       $response->msg = 'Reminder email already sent to this user.';
    }
 
  }else{
    $response->sent = FALSE;
    $response->msg = 'Please specify a valid username';
  }

  if($response->sent){
  	if($allow){
	  	$now_time = strtotime('now');
	    $user_object = user_load($user_info->uid);
	    $user_object->field_reminder_email['und'][0]['value'] = $now_time;
	    user_save($user_object);
  	}
  }
  drupal_set_message($message = $response->msg, $type = 'status', $repeat = FALSE);
}

function aasa_renewals_send_reminder_email_process_finished_callback($success, $results, $operations) {
  // The 'success' parameter means no fatal PHP errors were detected. All
  // other error management should be handled using 'results'.
  if ($success) {
    $message = format_plural(count($results), 'One user processed.', '@count users processed.');
  }
  else {
    $message = t('Finished with an error.');
  }
  drupal_set_message($message);
}

/*
*  
*/
function get_environment_mockup($renewal_config_info){
	$form = drupal_get_form('aasa_renewals_environment_form');
  	$aasa_renewals_options_form = drupal_render($form);
  	return $aasa_renewals_options_form;
}

