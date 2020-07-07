<?php
error_reporting( error_reporting() & ~E_NOTICE );

include('connections.php');  
$query = " SELECT * FROM tbl_product as p 
INNER JOIN tbl_type  as t ON p.type_id=t.type_id 
ORDER BY p.p_id ASC" or die("Error:" . mysqli_error($con));

$result = mysqli_query($con, $query);


echo ' <table id="example1" class="table table-bordered table-striped">';
  //หัวข้อตาราง
  echo "<thead>";
    echo "<tr class='info'>
      <th width='5%'>id</th>
      <th width=8%>type</th>
      <th width=15%>name</th>
      <th width=30%>p_detail</th>
      <th width=15%>price</th>
      <th width=5%>quantity</th>
      <th width=15%>img</th>
      <th width=5%>edit</th>
      <th width=5%>delete</th>
    </tr>";
  echo "</thead>";
  while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
    echo "<td>" .$row["p_id"] .  "</td> ";
    echo "<td>" .$row["type_name"] .  "</td> ";
    echo "<td>" .$row["p_name"] .  "</td> ";
    echo "<td>" .$row["p_detail"] .  "</td> ";
    echo "<td>" ."ราคา"." ".$row["p_price"] ." บาท".  "</td> ";
    echo "<td>" .$row["quantity"] ."</td>";
      echo "<td align=center>"."<img src='img/".$row['p_img']."' width='100'>"."</td>";

    //แก้ไขข้อมูล
    echo "<td><a href='product.php?act=edit&ID=$row[0]' class='btn btn-warning btn-xs'>edit</a></td> ";
    
    //ลบข้อมูล
    echo "<td><a href='product_form_del_db.php?ID=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\" class='btn btn-danger btn-xs'>del</a></td> ";
  echo "</tr>";
  }
echo "</table>";
//5. close connection
mysqli_close($con);
?>