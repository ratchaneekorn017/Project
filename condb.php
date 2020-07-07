<?php
	$conn= mysqli_connect("us-cdbr-east-02.cleardb.com/","b9b339726be35f","47d8ee5","heroku_a3494caff9d39d0") or die("Error : " . mysqli_error($conn));
	mysqli_query($conn, "SET NAMES 'utf8' ");
error_reporting( error_reporting() & ~E_NOTICE );
date_default_timezone_set('Asia/Bangkok');
?>
