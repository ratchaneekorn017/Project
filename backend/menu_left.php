<?php 
include('connections.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//2. query ข้อมูลจากตาราง:
$sql = "SELECT * FROM tbl_member WHERE member_id='$member_id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
$row = mysqli_fetch_array($result);

include 'h.php'; ?>

<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image" >
        
        <img src="img/<?php echo $m_img ;?>" class="img-circle" alt="100%" width="100%">
      </div>
      <div class="pull-left info">
      
         <p><?php echo $m_name ;?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">หน้าจัดการ</li>
      <li>
        <a href="index.php">
          <i class="fa fa-dashboard"></i> <span>หน้าหลัก</span>

        </a>    
      </li>
    

      
      
      <li>
        <a href="member.php">
          <i class="fa fa-edit"></i> <span>จัดการสมาชิก</span>
          <span class="pull-right-container">
            
          </span>
        </a>
      </li>
        
      <li>
        <a href="type.php">
          <i class="fa fa-edit"></i>
          <span>จัดการประเภทสินค้า</span>
          
        </a>
      </li>
     
      

      <li>
        <a href="product.php">
          <i class="fa fa-edit"></i>
          <span>จัดการสินค้า</span>
          
        </a>
        
      </li>
      
      <li>
        <a href="order.php">
          <i class="fa fa-edit"></i>
          <span>จัดการออเดอร์</span>
        </a>   
      </li>
    
    
      <li>
        <a href="payment.php">
          <i class="fa fa-edit"></i>
          <span>ชำระเงิน</span>
          
        </a>
        
      </li>

      
      <li class="header">ออกจาระบบ</li>
      <li><a href="../logout.php" onclick="return confirm('คุณต้องการออกจากระบบหรือไม่ ?')"><i class="fa fa-circle-o text-red"></i> <span>ออกจากระบบ</span></a></li>
      
    </section>
    <!-- /.sidebar -->
  </aside>