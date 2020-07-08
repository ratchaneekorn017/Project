
<?php 
session_start();
//echo '<pre>';
//print_r($_SESSION);
//echo'</pre>';
include('connections.php');
  

$member_id = $_SESSION['member_id'];
$m_name = $_SESSION['m_name'];
$userlevel = $_SESSION['userlevel'];
//echo 'member_id = ' .$member_id;
//echo '<br>';
//echo 'name =' .$m_name;
//echo 'userlevel =' .$userlevel;  

//

$sql ="SELECT * FROM tbl_member WHERE member_id='".$member_id."'";
$result = mysqli_query($conn, $sql) or die ("Error in query: $sql" . mysqli_error($con));
$row = mysqli_fetch_array($result);
extract($row);

$m_img = $row['m_img'];
$m_name = $row['m_name'];

if ($userlevel!='a'){
    Header("location:../logout.php");
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
 
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js">    </script>

<script>
  
$(document).ready(function() {
$('#example').DataTable( {
"aaSorting" :[[0,'desc']],
//"lengthMenu":[[20,50, 100, -1], [20,50, 100,"All"]]
});
} );

</script>


</head>