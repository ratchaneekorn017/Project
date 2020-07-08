<?php
//1. เชื่อมต่อ database:
include('../condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
$member_id = $_GET["ID"];
//2. query ข้อมูลจากตาราง:
$sql = "SELECT * FROM tbl_member WHERE member_id='$member_id' ";
$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error($conn));
$row = mysqli_fetch_array($result);
extract($row);
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<form  name="register" action="member_form_rwd_db.php" method="POST" class="form-horizontal"   >
  <div class="form-group">
    <div class="col-sm-2">  </div>
    <div class="col-sm-3" align="center">
      <br>
      <h4> reset password </h4>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2" align="right"> Username </div>
    <div class="col-sm-3" align="left">
      <input  name="m_user" type="text" required class="form-control" id="m_user" value="<?php echo $row['m_user']; ?>" disabled  >
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-2" align="right"> Password </div>
    <div class="col-sm-3" align="left">
      <input  name="password" type="password" required class="form-control" id="password" placeholder="ภาษาอังกฤษหรือตัวเลข" pattern="^[a-zA-Z0-9]+$" minlength="2" />
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-2"> </div>
    <div class="col-sm-6">
    <input type="hidden" name="member_id" value="<?php echo $row['member_id'];?>" >
      
      <button type="submit" class="btn btn-danger" id="btn"><span class="glyphicon glyphicon-saved"></span> reset password  </button>
    </div>
    
  </div>
</form>