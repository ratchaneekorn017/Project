<?php
error_reporting( error_reporting() & ~E_NOTICE );

include('../condb.php');  

$query = "SELECT * FROM payment  ORDER BY o_id ASC" or die("Error:" . mysqli_error($conn));

$result = mysqli_query($conn, $query);

echo ' <table id="example1" class="table table-bordered table-striped">';
  //หัวข้อตาราง
  echo "<thead>";
    echo "<tr class='info'>
      <th width='5%'>id</th>
      <th>ชื่อ-นามสกุล</th>
      <th>ธนาคาร</th>
      <th>ราคาที่ชำระ</th>
      <th  width=15% > สลิป</th>
      <th width=5%>ลบ </th>
    </tr>";
  echo "</thead>";
  while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
    echo "<td>" .$row["o_id"] .  "</td> ";
    echo "<td>" .$row["p_name"] .  "</td> ";
    echo "<td>" .$row["bank"] .  "</td> ";
    echo "<td>" .$row["pm_total"] .  "</td> ";
    
    echo "<td align=center>"."<img src='img/".$row['pm_img']."' width='100'>"."</td>";
    echo "<td><a href='payment_form_del_db.php?ID=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\" class='btn btn-danger btn-xs'>del</a></td> ";   
  echo "</tr>";
  }
echo "</table>";
//5. close connection
mysqli_close($conn);
?>