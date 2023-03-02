<?php
$url = $_GET['url'];

// create curl resource
$ch = curl_init();

// set url
curl_setopt($ch, CURLOPT_URL, $url);

// return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// set user agent
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);

// execute curl
$response = curl_exec($ch);

// close curl resource to free up system resources
curl_close($ch);

// output the response
echo $response;
?>