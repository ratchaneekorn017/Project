<?php
error_reporting( error_reporting() & ~E_NOTICE );

include('connections.php');  

$query = "SELECT * FROM payment  ORDER BY o_id ASC" or die("Error:" . mysqli_error($con));

$result = mysqli_query($con, $query);

echo ' <table id="example1" class="table table-bordered table-striped">';
  //หัวข้อตาราง
  echo "<thead>";
    echo "<tr class='info'>
      <th width='5%'>id</th>
      <th>ชื่อ-นามสกุล</th>
      <th>ธนาคาร</th>
      <th>ราคาที่ชำระ</th>
      <th  width=15% > สลิป</th>
    
    </tr>";
  echo "</thead>";
  while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
    echo "<td>" .$row["o_id"] .  "</td> ";
    echo "<td>" .$row["p_name"] .  "</td> ";
    echo "<td>" .$row["bank"] .  "</td> ";
    echo "<td>" .$row["pm_total"] .  "</td> ";
    
    echo "<td align=center>"."<img src='img/".$row['pm_img']."' width='100'>"."</td>";

   
  echo "</tr>";
  }
echo "</table>";
//5. close connection
mysqli_close($con);
?>