<?php
define('SYSTEM_MAIL','aasa1@aasa1.org');
define('HEADERS','From: AASA ('.SYSTEM_MAIL.')' . "\r\n" .
    'Reply-To: '.SYSTEM_MAIL. "\r\n" .
    'X-Mailer: PHP/' . phpversion());

print mail('gsayas@gmail.com','test!' ,'test body', HEADERS);