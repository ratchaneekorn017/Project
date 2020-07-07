<?php
include('condb.php');  
include('h.php');

	$o_id = $_POST["o_id"];
	$p_name = $_POST["p_name"];
	$bank =$_POST["bank"];
	$pm_total = $_POST["pm_total"];
	$dtm = Date("Y-m-d G:i:s");
	$m_address = $_POST["m_address"];
	$status = 'แจ้งชำระเงินแล้ว';
	$remark = 'กำลังทำการตรวจสอบ';

	$m_img2 = $_POST['m_img2'];

	$date1 = date("ymd_his");
	$numrand = (mt_rand());
	$m_img = (isset($_POST['pm_img']) ? $_POST['pm_img'] : '');
	$upload =$_FILES['pm_img']['name'];
	if($upload !=''){
		$path="backend/img/";
		$type= strchr($_FILES['pm_img']['name'],".");
		$newname = $numrand.$date1.$type;
		$path_copy = $path.$newname;
		$path_link="backend/img/".$newname;
		move_uploaded_file($_FILES['pm_img']['tmp_name'],$path_copy);
	}else{
		$newname="$m_img2";
	}
	
	// เพิ่มไฟล์เข้าไปในตาราง uploadfile
	//เพิ่มเข้าไปในฐานข้อมูล
	$sql = "INSERT INTO payment ( o_id ,  p_name ,bank , pm_total , dtm  ,pm_img)
			 VALUES('$o_id', '$p_name', '$bank', '$pm_total' , '$dtm',  '$newname')";

	$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error($conn));
	

	$sql1 = "UPDATE  order_head SET status='$status' ,remark='$remark' WHERE o_id='$o_id'";
	$result1 = mysqli_query($conn, $sql1) or die ("Error in query: $sql1 " . mysqli_error($conn));

	$sql2 = "UPDATE  ordertrackhistory SET status='$status' ,remark='$remark' WHERE o_id='$o_id'";
	$result2 = mysqli_query($conn, $sql2) or die ("Error in query: $sql2 " . mysqli_error($conn));

	//ปิดการเชื่อมต่อ database
	mysqli_close($conn);
	//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('แจ้งชำระเงินสำเร็จ');";
	echo "window.location = 'index.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('แจ้งชำระไม่สำเร็จ');";
	echo "</script>";
}
?>