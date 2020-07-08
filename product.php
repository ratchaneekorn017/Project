<?php session_start();?>
<?php
include("condb.php");
include('h.php');

?>

<body>
  <?php
  include('navbar.php');
  //include("slide.php");
  ?>
  <div class="container">
    <div class="row">
      <div class="col-md-50">
      
      </div>
      <div class="col-md-1">
        <div class="container" style="margin-top: 40px">
          <div class="row">
            <?php
            $q = $_GET['q'];
            if($q!=''){
            include("show_product_q.php");
            }else{
            include('show_product.php');
            }
            ?>
            

          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<?php 
include('footer.php');
include('script4.php');?>