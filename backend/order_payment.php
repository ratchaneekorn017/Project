<?php
error_reporting( error_reporting() & ~E_NOTICE );
//1. เชื่อมต่อ database:
include('connections.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
$o_id = $_REQUEST["ID"];

$sql = "SELECT * FROM payment WHERE o_id='$o_id'";

$result = mysqli_query($con, $sql)or die ("Error in query: $sql" . mysqli_error($con));
$row = mysqli_fetch_array($result);
extract($row);
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
echo ' <table id="example1" class="table table-bordered table-striped">';
  //หัวข้อตาราง
  echo "<thead>";
    echo "<tr class='info'>
     
      <th>เลขออเดอร์</th>
      <th>สถานะ</th>
      <th>จำนวนเงิน</th>
      <th>ธนาคารที่ชำระ</th>
      <th width=30%>สลิป</th>
      <th width=6%>เลขปณ.</th>
    </tr>";
  echo "</thead>";
  while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
    echo "<td>" .$row["o_id"] .  "</td> ";
    echo "<td>" .$row["pm_total	"] .  "</td> ";
    echo "<td>" .$row["bank"] .  "</td> ";
    echo "<td align=center>"."<img src='img/".$row['pm_img']."' width='100'>"."</td>";

 
  

   
    
  echo "</tr>";
  }
echo "</table>";
//5. close connection
mysqli_close($con);
?>