<?php session_start(); 
include('condb.php');

  $ID = $_SESSION['member_id'];
  $name = $_SESSION['m_name'];
  $level = $_SESSION['userlevel'];
 
 	if($level!='m'){
    Header("Location: form_login_m.php");  
  }  
?>

<?php include('h.php');?>

    <header >
      <?php include('navbar.php');?>
    </header>
    <br>
    <!-- Left side column. contains the logo and sidebar -->
     
          <div class="row">
            <div class="col-md-3">
            <?php include('menu_left.php');?>
          </div>
                <div class="col-md-8">
                  
                     <h3 align="center"> ยินดีต้อนรับคุณ <?php echo $m_name;?>
                    </h3>
                   
                   
      
      <?php
      $act = (isset($_GET['act']) ? $_GET['act'] : '');
                  if ($act == 'edit') {
                  include('member_form_edit.php');
                  }
                  elseif ($act == 'rwd') {
                    include('member_form_rwd.php');
                    }
                  elseif ($act == 'hty') {
                      include('orderhistory.php');
                      }
      ?>
        </div>
      </div>
   
  
<?php
include 'footer1.php'; 
include 'script4.php'; ?>
  