<?php
define('DB_SERVER', 'ec2-54-247-122-209.eu-west-1.compute.amazonaws.com');
define('DB_USERNAME', 'gajathcmegluxb');
define('DB_PASSWORD', '4c608855f84a2a5e035a8dc71c1660ec0aa25a5186456d332174120bb1d1b211');
define('DB_NAME', 'd4m1050q9s8l9m');

/* Attempt to connect to MySQL database */
$link = pg_connect("host=".DB_SERVER." dbname=". DB_NAME ." user=" . DB_USERNAME . " password=" .DB_PASSWORD. "")
		or die('Could not connect1: ' . pg_last_error());
?>
