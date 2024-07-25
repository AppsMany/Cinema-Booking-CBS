
<?php session_start();
require_once('dbconnect.php');

// Code for login system
if(isset($_POST['login']))
{
$password=$_POST['password'];
$useremail=$_POST['uemail'];
$ret= mysqli_query($con,"SELECT * FROM users WHERE email='$useremail' and password='$password'");
$num=mysqli_fetch_array($ret); //returns array that corresponds to fetched row or null if theres no
if($num>0)
{
$extra="home.php";

$_SESSION['login']=$_POST['uemail'];
$_SESSION['id']=$num['id'];
$_SESSION['name']=$num['fname'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
echo "<script>alert('Invalid email address or password');</script>";

}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../Cinema Booking CBS/css/stylelog.css" rel="stylesheet">

</head>
<body>
  <div id="container">   
<form name="login" action="" method="post">
<input type="text" class="text" name="uemail" value="" placeholder="Enter your registered email"  required="">

<input type="password" value="" name="password" placeholder="Enter valid password" required="">
<input type="submit" name="login" value="LOG IN" >
                
              </form>
</div>
<div class="adminlog">
 <ul>
<a href="../Cinema Booking CBS/administrator/admin.php">Admin Login->></a></div>
</ul>
</div>

</body>
</html>