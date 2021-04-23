<?php

function Connect()
{
	$dbhost = "us-cdbr-east-03.cleardb.com";
	$dbuser = "b594c467795321";
	$dbpass = "4c14ee23";
	$dbname = "heroku_190e37bdf41a68f";

	//Create Connection
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

	return $conn;
}
?>
