<?php session_start(); 

include 'h.php' ;
include 'navbar.php'
?>
<div class="container">
<br><br><br>
<div align="center">
<h1>ทางเราได้รับออเดอร์ของคุณแล้ว</h1>
<br>
<svg width="15rm" height="15em" viewBox="0 0 16 16" class="bi bi-bag-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14 5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5zM1 4v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4H1z"/>
  <path d="M8 1.5A2.5 2.5 0 0 0 5.5 4h-1a3.5 3.5 0 1 1 7 0h-1A2.5 2.5 0 0 0 8 1.5z"/>
  <path fill-rule="evenodd" d="M10.854 7.646a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 10.293l2.646-2.647a.5.5 0 0 1 .708 0z"/>
</svg>
</div>
 <br><br>

<div align="center"><a class="b" href="oder.php?o_id=<?php echo $_GET["o_id"];?> ">คลิกที่นี่เพื่อดูรายละเอียดการสั่งซื้อ</a></div>
</div>
<?php 
include 'footer1.php';
include 'script4.php'?>
