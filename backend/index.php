<?php session_start(); 
include('../condb.php');

  $member_id = $_SESSION['member_id'];
  $m_name = $_SESSION['m_name'];
  $userlevel = $_SESSION['userlevel'];
 	if($userlevel!='a'){
    Header("Location: ../form_login_m.php");  
  }  
?>

<?php include('h.php');?>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <!-- Logo -->
      
      <!-- Header Navbar: style can be found in header.less -->
      <?php include('navbar.php');?>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <?php include('menu_left.php');?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
     

        <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>
    <?php include('footer.php');?>