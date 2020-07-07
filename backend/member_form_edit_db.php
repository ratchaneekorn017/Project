<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('connections.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี

//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม
	$member_id = $_POST["member_id"];
	$m_name = $_POST["m_name"];
	$m_lname =$_POST["m_lname"];
	$m_email = $_POST["m_email"];
	$m_tel = $_POST["m_tel"];
	$m_address = $_POST["m_address"];
	$userlevel =$_POST["userlevel"];

	$m_img = (isset($_POST['m_img']) ? $_POST['m_img'] : '');
	$m_img2 = $_POST['m_img2'];
	$upload=$_FILES['m_img']['name'];
	if($upload !='') { 
 
	//โฟลเดอร์ที่เก็บไฟล์
	$path="img/";
	//ตัวขื่อกับนามสกุลภาพออกจากกัน
	$type = strrchr($_FILES['m_img']['name'],".");
	//ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
	$newname =$numrand.$date1.$type;
 
	$path_copy=$path.$newname;
	$path_link="img/".$newname;
	//คัดลอกไฟล์ไปยังโฟลเดอร์
	move_uploaded_file($_FILES['m_img']['tmp_name'],$path_copy);  
		
	}else {
		$newname = $m_img2;
	
	}
	

//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database 
	
	$sql = "UPDATE tbl_member SET  
			
			
			m_name='$m_name',
			m_lname= '$m_lname',
			m_email='$m_email',
			m_tel='$m_tel', 
			m_address='$m_address', 
			m_img =  '$newname' 
			WHERE member_id='$member_id' ";

$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));

mysqli_close($con); //ปิดการเชื่อมต่อ database 

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('แก้ไขข้อมูลสำเร็จ');";
	echo "window.location = 'member.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Update again');";
	echo "</script>";
}
?>