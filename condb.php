<?php
	$conn= mysqli_connect("us-cdbr-east-02.cleardb.com","b9b339726be35f","47d8ee5","") or die("Error : test" . mysqli_error());
	mysqli_query($conn, "SET NAMES 'utf8' ");
error_reporting( error_reporting() & ~E_NOTICE );
date_default_timezone_set('Asia/Bangkok');
?>
