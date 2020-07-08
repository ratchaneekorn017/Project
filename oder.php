<?php session_start();?>
<?php
include 'condb.php'; 
include 'h.php'; 
include  'navbar.php'; ?>
<?php 

$sql = "SELECT * FROM order_head WHERE o_id = '".$_GET["o_id"]."' ";
$query = mysqli_query($conn,$sql);
$result = $result = mysqli_fetch_array($query,MYSQLI_ASSOC);
?>
<br><br><br>
<div class="container">
<table class="table">
<thead class="thead-dark">
    <tr>
      <td colspan="1" bgcolor="#b1db81">เลขออเดอร์</td>
      <td colspan="1" bgcolor="#b1db81">
	  <?=$result["o_id"];?></td>
    </tr>
    <tr>
      <td width="71">ชื่อ-นามสกุล</td>
      <td width="217">
	  <?=$result["o_name"];?></td>
    </tr>
    <tr>
      <td>ที่อยู่</td>
      <td><?=$result["o_addr"];?></td>
    </tr>
    <tr>
      <td>เบอร์โทรศัพท์</td>
      <td><?=$result["o_phone"];?></td>
    </tr>
    <tr>
      <td>อีเมล์</td>
      <td><?=$result["o_email"];?></td>
    </tr>
</thead>
  </table>

  <br>

<table class="table">
  <thead class="thead-dark">
  <td colspan="1" bgcolor="#CEE7FF">สินค้า</td>
    
  <td colspan="1" bgcolor="#CEE7FF">ราคาต่อชิ้น</td>
  <td colspan="1" bgcolor="#CEE7FF">จำนวน</td>
  <td colspan="1" bgcolor="#CEE7FF">ราคารวม</td>
  </thead>
<?php

$Total = 0;
$SumTotal = 0;

$sql2 = "SELECT * FROM order_detail WHERE o_id = '".$_GET["o_id"]."' ";
$query2 = mysqli_query($conn,$sql2);

while($result2 = mysqli_fetch_array($query2,MYSQLI_ASSOC))
{
		$sql3 = "SELECT * FROM tbl_product WHERE p_id = '".$result2["p_id"]."' ";
		$query3 = mysqli_query($conn,$sql3);
		$result3 = $result = mysqli_fetch_array($query3,MYSQLI_ASSOC);
		$Total = $result2["d_qty"] * $result3["p_price"];
		$SumTotal = $SumTotal + $Total;
	  ?>
	  <tr>
		
		<td><?=$result3["p_name"];?></td>
		<td><?=$result3["p_price"];?></td>
		<td><?=$result2["d_qty"];?></td>
		<td><?=number_format($Total,2);?></td>
	  </tr>
	  <?php
 }
  ?>
</table>
<div align="right"> 
ราคารวม <?php echo number_format($SumTotal,2);?>
<br>

<h3>
  
  <a href="payment.php" >  แจ้งชำระเงิน </a>
  <br>
</h3>
</div>

<?php
mysqli_close($conn);
?>

</div>
</body>
<?php include 'footer1.php';
include 'script4.php'; ?>

