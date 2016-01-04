<?php

/*
 * Get the current node
 */
//define('SUCCESS_PAGE_CHECK_PAYMENT','/thank-you'); // url check payment
//payment stuff
define('PRODUCT_MEMBERSHIP_TYPE', 'product');
define('PRODUCT_MEMBERSHIP_ID', '13');
define('PRODUCT_EVENT_TYPE', 'event');
define('PRODUCT_MEMBERSHIP_RENEWAL_ID', '146');

//Private Pages
define('SYSTEM_MAIL', 'aasa1@aasa1.org');

define('ADMIN_MAIL', 'dawn@thinkcreativegroup.com, meyerjr@musc.edu, stephanie.farmer@ucdenver.edu, cmoore62@jhmi.edu, bensonwon88@gmail.com'); //execute change_admin_callback as well
define('ADMIN_MAIL_TEST', 'dawn@thinkcreativegroup.com, melanie@thinkcreativegroup.com, keeler@surgery.wisc.edu, slkearne@bcm.edu, bwon@ucdavis.edu, adrian.morelos@akendos.com');
//define('ADMIN_MAIL','giovanny.sayas@akendos.com, maicol.lopez@akendos.com, dawn@thinkcreativegroup.com,melanie@thinkcreativegroup.com ');//execute change_admin_callback as well

define('MEMBERSHIP_DIRECTORY_PATH', 'membership-directory'); //View
define('MEMBER_TOOLKIT_PATH', 'member-toolkit'); //Node (Member Toolkit Landing Page)

define('MEMBER_RESOURCES_NID', '58'); //Node (Internal Page)
define('PRIVATE_1', '133'); //Node (Internal Page)
define('PRIVATE_2', '136'); //Node (Internal Page)
define('PRIVATE_3', '131'); //Node (Internal Page)
define('PRIVATE_4', '134'); //Node (Internal Page)
define('PRIVATE_5', '132'); //Node (Internal Page)
define('PRIVATE_6', '231'); //Node (Internal Page)
define('PRIVATE_7', '229'); //Node (Internal Page)
define('PRIVATE_8', '165'); //Node (Internal Page)
define('PRIVATE_9', '135'); //Node (Internal Page)
define('PRIVATE_10', '259'); //Node (Internal Page)

define('SUCCESS_PAGE_APPLY_MEMBERSHIP', 'thank-you-for-applying'); //Node (page)
define('SITE_NAME', 'AASA');
define('CAPTCHA', 'Surgeons');
define('REGISTRATION_FEE', '20');
define('ALT_NUMBER', 'Alt.');
define('RENEWAL_CONFIG', '140');
define('INVALID_RENEWAL', 'node/144');

//Roles (Statuses of Members)
define('SUPER', '3');
define('ADMINISTRATOR', '7');
define('PENDING_PAYMENT', '4');
define('PENDING_APROVAL', '6');
define('ACTIVE', '5');
define('EXPIRED', '8');
define('INACTIVE', '9');


//Header for outgoing Emails
define('HEADERS', 'From: AASA (' . SYSTEM_MAIL . ')' . "\r\n" .
        'Reply-To: ' . SYSTEM_MAIL . "\r\n" .
        'X-Mailer: PHP/' . phpversion());

date_default_timezone_set('UTC');

define('MASS_EMAIL_PATH', 'mass-email');


/* sponsorship form */
//define('PLATINUM','3000.00');
//define('GOLD','1500.00');
//define('SILVER','1000.00');
//define('BRONZE','500.00');

define('PLATINUM', '3000');
define('GOLD', '1500');
define('SILVER', '1000');
define('BRONZE', '500');

//testing
global $user_test;

$user_test = array(671, 1166, 1167, 1168, 1169, 1170, 1182, 810, 1053);
