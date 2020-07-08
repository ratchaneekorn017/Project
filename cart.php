<?php session_start(); 
include('condb.php');

  $ID = $_SESSION['member_id'];
  $name = $_SESSION['m_name'];
  $level = $_SESSION['userlevel'];
 
 	if($level!='m'){
    Header("Location: form_login_m.php");  
  }  

	include('h.php');
	include('navbar.php');
	 
	
	
	$p_id =mysqli_real_escape_string($conn, $_GET['p_id']); 
	$act = mysqli_real_escape_string($conn,$_GET['act']);
  	$qty = mysqli_real_escape_string($conn, $_GET['quantity']);


	if($act=='add' && !empty($p_id))
	{
		if(isset($_SESSION['cart'][$p_id]))
		{
			$_SESSION['cart'][$p_id]++;
		}
		else
		{
			$_SESSION['cart'][$p_id]=1;
		}
	}

	if($act=='remove' && !empty($p_id))  //ยกเลิกการสั่งซื้อ
	{
		unset($_SESSION['cart'][$p_id]);
	}

	if($act=='update')
	{
		$amount_array = $_POST['amount'];
		foreach($amount_array as $p_id=>$amount)
		{
			$_SESSION['cart'][$p_id]=$amount;
		}
	
		
	}
?>



<body>
<br><br><br>
<div class="container">
<form id="frmcart" name="frmcart" method="post" action="?act=update">
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <td colspan="5" bgcolor="#b1db81" align="center">
      <p class="a">ตะกร้าสินค้า</p></span></td>
    </tr>
    <tr>
      <td bgcolor=""><p class="a">สินค้า</p></td>
      <td align="right" bgcolor="" ><p class="a">ราคา</p></td>
      <td align="right" bgcolor=""><p class="a">จำนวน</p></td>
      <td align="right" bgcolor=""><p class="a">รวม(บาท)</p></td>
      <td align="center" bgcolor=""><p class="a">ลบ</p> </td>
	</tr>
  </thead>
<?php
$total=0;
if(!empty($_SESSION['cart']))
{
	
	foreach($_SESSION['cart'] as $p_id=>$qty)
	{
		$sql = " SELECT * FROM tbl_product where p_id=$p_id";
		$query = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($query);
		$sum = $row['p_price'] * $qty;
		$total += $sum;
		echo "<tr>";
		echo "<td width='334'><p class='a'>" . $row["p_name"] . "<p class='a'></td>";
		echo "<td width='46' align='right'><p class='a'>" .number_format($row["p_price"],2) . "</p></td>";
		echo "<td width='57' align='right'>";  
		echo "<input type='text' name='amount[$p_id]' value='$qty' size='2'/></td>";
		echo "<td width='93' align='right'><p class='a'>".number_format($sum,2)."</p></td>";
		//remove product
		echo "<td width='46' align='center'><a href='cart.php?p_id=$p_id&act=remove'>ลบ</a></td>";
		echo "</tr>";
	}
	echo "<tr>";
  	echo "<td colspan='3' bgcolor='#CEE7FF' align='center'><p class='a'>ราคารวม</p></td>";
  	echo "<td align='right' bgcolor='#CEE7FF'>"."<p class='a'>".number_format($total,2)."</p>"."</td>";
  	echo "<td align='left' bgcolor='#CEE7FF'></td>";
	echo "</tr>";
}
?>
<tr>
<td><a href="product.php">กลับหน้ารายการสินค้า</a></td>
<td colspan="4" align="right">
    <input type="submit"  class="button" name="button" id="button" value="ปรับปรุง" />
    <input type="button"  class="button" name="Submit2" value="สั่งซื้อ" onclick="window.location='confirm.php';" />
</td>
</tr>
</table>
</form>
</div >
</body>

<?php include 'footer2.php';
include 'script4.php'; ?>