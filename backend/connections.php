<?php
// $con= mysqli_connect("localhost","root","","projectweb") or die("Error: " . mysqli_error($con));
// mysqli_query($con, "SET NAMES 'utf8' ");
// error_reporting( error_reporting() & ~E_NOTICE );
// date_default_timezone_set('Asia/Bangkok');
$conn = pg_connect("host=ec2-52-204-232-46.compute-1.amazonaws.com dbname=dfeupmn2kslm1n user=qhthkglklzzsfc password=5355edb6ce8ccb53e95d0cd067f27d0705edd9b0f5af6ae244b15713fa4c65e3")
    or die('Could not connect: ' . pg_last_error()); 
?>