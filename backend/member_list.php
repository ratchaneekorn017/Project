<?php
error_reporting( error_reporting() & ~E_NOTICE );
//1. เชื่อมต่อ database:
include('connections.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี

//2. query ข้อมูลจากตาราง tb_admin:
$query = "SELECT * FROM tbl_member ORDER BY member_id ASC" or die("Error:" . mysqli_error($con));
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$result = mysqli_query($con, $query);
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
echo  "<table id='example1' class='display table table-bordered table-hover' cellspacing='0'> "  ;
  //หัวข้อตาราง
  echo "<thead>";
    echo "<tr align='center' class='info'>
      <th width='5%'>id</th>
      <th>img</th>
      <th>Username</th>
      <th>ชื่อ</th>
      <th>นามสกุล</th>
      <th>อีเมลล์</th>
      <th>เบอร์โทร</th>
      <th width=20%>ที่อยู่</th>
      <th  width=8% >เปลี่ยนรหัส</th>
      <th width=5%>แก้ไข</th>
      <th width=5%>ลบ</th>
    </tr>";
  echo "</thead>";
  while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
    echo "<td>" .$row["member_id"] .  "</td> ";
    echo "<td align=center>"."<img src='img/".$row['m_img']."' width='100'>"."</td>";
    echo "<td>" .$row["m_user"] .  "</td> ";
    echo "<td>" .$row["m_name"] .  "</td> ";
    echo "<td>" .$row["m_lname"] . "</td>";
    echo "<td>" .$row["m_email"] .  "</td> ";
    echo "<td>" .$row["m_tel"] .  "</td> ";
    echo "<td>" .$row["m_address"] .  "</td> ";
    //แก้ไขรหัสผ่าน
    echo "<td><a href='member.php?act=rwd&ID=$row[0]' class='btn btn-primary btn-xs'>rpwd</a></td>";
    //แก้ไขข้อมูล
    echo "<td><a href='member.php?act=edit&ID=$row[0]' class='btn btn-warning btn-xs'>edit</a> </td> ";

    
    
    //ลบข้อมูล
    echo "<td><a href='member_form_del_db.php?ID=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\" class='btn btn-danger btn-xs'>del</a></td> ";
  echo "</tr>";
  }
echo "</table>";
//5. close connection
mysqli_close($con);
?>