<?php
include('../condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
	//สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม
	$m_user = $_POST["m_user"];
	$m_pass = md5($_POST["password"]);
	$m_name = $_POST["m_name"];
	$m_lname =$_POST["m_lname"];
	$m_email = $_POST["m_email"];
	$m_tel = $_POST["m_tel"];
	$m_address = $_POST["m_address"];
	$newname =(isset($_POST['m_img']) ? $_POST['m_img'] :'');
//img
	$upload=$_FILES['m_img'];
	if($upload <> '') {

	//โฟลเดอร์ที่เก็บไฟล์
	$path="img/";
	//ตัวขื่อกับนามสกุลภาพออกจากกัน
	$type = strrchr($_FILES['m_img']['name'],".");
	//ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
	$newname ='img'.$numrand.$date1.$type;
	$path_copy=$path.$newname;
	$path_link="img/".$newname;
	//คัดลอกไฟล์ไปยังโฟลเดอร์
	move_uploaded_file($_FILES['m_img']['tmp_name'],$path_copy);
	}
	// เพิ่มไฟล์เข้าไปในตาราง uploadfile
	//เพิ่มเข้าไปในฐานข้อมูล
	$sql = "INSERT INTO tbl_member m_user,  password, m_name, m_lname , m_email, m_tel, m_address ,m_img)
			 VALUES('$m_user', '$m_pass', '$m_name', '$m_lname' , '$m_email', '$m_tel', '$m_address', '$newname')";

	$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error($conn));
	
	//ปิดการเชื่อมต่อ database
	mysqli_close($conn);
	//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('เพิ่มข้อมูลสมาชิกสำเร็จ');";
	echo "window.location = 'member.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to register again');";
	echo "</script>";
}
?>