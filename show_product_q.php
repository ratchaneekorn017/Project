       <?php
      $q = $_GET['q'];
            include("condb.php");
            $sql = "SELECT * FROM tbl_product as p
            INNER JOIN tbl_type  as t ON p.type_id=t.type_id
            WHERE p_status = 0
            AND `p_name` LIKE '%$q%'
            ORDER BY p.p_id DESC";  //เรียกข้อมูลมาแสดงทั้งหมด
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
            ?>
            
            <div class="col-sm-3" align="center">
             <a href="prd.php?id=<?php echo $row[0]; ?>"> <?php echo"<img src='backend/img/".$row['p_img']."'width='100%'>";?></a>
              
              <p> <a href="prd.php?id=<?php echo $row[0]; ?>"> <?php echo $row["p_name"];?> </a>
                <br>
                ราคา <font color="red"> <?php echo $row["p_price"];?></font> บาท
              </p>
              <p> <a href="prd.php?id=<?php echo $row[0]; ?>"> <?php echo $row["quantity"];?> </a>
                <br>
                จำนวน <font color="red"> <?php echo $row["quantity"];?></font> คงเหลือ
              </p>
             
             <?php 
             
              echo "<div class='col-sm-3' align='center'>";
              echo "<a  href='cart.php?p_id=$row[p_id]&act=add'> เพิ่มลงตะกร้าสินค้า </a></td>";
              echo "</div>";
              ?>
  
 


              
            </div>
            
            <?php } ?>
