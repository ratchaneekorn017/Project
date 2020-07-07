
  
  <!-- header -->
  <header>
    
    <div class="sticky  fixed-top">
      <div class="container"> 
        
        <!-- Logo -->
        <div class="logo">
          <a href="index.php"><img class="img-responsive" src="images/text2.png" alt="" >
        </a> 
      </div>
        <nav class="navbar ownmenu">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-open-btn" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"><i class="fa fa-navicon"></i></span> </button>
          </div>
          
          <!-- NAV -->
          <div class="collapse navbar-collapse" id="nav-open-btn">
            <ul class="nav">
            <li> <a href="product.php">สินค้า </a> </li>
            <li> <a href="contactus.php">ติดต่อเรา</a> </li>
            <li> <a href="payment.php">แจ้งชำระเงิน </a> </li>
            <li> <a href="seorder.php">ค้นหาออเดอร์</a> </li>
           

           
            
           <?php
            if ($member_id!='') {
            ?>
          <!-- Nav Right -->
          <div class="nav-right">
            <ul class="navbar-right">
           
              
              <!-- USER INFO -->
              <li class="dropdown user-acc"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" ><i class="icon-user"></i> </a>
                <ul class="dropdown-menu">
                  <li>
                    
           
            <li class="nav-item">
              <a class="nav-link" href="profile.php"> ยินดีต้อนรับ <?php echo $row["m_name"]; ?></a>
            </li>
            
            

                  </li>
               <?php }?>  
                  
                  <li>   
                     <?php
            if ($member_id!='') {
            } else {
            ?>
            <li><a class="nav-link" href="form_login_m.php">เข้าสู่ระบบ</a></li>
            <?php } ?> 
          
            <?php 
            if ($member_id!='') {
              ?>
              <li class="nav-item">
              <a class="nav-link" href="logout.php" role="button" onclick="return confirm('คุณต้องการออกจากระบบหรือไม่ ?')">Logout</a>
            </li>
           
          </li>
                </ul>
              </li>
 
              </ul> 
</div>
              
              <?php } ?>
  
 &nbsp; &nbsp; 
              <!-- USER BASKET -->
              <div class="nav-right">
            <ul class="navbar-right">
              <li > 
                <a href="cart.php"> <i class="icon-basket-loaded"></i> </a>
                
              </li>
            </ul>
              </div>
            
           
         
        </nav>
      </div>
    </div>
  </header>