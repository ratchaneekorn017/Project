<?php
 error_reporting( error_reporting()&~E_NOTICE );
    session_start();  
 
 
 //echo "<pre>";
/// print_r($_SESSION);
// echo "<hr>";
//print_r($_POST);
// echo "</pre>";
// exit();
 
  
    
?>
 
 
<body>
<!--สร้างตัวแปรสำหรับบันทึกการสั่งซื้อ -->
<?php
   
include 'condb.php';


//Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
    date_default_timezone_set('Asia/Bangkok');
 
$name = $_POST["name"];
$address = $_POST["address"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$total_qty = $_POST["total_qty"];
$total = $_POST["total"];
$dttm = Date("Y-m-d G:i:s");
$member_id = $_SESSION["member_id"];

$status = 'ยังไม่ได้ชำระเงิน';
$remark = 'รอการตรวจสอบ';
 
 //บันทึกการสั่งซื้อลงใน order_detail
 mysqli_query($conn, "BEGIN"); 
 $sql1	= "INSERT INTO order_head VALUES(NULL,'$member_id' ,  '$dttm', '$name', '$address', '$email', '$phone','$status','$remark' ,'$total_qty', '$total')";
 $query1	= mysqli_query($conn, $sql1);
 
 
 $sql2 = "SELECT max(o_id) AS o_id FROM order_head WHERE o_name='$name' AND o_email='$email' AND o_dttm='$dttm' ";
 $query2	= mysqli_query($conn, $sql2);
 $row = mysqli_fetch_array($query2);
 $o_id = $row["o_id"];
 
 
 foreach($_SESSION['cart'] as $p_id=>$qty)
  
{
    echo $p_id;
	$sql3	= "SELECT * FROM tbl_product WHERE p_id=$p_id";
	$query3	= mysqli_query($conn, $sql3);
	$row3	= mysqli_fetch_array($query3);
	$total	= $row3['p_price']*$qty;
    $count=mysqli_num_rows($query3);


   
	$sql4	= "INSERT INTO order_detail VALUE(NULL, '$o_id', '$member_id' ,'$p_id', '$qty', '$total')";
	$query4	= mysqli_query($conn, $sql4);
  
    
  
	$query5	= "INSERT INTO ordertrackhistory (o_id ,  status , remark   )
    VALUE ('$o_id',  'ยังไม่ชำระเงิน' ,  'รอตรวจสอบ'  )";
    $result5 = mysqli_query($conn, $query5);

     

  //ตัดสต๊อก
  for($i=0; $i<$count; $i++){
  $have =  $row3['quantity'];
  
  $stc = $have - $qty;
  
  $sql9 = "UPDATE tbl_product SET  
     quantity=$stc
     WHERE  p_id=$p_id ";
  $query9 = mysqli_query($conn, $sql9);  
  }
    
  /*   stock  */
 }
 if($query1 && $query4){
  mysqli_query($conn, "COMMIT");
  $msg = "บันทึกข้อมูลเรียบร้อยแล้ว ";
  foreach($_SESSION['cart'] as $p_id)
  { 
   unset($_SESSION['cart']);
  }
 }
 else{
  mysqli_query($conn, "ROLLBACK");  
  $msg = "บันทึกข้อมูลไม่สำเร็จ กรุณาติดต่อเจ้าหน้าที่ค่ะ "; 
 }
 
 mysqli_close($conn);
?>
 
 
<script type="text/javascript">
 alert("<?php echo $msg;?>");
 <?php header("location:fd.php?o_id=".$o_id); ?>;

</script>

 
 
</body>
</html>