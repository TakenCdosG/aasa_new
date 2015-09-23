<?php
mail($user->mail,'Reminder Email' ,'Reminder Email.'."\r\n"
//.'It is time to renew your '.SITE_NAME.' '.date("Y",$config_data['now']).' membership. An early dues payment rate of '.' available now through'
  . 'Go here to pay by CreditCard. '.$base_root.'/renewal-membership'."\r\n"
  .'If you want pay by check Please make check payable to: "'.SITE_NAME.'" and send to:'. "\r\n"
  .'Benson Won, MPH'."\r\n"
  .'Chief Administrative Officer'. "\r\n"
  .'Department of Surgery'. "\r\n"
  .'UC Davis School of Medicine'. "\r\n"
  .'UC Davis Health System'."\r\n"
  .'916-734-7886'."\r\n"
  .'http://surgery.ucdmc.ucdavis.edu'."\r\n \r\n"
  .'Thank you, '. "\r\n"
  .SITE_NAME, HEADERS);
