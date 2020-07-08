<?php 

    session_start();

    include 'condb.php';

    if (isset($_POST['submit'])) {

        $m_user = $_POST['m_user'];
        $password = $_POST['password'];
        $m_email = $_POST['m_email'];
        $m_name = $_POST['m_name'];
        $m_lname = $_POST['m_lname'];

        $user_check = "SELECT * FROM tbl_member WHERE m_user = '$m_user' LIMIT 1";
        $result = mysqli_query($conn, $user_check);
        $user = mysqli_fetch_assoc($result);

        if ($user['m_user'] === $m_user) {
            echo "<script>alert('User มีในระบบแล้ว');</script>";
        } else {
            $password = md5($password);

            $query = "INSERT INTO tbl_member (m_user, m_name , m_lname , m_email , password ,  userlevel)
                        VALUE ('$m_user','$m_name', '$m_lname', '$m_email', '$password',  'm')";
            $result = mysqli_query($conn, $query);

            if ($result) {
                $_SESSION['success'] = "Insert user successfully";
                header("Location: index.php");
            } else {
                $_SESSION['error'] = "Something went wrong";
                header("Location: index.php");
            }
        }

    }


?>


<?php 
    include 'h.php'; 
    include 'navbar.php'
?>
<SCRIPT>

function check_data()
{
var eng = /^([a-zA-Z0-9])+$/i;

if (!(eng.test(document.all.text1.value)))
{
alert("กรุณากรอก Username เป็นภาษาอังกฤษ");
document.all.text1.select();
return false;
}
}
</SCRIPT>
<body>
<br><br><br>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-horizontal" onsubmit="return check_data()">
   
    <div class="form-group">
    <div class="col-sm-4">  </div>
    <div class="col-sm-4" align="center">
      <br>
      <h4> สมัครสมาชิก </h4>
      
    </div>
  </div>
 

  <div class="form-group">
    <div class="col-sm-4" align="right"> ชื่อ </div>
    <div class="col-sm-4" align="left">
      <input  name="m_name" type="text" class="form-control" id="m_name"  required />
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-4" align="right"> นามสกุล </div>
    <div class="col-sm-4" align="left">
      <input  name="m_lname" type="text" class="form-control" id="m_lname"  required />
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-4" align="right"> Username </div>
    <div class="col-sm-4" align="left">
      <input  name="m_user" type="username" class="form-control" id="text1"  required />
    </div>
  </div>
  
  
  <div class="form-group">
    <div class="col-sm-4" align="right"> email  </div>
    <div class="col-sm-4" align="left">
      <input  name="m_email" type="email"  class="form-control" id="m_email" required />
    </div>
  </div>
  
   

    <div class="form-group">
    <div class="col-sm-4" align="right"> password  </div>
    <div class="col-sm-4" align="left">
      <input  name="password" type="password" class="form-control" id="password" required />
    </div>
  </div>

  
  <div class="form-group">
    <div class="col-sm-4"> </div>
    <div class="col-sm-5">
      <button type="submit" class="button button1" name="submit"  id="submit" value="Submit"> สมัครสมาชิก  </button>
    </div>
    

  
      
    
    
    
    </form>
   
   
    
</body>
<?php 
include 'footer2.php';
include 'script4.php';?>