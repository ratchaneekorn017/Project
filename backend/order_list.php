<?php
error_reporting( error_reporting() & ~E_NOTICE );
//1. เชื่อมต่อ database:
include('../condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//2. query ข้อมูลจากตาราง tb_admin:

$query = "SELECT * FROM order_head as p INNER JOIN order_detail as t ON p.o_id=t.o_id INNER JOIN tbl_product as a ON t.p_id=a.p_id ORDER BY p.o_id ASC" or die("Error:" . mysqli_error($conn));
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$result = mysqli_query($conn, $query);
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
echo ' <table id="example1" class="table table-bordered table-striped">';
  //หัวข้อตาราง
  echo "<thead>";
    echo "<tr class='info'>
      <th width='5%'>id</th>
      <th>ชื่อ-นามสกุล</th>
      <th>อีเมลล์</th>
      <th>เบอร์โทรศัพท์</th>
      <th width=30%>ที่อยู่</th>
      <th width=8%>สินค้า</th>
      <th width=1%>จำนวน</th>
      
      <th width=5%>ราคา</th>
      <th width=3%>สถานะ</th>
      <th width=3%>แก้ไข</th>
      <th width=2%>ลบ</th>
    </tr>";
  echo "</thead>";
  while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
    echo "<td>" .$row["o_id"] .  "</td> ";
    echo "<td>" .$row["o_name"] .  "</td> ";
    echo "<td>" .$row["o_email"] .  "</td> ";
    echo "<td>" .$row["o_phone"] .  "</td> ";
    echo "<td>" .$row["o_addr"] .  "</td> ";
    echo "<td>" .$row["p_name"] .  "</td> ";
    echo "<td>" .$row["d_qty"] .  "</td> ";
    echo "<td>" .$row["d_subtotal"] .  "</td> ";

    //แก้ไขข้อมูล
    echo "<td><a href='order.php?act=upd&ID=$row[0]' class='btn btn-primary btn-xs'>ems</a></td> ";
    echo "<td><a href='order.php?act=edit&ID=$row[0]' class='btn btn-warning btn-xs'>edit</a></td> ";
   
    //ลบข้อมูล
    echo "<td><a href='order_form_del_db.php?ID=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\" class='btn btn-danger btn-xs'>del</a></td> ";
  echo "</tr>";
  }
echo "</table>";
//5. close connection
mysqli_close($conn);
?>