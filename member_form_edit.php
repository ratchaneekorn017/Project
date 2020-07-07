
<?php
//1. เชื่อมต่อ database:
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
include('h.php');
$member_id = $_POST["ID"];
//2. query ข้อมูลจากตาราง:
$sql = "SELECT * FROM tbl_member WHERE member_id='$ID' ";
$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error($conn));
$row = mysqli_fetch_array($result);
extract($row);
?>
<form  name="register" action="member_form_edit_db.php" method="POST" class="form-horizontal" enctype="multipart/form-data"  >

  <div class="form-group">
    <div class="col-sm-2">  </div>
    <div class="col-sm-3" align="center">
      <br>
      <h4> แก้ไขข้อมูลสมาชิก </h4>
      
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2" align="right"><p class="a"> Username </p></div>
    <div class="col-sm-3" align="left">
      <input  name="m_user" type="text" required class="form-control" id="m_user" value="<?php echo $m_user; ?>" disabled >
    </div>
  </div>
  

  <div class="form-group">
    <div class="col-sm-2" align="right"><p class="a"> ชื่อ </p> </div>
    <div class="col-sm-4" align="left">
      <input  name="m_name" type="text" required class="form-control" id="m_name" value="<?php echo $m_name; ?>" placeholder="ภาษาอังกฤษหรือภาษาไทย" />
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-2" align="right"><p class="a"> นามสกุล </p></div>
    <div class="col-sm-4" align="left">
      <input  name="m_lname" type="text" required class="form-control" id="m_lname" value="<?php echo $m_lname; ?>"  >
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-2" align="right"><p class="a"> อีเมล์  </p></div>
    <div class="col-sm-4" align="left">
      <input  name="m_email" type="email" class="form-control" id="m_email" value="<?php echo $m_email; ?>"   placeholder="name@hotmail.com"/>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2" align="right"><p class="a"> เบอร์โทร </p> </div>
    <div class="col-sm-4" align="left">
      <input  name="m_tel" type="text" class="form-control" id="m_tel" value="<?php echo $m_tel; ?>"   placeholder="ตัวเลขเท่านั้น" />
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2" align="right"><p class="a"> ที่อยู่ </p> </div>
    <div class="col-sm-4" align="left">
      <textarea name="m_address" class="form-control"><?php echo $m_address; ?></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2" align="right">
    <p class="a"> ภาพ </p>
    </div>
    <div class="col-sm-4" align="left">
      
     <img src="backend/img/<?php echo $row['m_img'];?>" alt="" width="200px">
     <br>
    <br>
     
      <input type="file" name="m_img"  class="form-control" id="m_img" accept="image/*" >
    </div>
  </div>

  
  <div class="form-group">
    <div class="col-sm-2"> </div>
    <div class="col-sm-6">
    <input type="hidden" name="m_img2" value="<?php echo $row['m_img']; ?>" />
    <input type="hidden" name="member_id" value="<?php echo $row['member_id']; ?>" />
 
      <button type="submit" class="button" id="btn"><span class="glyphicon glyphicon-cog"></span> บันทึกข้อมูล </button>
      
    </div>
    
  </div>
</form>