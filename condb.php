<?php
// 	$conn= mysqli_connect("us-cdbr-east-02.cleardb.com","b9b339726be35f","47d8ee5","heroku_a3494caff9d39d0") or die("Error : test" . mysqli_error($conn));
// 	mysqli_query($conn, "SET NAMES 'utf8' ");
// error_reporting( error_reporting() & ~E_NOTICE );
// date_default_timezone_set('Asia/Bangkok');
$dbconn = pg_connect("host=ec2-52-204-232-46.compute-1.amazonaws.com dbname=dfeupmn2kslm1n user=qhthkglklzzsfc password=5355edb6ce8ccb53e95d0cd067f27d0705edd9b0f5af6ae244b15713fa4c65e3")
    or die('Could not connect: ' . pg_last_error());
?>
