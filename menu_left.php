
<?php include 'h.php'?>
  <div class="list-group col-10">
  <img src="backend/img/<?php echo $m_img;?>" alt="" width="100%">
  <br>
    <a href="profile.php" class="list-group-item info">
         หน้าหลัก
      </a>
    <a href="profile.php?act=edit" class="list-group-item info">แก้ไขข้อมูลส่วนตัว</a>
    <a href="profile.php?act=rwd" class="list-group-item ">แก้ไขรหัสผ่าน </a>
    <a href="profile.php?act=hty" class="list-group-item ">ประวัติการสั่งซื้อ </a>

 
    <a href="logout.php" onclick="return confirm('Confirm');" class="list-group-item list-group-item-danger">ออกจากระบบ</a>

   
  
    </div>
    <?php 
    include  'script4.php'; ?>
    
