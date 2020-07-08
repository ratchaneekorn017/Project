<?php session_start();
include 'h.php' ;
include 'navbar.php';
?>

<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4> ติดตามสินค้า </h4>
        </div>
  
        <div class="col-md-12">
            <form action="" method="GET" class="form-horizontal">
              
                <div class="from-group">
                    
                    <div class="col-sm-3 control-label">
                      <br><br>  กรอกหมายเลขออเดอร์
                    </div>
                  
                    <div class="col-sm-4">
                     <br>  <br> <input type="text" name="o_id"
                        required class="form-control">
                    </div>
                    
                    <div class="col-sm-3">
                    <br> <br> <button type="submit" class="button3" name="act" value="order">ค้นหาออเดอร์</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



<?php
$act = (isset($_GET['act']) ? $_GET['act'] : '') ;

if($act=='order'){
    echo '<div class="container">
    <div class="row">
        <div class="col-md-12">';
                include 'orderlist.php';
    echo '    </div>
    </div>
</div>';


}

include 'footer2.php';
include 'script4.php';?>



