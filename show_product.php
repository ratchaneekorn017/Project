      <?php
      $q = $_GET['q'];
            include("condb.php");
            $sql = "SELECT * FROM tbl_product AS p
            INNER JOIN tbl_type  AS t ON p.type_id=t.type_id
            WHERE p_status = 0
    
            ORDER BY p.p_id ASC";  //เรียกข้อมูลมาแสดงทั้งหมด
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
            ?>
          
          <div class="" style="width: 30rem;">
          <div class="card-body">
            <br>
             <a href="prd.php?id=<?php echo $row[0]; ?>"> <?php echo"<img src='backend/img/"   .$row['p_img']."'width='100%'>";?></a> <br> <br>
                          
              <p class="a" align="center"> <a class="a" href="prd.php?id=<?php echo $row[0]; ?>"> <?php echo $row["p_name"];?> </a>
                <br><br>
                ราคา <font color="red"> <?php echo $row["p_price"];?></font> บาท
              <P class="a" align="center">
                คงเหลือ <font color="red"> <?php echo $row["quantity"];?></font> ชิ้น
              </p>
               <?php
              
              echo "<div class='col-sm-12' align='center'>";
              echo "<a  href='cart.php?p_id=$row[p_id]&act=add'> เพิ่มลงตะกร้าสินค้า </a></td>";
              echo "</div>";
              
             
              ?>
            
          
           


            </div>
          </div>
            <?php } ?>


      