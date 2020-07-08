<?php session_start();?>
<?php 

if (!$_SESSION["member_id"]){

	  Header("Location: form_login_m.php");

}else{?>
<?php include 'h.php' ;?>
<?php include 'navbar.php'; ?>
<?php include 'menu_left.php'; ?>

<div class="col-md-10">
        <h3 align="center"> Member page
          <br>
          ยินดีต้อนรับคุณ <?php echo $m_name ;?>
        </h3>
      <?php 
        $act = (isset($_GET['act']) ? $_GET['act'] : '' );
        if($act=='edit'){
          include 'member_from_edit.php';
        }
      ?>
      
      
      
      
      </div>
    <?php include 'script4.php' ;?>
</body>
</html>
<?php }?>