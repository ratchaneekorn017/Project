<?php 
session_start();
include('../condb.php');

$m_id = $_SESSION['member_id'];
$m_name = $_SESSION['m_name'];
$level = $_SESSION['userlervl'];

$sql ="SELECT m_name, m_img FROM tbl_member WHERE member_id=$m_id";
$result = mysqli_query($conn, $sql) or die ("Error in query: $sql" . mysqli_error($conn));
$row = mysqli_fetch_array($result);
extract($row);

$m_img = $row['m_img'];
$m_name = $row['m_name'];

if ($m_leve!='m'){
    Header("location:../logout.php");
}
?>