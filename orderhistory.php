<?php
error_reporting( error_reporting() & ~E_NOTICE );
//1. เชื่อมต่อ database:
include('condb.php'); 

$member_id = $_POST["ID"];
$query = "SELECT a.o_id,a.member_id,a.status , a.remark, b.d_qty ,b.d_subtotal , c.p_name
FROM order_head as a 
INNER JOIN order_detail as b ON a.o_id=b.o_id
INNER JOIN tbl_product as c ON b.p_id=c.p_id 
WHERE a.member_id='$ID' ORDER BY o_id ASC" or die("Error:" . mysqli_error($conn));
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$result = mysqli_query($conn, $query);
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:

echo ' <table id="example1" class="table table-bordered table-striped">';
  //หัวข้อตาราง
  echo "<thead>";
    echo "<tr class='info'>
    <br>
      <th width='15%'>เลขออเดอร์</th>
      <th width='20%'>สินค้า</th>
      <th width='10%'>จำนวน</th>
      <th width='10%'>ราคา</th>
      <th width='20%'>สถานะ</th>
      <th >เลขไปษณีย์</th>
      
      
  
    </tr>";
  echo "</thead>";
  while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
    echo "<td>" .$row["o_id"] .  "</td> ";
    echo "<td>" .$row["p_name"] .  "</td> ";
    echo "<td>" .$row["d_qty"] .  "</td> ";
    echo "<td>" .$row["d_subtotal"] .  "</td> ";
    echo "<td>" .$row["status"] . "</td> ";
    echo "<td>" .$row["remark"]. "</td> ";


   
  }
echo "</table>";
//5. close connection
mysqli_close($conn);
?>