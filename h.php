
<?php
 //if (!$_SESSION["UserID"]){  //check session
 //	Header("Location: form_login_m.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form
 //}
	include("condb.php");
	$member_id = $_SESSION['member_id'];



if ($member_id=='') {	
}
else {
		// echo $ID;
	 // exit();
$sql = "SELECT * FROM tbl_member WHERE member_id=$member_id ";
$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error($conn));
$row = mysqli_fetch_array($result);
extract($row);
	// echo $sql;
 // echo "<pre>";
	 //  print_r($_SESSION);
// echo "</pre>";
	
}

?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ข้าวตู</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="css/ionicons.min.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Sriracha&family=Thasadith:wght@700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!-- JavaScripts -->
<script src="js/modernizr.js"></script>

<!-- Online Fonts -->
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-family: 'Sriracha', cursive;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius: 40px;

}
.button1 {
  background-color: #78aefa; 
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-family: 'Sriracha', cursive;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius: 40px;

}
.button2 {
  background-color: #ff4719; 
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-family: 'Sriracha', cursive;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius: 40px;

}
.button3 {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-family: 'Sriracha', cursive;
  font-size: 18px;
  margin: 1px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius: 40px;

}

input[type=text]:focus {
  
  border: 1px solid #4CAF50;
}

input[type=email]:focus {
  border: 1px solid #4CAF50;
}
input[type=password]:focus {
  border: 1px solid #4CAF50;
}

h1 {
  font-family: 'Sriracha', cursive;

}
h3 {
  font-family: 'Sriracha', cursive;
}
h4 {
  font-family: 'Sriracha', cursive;
}
p {
  font-family: 'Sriracha', cursive;
  font-size: 25px;
  color: black;

  }
  p.a {
  font-family: 'Sriracha', cursive;
  font-size: 17px;
  color: black;

  }
  p.p {
  font-family: 'Sriracha', cursive;
  font-size: 20px;
  color: black;

  }
a{
  font-family: 'Sriracha', cursive;
  font-size: 18px;
}

a:hover, a:focus {
	color: #ebdf83;
}
a.c:hover, a.c:focus {
	color: #539131;
}
a.a {
  font-family: 'Sriracha', cursive;
  font-size: 25px;
}
a.b {
  font-family: 'Sriracha', cursive;
  font-size: 30px;
}
a.c {
  font-family: 'Sriracha', cursive;
  font-size: 15px;
}
div {
  font-family: 'Sriracha', cursive;
  font-size: 18px;
}

.type1 {
    width :100%;
}

.type2, th
{
    
    font-family: 'Sriracha', cursive;
   
    background-color: #b1db81;
}

footer {
  text-align: center;
  padding: 3px;
  background-color: #b1db81;
  color: white;
}
.footer {
 
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: #b1db81;
  color: white;
  text-align: center;
}


img {
  max-width: 100%;
  height: auto;
}

</style>