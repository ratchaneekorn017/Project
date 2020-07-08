<meta charset="UTF-8">
<?php

include('../condb.php');  
$o_id = $_REQUEST["ID"];



$sql = "DELETE FROM order_head  WHERE o_id='$o_id' ";
$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error($conn));
$sql1 = "DELETE FROM  order_detail  WHERE o_id='$o_id' ";
$result1 = mysqli_query($conn, $sql1) or die ("Error in query: $sq1l " . mysqli_error($conn));
$sql2 = "DELETE FROM  ordertrackhistory WHERE o_id='$o_id' ";
$result2 = mysqli_query($conn, $sql2) or die ("Error in query: $sql2 " . mysqli_error($conn));


//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	//echo "alert('Delete Succesfuly');";
	echo "window.location = 'order.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to delete again');";
	echo "</script>";
}
?>