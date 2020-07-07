<?php session_start();?>

<?php

include("condb.php");
include('h.php');
$p_id = $_GET["id"];
?>

  <style>
  * {
  box-sizing: border-box;
  }
  .zoom {
  padding: 50px;
  transition: transform .2s;
  width: 400px;
  height: 400px;
  margin: 0 auto;
  }
  .zoom:hover {
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5);
  }
  </style>
</head>
<body>
  <?php
  include('navbar.php');
  ?>
  <div class="container">
    <div class="row">
    
      
      <?php
      $sql = "SELECT * FROM tbl_product as p, tbl_type as t
      WHERE  p.type_id=t.type_id
      AND p_id = $p_id
      ";
      $result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error($conn));
      $row = mysqli_fetch_array($result);
      ?>
      <div class="col-md-10">
        <div class="container" style="margin-top: 50px">
          <div class="row">
            <div class="col-md-6">
              <div class="zoom">
                <?php echo"<img src='backend/img/".$row['p_img']."'width='100%'>";?>
              </div>
            </div>
            <div class="col-md-5" >
              <h3 ><b><?php echo $row["p_name"];?></b></h3>
              <p class="p">
                ประเภท <?php echo $row["type_name"];?>
                <br>
                ราคา <font color="red"> <?php echo $row["p_price"];?>  </font> บาท &nbsp;&nbsp; สินค้าคงเหลือ <font color="red"> <?php echo $row["quantity"];?> </font> ชิ้น
               
              </p>
              <p class="p" >รายละเอียดสินค้า</p> 
               <p class="a" ><?php echo $row["p_detail"];?></p>
              
              
              <?php 
              echo "<tr>";
              echo "<td colspan='2' align='center'>";
              echo "<a href='cart.php?p_id=$row[p_id]&act=add'><br> เพิ่มลงตะกร้าสินค้า </a></td>";
              echo "</tr>";
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<?php 
include('footer2.php');
include('script4.php');?>