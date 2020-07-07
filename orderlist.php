<br><br>
<?php
error_reporting( error_reporting() & ~E_NOTICE );
//1. เชื่อมต่อ database:
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//2. query ข้อมูลจากตาราง tb_admin:
$o_id =$_GET['o_id'];

$query = "SELECT * FROM  order_head WHERE o_id=$o_id" or die("Error:" . mysqli_error($conn));
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$result = mysqli_query($conn, $query);
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
echo ' <table id="example1" class="table table-bordered table-striped">';
  //หัวข้อตาราง
 
    echo " <th width='5%'>orderid</th>
      <th width='30' align='center'>ชื่อ-นามสกุล</th>
      <th width='30%'>สถานะการส่ง</th>
      <th width='30%'>เลขไปษณีย์
      </th>
 
      
  
    </th>";
 
  while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
    echo "<td>" .$row["o_id"] .  "</td> ";
    echo "<td>" .$row["o_name"] .  "</td> ";
    echo "<td>" .$row["status"] .  "</td> ";
    echo "<td>" .$row["remark"] .  "</td> ";
    


   
  }
echo "</table>";
//5. close connection
mysqli_close($conn);
?>