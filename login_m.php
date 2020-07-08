<?php 
session_start();
        if(isset($_POST['m_user'])){
        //connection
                  include("condb.php");
        //รับค่า user & password
                  $m_user = $_POST['m_user'];
                  // $password = md5($_POST["password"]);
                  $password = $_POST['password'];
        //query 
                  $sql="SELECT * FROM tbl_member WHERE m_user='".$m_user."' AND password='".$password."' ";

                  $result = mysqli_query($conn,$sql);

                
                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);

                      $_SESSION["member_id"] = $row["member_id"];
                      $_SESSION["m_name"] = $row["m_name"];
                      $_SESSION["userlevel"] = $row["userlevel"];

                      if($_SESSION["userlevel"]=="a"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php

                       // echo 'admin';

                        Header("Location: backend/index.php");

                      }

                       if ($_SESSION["userlevel"]=="m"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php

                        //echo 'member';

                        Header("Location: index.php");

                       }

                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";

                  }

        }else{


             Header("Location: form_login_m.php"); //user & password incorrect back to login again

        }
?>