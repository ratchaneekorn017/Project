<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี

//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม
	$member_id = $_POST["member_id"];
	$m_pass1 = md5($_POST["password1"]);
	$m_pass2 = md5($_POST["password2"]);
	
//เช็กรหัส

	if($m_pass1 != $m_pass2){
	echo "<script type='text/javascript'>";
	echo "alert('รหัสผ่านไม่ตรงกัน กรุณาใส่ใหม่อีกครั้ง');";
	echo "window.location = 'profire.php?act=rwd.php'; ";
	echo "</script>";

}else{

//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database 
	
	$sql = "UPDATE tbl_member SET  
			password ='$m_pass1'
			WHERE member_id='$member_id' ";

$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error($conn));

mysqli_close($conn); //ปิดการเชื่อมต่อ database 
}
//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('เปลี่ยนรหัสผ่านสำเร็จ');";
	echo "window.location = 'profile.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Update again');";
	echo "</script>";
}
?>