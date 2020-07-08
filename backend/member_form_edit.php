
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
<form  name="register" action="member_form_edit_db.php" method="POST" class="form-horizontal" enctype="multipart/form-data"  >

  <div class="form-group">
    <div class="col-sm-2">  </div>
    <div class="col-sm-3" align="center">
      <br>
      <h4> แก้ไขข้อมูลสมาชิก </h4>
      
    </div>
  </div>
  

  <div class="form-group">
    <div class="col-sm-2" align="right"> Username </div>
    <div class="col-sm-3" align="left">
      <input  name="m_user" type="text" required class="form-control" id="m_user" value="<?php echo $m_user; ?>" disabled >
    </div>
  </div>
  
  <div class="form-group">
  <div class="col-sm-2" align="right"> level </div>
  <div class="col-sm-3" align="left">
      <select  name="userlevel"   class="form-control" id="userlevel" required>
        <option value="<?php echo $row['userlevel'] ;?>"><?php echo $row['userlevel'] ;?></option>
        <option value="m">m</option>
        <option value="a">a</option>
      </select>
      </div>
</div>
  <div class="form-group">
    <div class="col-sm-2" align="right"> ชื่อ  </div>
    <div class="col-sm-4" align="left">
      <input  name="m_name" type="text" required class="form-control" id="m_name" value="<?php echo $m_name; ?>" placeholder="ภาษาอังกฤษหรือภาษาไทย" />
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-2" align="right"> นามสกุล </div>
    <div class="col-sm-4" align="left">
      <input  name="m_lname" type="text" required class="form-control" id="m_lname" value="<?php echo $m_lname; ?>"  >
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-2" align="right"> อีเมล์  </div>
    <div class="col-sm-4" align="left">
      <input  name="m_email" type="email" class="form-control" id="m_email" value="<?php echo $m_email; ?>"   placeholder="name@hotmail.com"/>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2" align="right"> เบอร์โทร  </div>
    <div class="col-sm-4" align="left">
      <input  name="m_tel" type="text" class="form-control" id="m_tel" value="<?php echo $m_tel; ?>"  placeholder="ตัวเลขเท่านั้น" />
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2" align="right"> ที่อยู่  </div>
    <div class="col-sm-4" align="left">
      <textarea name="m_address" class="form-control"><?php echo $m_address; ?></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2" align="right">
      img  
    </div>
    <div class="col-sm-4" align="left">
      ภาพเก่า <br>
     <img src="img/<?php echo $row['m_img'];?>" alt="" width="100px">
     <br>
     เลือกภาพใหม่ <br>
     
      <input type="file" name="m_img"  class="form-control" id="m_img" >
    </div>
  </div>

  
  <div class="form-group">
    <div class="col-sm-2"> </div>
    <div class="col-sm-6">
    <input type="hidden" name="m_img2" value="<?php echo $row['m_img']; ?>" />
    <input type="hidden" name="member_id" value="<?php echo $row['member_id']; ?>" />
 
      <button type="submit" class="btn btn-warning" id="btn"><span class="glyphicon glyphicon-cog"></span> บันทึกข้อมูล </button>
      
    </div>
    
  </div>
</form>