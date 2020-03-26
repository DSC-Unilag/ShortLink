<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'urlshorten_db'; // Database Name
$base_url = 'http://localhost/url_shortner/';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

if (isset($_GET['url']) && ($_GET[url] != "")) {
	$url = urldecode($_GET['url']);
	if(filter_var($url, FILTER_VALIDATE_URL)){
		$shortUrl = getShortUrl($url);
	}
}

?>