<?php
//1. เชื่อมต่อ database:
include('connections.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//2. query ข้อมูลจากตาราง tb_member:
$query = "SELECT * FROM tbl_type ORDER BY type_id asc" or die("Error:" . mysqli_error($con));
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$result = mysqli_query($con, $query);
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
?>
<!-- Latest compiled and minified CSS -->
<div class="container">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-7"> <br />
      <h4 align="center"> เพิ่มสินค้า </h4>
      <hr />
      <form  name="addproduct" action="product_form_add_db.php" method="POST" enctype="multipart/form-data"  class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-8">
            <p> ชื่อสินค้า</p>
            <input type="text"  name="p_name" class="form-control" required placeholder="ชื่อสินค้า" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-8">
            <p> ราคา</p>
            <input type="text"  name="p_price" class="form-control" required placeholder="ราคา" />
          </div>
        </div> <div class="form-group">
          <div class="col-sm-8">
            <p> จำนวน</p>
            <input type="text"  name="quantity" class="form-control" required placeholder="จำนวน" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-6">
            <p> ประเภทสินค้า </p>
            <select name="type_id" class="form-control" required>
              <option value="type_id">ประเภทสินค้า</option>
              <?php foreach($result as $results){?>
              <option value="<?php echo $results["type_id"];?>">
                <?php echo $results["type_name"]; ?>
              </option>
              <?php } ?>
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <p> รายละเอียดสินค้า </p>
            <!-- <textarea name="p_detail" class="form-control"  rows="3"  required placeholder="รายละเอียดสินค้า"></textarea> -->
             <textarea id="editor1" name="p_detail" rows="5" cols="60" >                                       
                    </textarea>
          </div>
        </div>
        <div class="form-group">
          
          <div class="col-sm-12">
            <p> ภาพสินค้า </p>
            <input type="file" name="p_img" id="p_img" class="form-control" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-danger" name="btnadd"><span class="glyphicon glyphicon-saved"></span> Save </button>
            
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<?php
mysqli_close($con);
?>