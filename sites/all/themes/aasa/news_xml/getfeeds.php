<?php



/**
 * Curl example - Fetching an url and saving the content found on that url to a file (example_homepage.txt)
 */
//initializes a new session and return a cURL handle for use with the curl_setopt(), curl_exec(), and curl_close() functions.
$files = array('npr_healthcare.xml' => 'http://www.npr.org/rss/rss.php?id=1027',
				'cnn_health.xml' => 'http://rss.cnn.com/rss/cnn_health.rss',
				'wsj_health.xml' => 'http://online.wsj.com/xml/rss/3_7089.xml');

foreach($files as $target => $source){

$ch = curl_init();
//open/create a file for writing
$fp = fopen($target, "w"); //

// set the url to fetch 
curl_setopt($ch, CURLOPT_URL, $source);


//return the transfer (the result of curl_exec()) as a string instead of outputing directly
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//puts the fetching result to $fp file handler
curl_setopt($ch, CURLOPT_FILE, $fp);

// execute the curl session
curl_exec($ch);

// close curl resource to free up system resources 
curl_close($ch);

//close the file opened for writing
fclose($fp);

}

?>