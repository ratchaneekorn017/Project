<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<form  name="register" action="member_form_add_db.php" method="POST" class="form-horizontal" enctype="multipart/form-data"  >
  <div class="form-group">
    <div class="col-sm-2">  </div>
    <div class="col-sm-3" align="center">
      <br>
      <h4> เพิ่มสมาชิก </h4>
      
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2" align="right"> Username </div>
    <div class="col-sm-3" align="left">
      <input  name="m_user" type="text" required class="form-control" id="m_user" placeholder="ภาษาอังกฤษหรือตัวเลข" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2"  />
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-2" align="right"> Password </div>
    <div class="col-sm-3" align="left">
      <input  name="password" type="password" required class="form-control" id="m_pass" placeholder="ภาษาอังกฤษหรือตัวเลข" pattern="^[a-zA-Z0-9]+$" minlength="2" />
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2" align="right"> ชื่อ  </div>
    <div class="col-sm-4" align="left">
      <input  name="m_name" type="text" required class="form-control" id="m_name" placeholder="ภาษาอังกฤษหรือภาษาไทย" />
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-2" align="right"> นามสกุล </div>
    <div class="col-sm-4" align="left">
      <input  name="m_lname" type="text" required class="form-control" id="m_lname" value="<?php echo $m_lname; ?>" placeholder="ภาษาอังกฤษหรือภาษาไทย" />
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-2" align="right"> อีเมล์  </div>
    <div class="col-sm-4" align="left">
      <input  name="m_email" type="email" class="form-control" id="m_email"   placeholder="name@hotmail.com"/>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2" align="right"> เบอร์โทร  </div>
    <div class="col-sm-4" align="left">
      <input  name="m_tel" type="text" class="form-control" id="m_tel"  placeholder="ตัวเลขเท่านั้น" />
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2" align="right"> ที่อยู่  </div>
    <div class="col-sm-4" align="left">
      <textarea name="m_address" class="form-control" id="m_address" required></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2" align="right"> รูป </div>
    <div class="col-sm-4" align="left">
      <input type="file" name="m_img" required class="form-control" id="m_img" accept="image/*" >
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2"> </div>
    <div class="col-sm-6">
      <button type="submit" class="btn btn-danger" id="btn"><span class="glyphicon glyphicon-saved"></span> Save  </button>
    </div>
    
  </div>
</form>