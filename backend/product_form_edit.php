<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database:
include('../condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
$p_id = $_GET["ID"];
//2. query ข้อมูลจากตาราง:
$sql = "SELECT p.*,t.type_name
FROM tbl_product as p 
INNER JOIN tbl_type as t ON p.type_id = t.type_id
WHERE p.p_id = '$p_id'
ORDER BY p.type_id asc";
$result2 = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error($conn));
$row = mysqli_fetch_array($result2);
extract($row);


$query = "SELECT * FROM tbl_type ORDER BY type_id asc" or die("Error:" . mysqli_error($conn));

$result = mysqli_query($conn, $query);




?>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<div class="container">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-7"> <br />
      <h4 align="center"> Edit Product </h4>
      <hr />
      <form  name="addproduct" action="product_form_edit_db.php" method="POST" enctype="multipart/form-data"  class="form-horizontal">
        <input type="hidden" name="p_id" value="<?php echo $p_id; ?>" />
        <input type="hidden" name="img2" value="<?php echo $p_img; ?>" />
        <div class="form-group">
          <div class="col-sm-8">
            <p> ชื่อสินค้า</p>
            <input type="text"  name="p_name" value="<?php echo $p_name; ?>" class="form-control" required placeholder="ชื่อสินค้า" />
          </div>
        </div>
        
        
        <div class="form-group">
          <div class="col-sm-8">
            <p> ราคา </p>
            <input type="text"  name="p_price" value="<?php echo $p_price; ?>" class="form-control" required placeholder="ราคา" />
          </div>
        </div>
        

        <div class="form-group">
          <div class="col-sm-8">
            <p> จำนวน</p>
            <input type="text"  name="quantity" value="<?php echo $quantity; ?>" class="form-control" required placeholder="จำนวน" />
          </div>
        </div>
        

        <div class="form-group">
          <div class="col-sm-6">
            <p> ประเภทสินค้า </p>
            <select name="type_id" class="form-control" required>
              <option value="<?php echo $row["type_id"];?>">
                <?php echo $row["type_name"]; ?>
              </option>
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
            <textarea id="p_detail" name="p_detail" rows="5" cols="60" >                                       
                    <?php echo $p_detail; ?></textarea>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-12">
            <p> ภาพสินค้า </p>
            <img src="img/<?php echo $row['p_img'];?>" width="100px">
            <br>
            <br>
            <input type="file" name="p_img" id="p_img" class="form-control" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
           
            <button type="submit" class="btn btn-success" name="btnadd"> Edit </button>
          </div>
        </div>
      </form>
      
    </div>
  </div>
</div>