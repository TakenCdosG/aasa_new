<?php

function aasa_manage_renewal_process(){
	module_load_include('inc', 'aasa_renewals', 'aasa_renewals.functions');
  module_load_include('inc', 'aasa_renewals', 'aasa_renewals.forms');
  drupal_add_js(drupal_get_path('module', 'aasa_renewals') . '/js/aasa_renewals.js', array("scope" => "footer"));
	$renewal_config_info = get_renewal_config_info();
  $info = array();
  $info["renewal_period"] = get_renewal_period_mockup($renewal_config_info);
  $info["current_available_reminder_date_and_amount"] = get_current_available_reminder_date_and_amount_mockup($renewal_config_info);
  $info["user_membership_renewal_table"] = get_user_membership_renewal_table_mockup($renewal_config_info);
  $html = theme('aasa_renewals_manage_renewal_process', array('info' => $info));
  return $html;
}

function send_reminder_email_page($uid){
  module_load_include('inc', 'aasa_renewals', 'aasa_renewals.functions');
  $response = new stdClass();
  if(!empty($uid)){
      $renewal_config_info = get_renewal_config_info();
      $user_info = get_user_info($uid);
      $apply = FALSE;
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
          $from = 'AASA';
          $from_name = 'AASA';
          $response = send_reminder_email($from, $from_name, $emails, $subject, $body);
        }else{
           $response->sent = FALSE;
           $response->msg = 'Reminder email already sent to this user.';
        }
     
      }else{
        $response->sent = FALSE;
        $response->msg = 'Please specify a valid username';
      }
  }else{
    $response->sent = FALSE;
    $response->msg = 'Please specify a valid username';
  }
  
  if($response->sent){
    $now_time = strtotime('now');
    $user_object = user_load($uid);
    $user_object->field_reminder_email['und'][0]['value'] = $now_time;
    user_save($user_object);
    drupal_set_message($message = $response->msg, $type = 'status', $repeat = FALSE);
  }else{
    drupal_set_message($message = $response->msg, $type = 'warning', $repeat = FALSE);
  }
  drupal_goto('manage/renewal/process');
}

function re_send_reminder_email_page($uid){
  module_load_include('inc', 'aasa_renewals', 'aasa_renewals.functions');
  $response = new stdClass();
  if(!empty($uid)){
      $user_info = get_user_info($uid);
      if(isset($user_info->mail)){
        $renewal_config_info = get_renewal_config_info();
        $subject = $renewal_config_info->field_reminder_email_subject_value;
        $body = $renewal_config_info->field_reminder_email_body_value;
        $emails = $user_info->mail;
        $from = 'AASA';
        $from_name = 'AASA';
        $response = send_reminder_email($from, $from_name, $emails, $subject, $body);
      }else{
        $response->sent = FALSE;
        $response->msg = 'Please specify a valid username';
      }
  }else{
    $response->sent = FALSE;
    $response->msg = 'Please specify a valid username';
  }
  
  if($response->sent){
    $now_time = strtotime('now');
    $user_object = user_load($uid);
    $user_object->field_reminder_email['und'][0]['value'] = $now_time;
    user_save($user_object);
    drupal_set_message($message = $response->msg, $type = 'status', $repeat = FALSE);
  }else{
    drupal_set_message($message = $response->msg, $type = 'warning', $repeat = FALSE);
  }
  drupal_goto('manage/renewal/process');
}

function renewal_expire_user_page($uid){
  custom_add_role_to_user($uid, 'Expired Member');
  drupal_goto('manage/renewal/process');
  return '';
}

