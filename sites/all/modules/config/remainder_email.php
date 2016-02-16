<?php
/*mail($user->mail,'Reminder Email' ,'Reminder Email.'."\r\n"
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
  .SITE_NAME, HEADERS);*/

mail($user->mail,'Reminder Email','Happy New Year AASA Members! '."\r\n \r\n"
    .'It�s time to renew your membership for 2016.  If you have not already renewed please submit your dues to maintain access to all the web tools, member queries, webinars, and free mid-year retreats.  Annual dues are $200 before February 16th, 2016 and then the amount increases to $225 after February 16th.'. "\r\n \r\n"
    .'Please go here to pay by Credit Card: '.$base_root.'/renewal-membership If you want to pay by check, please make the check payable to: "'.SITE_NAME.'" and mail to:'."\r\n \r\n"
    .'Benson Won'."\r\n"
    .'Department of Surgery'. "\r\n"
    .'UC Davis School of Medicine'. "\r\n"
    .'Cypress Building, Room 3119'. "\r\n"
    .'2221 Stockton Boulevard Sacramento, CA 95817'."\r\n \r\n"
    .'Click here to download the Member Renewal Invoice'."\r\n"
    .'https://aasa1.org/sites/default/files/2016_renewal_invoice.pdf'."\r\n \r\n"
    .'Thank you, '. "\r\n"
    .SITE_NAME, HEADERS);
