<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('../condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี

//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม
	$o_id = $_REQUEST["o_id"];
	$o_name = $_REQUEST["o_name"];
	$o_email = $_REQUEST["o_email"];
	$o_phone = $_REQUEST["o_phone"];
	$o_addr = $_REQUEST["o_addr"];
	

//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database 
	
	$sql = "UPDATE order_head SET  
			o_name='$o_name',
			o_email='$o_email',
			o_phone='$o_phone', 
			o_addr='$o_addr' 
			WHERE o_id='$o_id' ";

$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error($conn));

mysqli_close($conn); //ปิดการเชื่อมต่อ database 

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Update Succesfuly');";
	echo "window.location = 'order.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Update again');";
	echo "</script>";
}
?>