<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database:
include('connections.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
$type_id = $_REQUEST["ID"];
//2. query ข้อมูลจากตาราง:
$sql = "SELECT * FROM tbl_type WHERE type_id='$type_id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
$row = mysqli_fetch_array($result);
extract($row);
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<div class="container">
  <div class="row">
    
  </div>
  <div class="row">
    <div class="col-md-5">
      
    </div>
    <div class="col-md-8">
      <h3 align="center"> Edit Type </h3>
      
      <form  name="type_name" action="type_form_edit_db.php" method="POST" id="type_name" class="form-horizontal">
        <input type="hidden" name="type_id" value="<?php echo $type_id; ?>" />
        <div class="form-group">
          <div class="col-sm-4" align="right"> ประเภทสินค้า  </div>
          <div class="col-sm-4" align="left">
            <input  name="type_name" type="text" required class="form-control" id="type_name" value="<?php echo $type_name; ?>" placeholder="ภาษาอังกฤษหรือภาษาไทย" />
          </div>
        </div>
        
        
        
        <div class="form-group">
          <div class="col-sm-4"> </div>
          <div class="col-sm-6">
              
            <button type="submit" class="btn btn-warning" id="btn"> <span class="
            glyphicon glyphicon-cog"></span> Edit  </button>
          
        </div>
        
      </div>
    </form>
  </div>
</div>
</div>