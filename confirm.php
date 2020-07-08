

<?php session_start(); 
//echo '<pre>';
//print_r($_SESSION);
//echo '</pre>';

$member_id = $_SESSION['member_id'];
//echo $member_id;
include 'condb.php';
//2. query ข้อมูลจากตาราง:
$qmember = "SELECT
 m_name,
 m_address,
 m_email,
 m_tel
 FROM tbl_member 
 WHERE member_id=$member_id ";
$rsmember = mysqli_query($conn, $qmember) or die ("Error in query: $qmember " . mysqli_error($conn));
$rowmember = mysqli_fetch_array($rsmember);
//echo '<pre>';
//print_r($rowmember);
 //echo '</pre>';
include 'h.php';
include 'navbar.php'
?>
<br><br><br>
<body>
<div class="container">
<form id="frmcart" name="frmcart" method="post" action="saveorder.php">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <td width="1558" colspan="5" bgcolor="#b1db81" align="center">
      <strong><h4>สั่งซื้อสินค้า</h4></strong></td>
    </tr>
    <tr>
      <td bgcolor=""><p class="a">สินค้า</p></td>
      <td align="right" bgcolor=""><p class="a">ราคา</p></td>
      <td align="right" bgcolor=""><p class="a">จำนวน</p></td>
      <td align="right" bgcolor=""><p class="a">ราคารวม</p></td>
    </tr>
<?php
	$total=0;
	foreach($_SESSION['cart'] as $p_id=>$qty)
	{
		$sql	= " SELECT * FROM tbl_product WHERE p_id=$p_id";
		$query	= mysqli_query($conn, $sql);
		$row	= mysqli_fetch_array($query);
		$sum	= $row['p_price']*$qty;
		$total	+= $sum;
    echo "<tr>";
    echo "<td><p class='a'>" . $row["p_name"] . "</p></td>";
    echo "<td align='right'><p class='a'>" .number_format($row['p_price'],2) ."</p></td>";
    echo "<td align='right'><p class='a'>$qty</p></td>";
    echo "<td align='right'><p class='a'>".number_format($sum,2)."</p></td>";
    echo "</tr>";
	}
	echo "<tr>";
    echo "<td  align='right' colspan='3' bgcolor='#CEE7FF'><p class='a'>รวม</p></td>";
    echo "<td align='right' bgcolor='#CEE7FF'>"."<p class='a'>".number_format($total,2)."</p>"."</td>";
    echo "</tr>";
?>
  </thead>
</table>
<br>
<p>    
<table class="table">
  <thead class="thead-dark">
<tr>
	<td colspan="2" bgcolor="#b1db81">รายละเอียดในการติดต่อ</td>
</tr>
<tr>
    <td bgcolor="">ชื่อ</td>
    <td><input name="name" type="text" class="form-control" id="name" value="<?php echo $rowmember['m_name']. '  '.$rowmember['m_lname'] ;?>" required/></td>
</tr>
<tr>
    <td width="7%" bgcolor="">ที่อยู่</td>
    <td width="78%">
    <input name="address" type="text" class="form-control" id="address" value="<?php echo $rowmember['m_address'] ;?>" required></input>
    </td>
</tr>
<tr>
  	<td bgcolor="">อีเมล</td>
  	<td><input name="email" type="email" class="form-control" id="email" value="<?php echo $rowmember['m_email'];?>" required/></td>
</tr>
<tr>
  	<td bgcolor="">เบอร์ติดต่อ</td>
    <td><input name="phone" type="text" class="form-control" id="phone" value="<?php echo $rowmember['m_tel'];?>" required /></td>


</tr>
<tr>
	<td colspan="2" align="center" bgcolor="">
    <input type="hidden" name="member_id" value="<?php echo $member_id;?>">
	<input type="submit" class="button3"  name="Submit2" value="สั่งซื้อ"   />
</td>
</tr>
  </thead>
</table>
</form>
</div>
<?php include 'script4.php';?>
</body>
