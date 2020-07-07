
<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database:
include('connections.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
$o_id = $_REQUEST["ID"];
//2. query ข้อมูลจากตาราง:
$sql = "SELECT * FROM order_head WHERE o_id='$o_id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
$row = mysqli_fetch_array($result);
extract($row);
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<form  name="register" action="order_form_edit_db.php" method="POST" class="form-horizontal">
  <input type="hidden" name="o_id" value="<?php echo $o_id; ?>" />
  <div class="form-group">
    <div class="col-sm-2">  </div>
    <div class="col-sm-3" align="center">
      <br>
      <h4> Edit Member </h4>
      
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2" align="right"> ชื่อ </div>
    <div class="col-sm-3" align="left">
      <input  name="o_name" type="text" required class="form-control" id="o_name" value="<?php echo $o_name; ?>" placeholder="ภาษาอังกฤษหรือตัวเลข" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2"  />
    </div>
  </div>
 
 
 

  <div class="form-group">
    <div class="col-sm-2" align="right"> อีเมล์  </div>
    <div class="col-sm-4" align="left">
      <input  name="o_email" type="email" class="form-control" id="o_email" value="<?php echo $o_email; ?>"   placeholder="name@hotmail.com"/>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2" align="right"> เบอร์โทร  </div>
    <div class="col-sm-4" align="left">
      <input  name="o_phone" type="text" class="form-control" id="o_phone" value="<?php echo $o_phone; ?>"  placeholder="ตัวเลขเท่านั้น" />
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2" align="right"> ที่อยู่  </div>
    <div class="col-sm-4" align="left">
      <textarea name="o_addr" class="form-control"><?php echo $o_addr; ?></textarea>
      
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2"> </div>
    <div class="col-sm-6">
      <button type="submit" class="btn btn-warning" id="btn"><span class="glyphicon glyphicon-cog"></span> Edit  </button>
      
    </div>
    
  </div>
</form>