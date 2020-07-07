<?php session_start(); 
include 'h.php';
include 'navbar.php';?>

<br><br>
<div class="container">
   <div align="center">
  <img src="images/payment.jpg" class="img-thumbnail" alt=""  style="width:390px; height: 350px;"> 
  </div>
</div>

<form  name="payment" action="payment_db.php" method="POST" class="form-horizontal" enctype="multipart/form-data"  >
  <div class="form-group">
    <div class="col-sm-4">  </div>
    <div class="col-sm-4" align="center">
      <br>
      <h4> แจ้งชำระเงิน </h4>
      
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-4" align="right"> เลขออเดอร์ที่ต้องการชำระ </div>
    <div class="col-sm-4" align="left">
      <input  name="o_id" type="text" required class="form-control" id="o_id"  />
    </div>
  </div>
  
  <div class="form-group">
  <div class="col-sm-4" align="right"> ธนาคารที่ชำระ </div>
  <div class="col-sm-4" align="left">
      <select  name="bank"   class="form-control" id="bank" required>
        <option value="กสิกร">กสิกร</option>
        <option value="ไทยพานิช">ไทยพานิช</option>
      </select>
      </div>
</div>
  
  <div class="form-group">
    <div class="col-sm-4" align="right"> ชื่อ-นามสกุล  </div>
    <div class="col-sm-4" align="left">
      <input  name="p_name" type="text" required class="form-control" id="p_name" required />
    </div>
  </div>
  
   

    <div class="form-group">
    <div class="col-sm-4" align="right"> ราคาที่ชำระ  </div>
    <div class="col-sm-4" align="left">
      <input  name="pm_total" type="text" required class="form-control" id="pm_total" required />
    </div>
  </div>


  <div class="form-group">
    <div class="col-sm-4" align="right"> ส่งสลิป </div>
    <div class="col-sm-4" align="left">
      <input type="file" name="pm_img" required class="form-control" id="pm_img" accept="image/*" >
    </div>
  </div>
  

  <div class="form-group">
    <div class="col-sm-4"> </div>
    <div class="col-sm-5">
      <button type="submit" class="button" id="btn"> ส่งสลิป  </button>
    </div>
    
  </div>
</form>
<br><br>
<?php 
include 'footer.php';
include 'script4.php';?>