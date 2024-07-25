<?php
session_start();
include("dbconnect.php");
if(isset($_POST['login']))
{
$adminusername=$_POST['username'];  $pass=($_POST['password']);
$ret=mysqli_query($con,"SELECT * FROM admin WHERE username='$adminusername' and password='$pass'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="admin.php";
$_SESSION['login']=$_POST['username'];
$_SESSION['id']=$num['id'];
echo "<script>window.location.href='".$extra."'</script>";
exit();
}
else
{
echo "<script>alert('Invalid username or password');</script>";
//re-direct to index.php after invalid 
$extra="index.php";
echo "<script>window.location.href='".$extra."'</script>";
exit();
}
}

?>
<!DOCTYPE html>
<html>
<head>
<style>
body {
   background-color:grey;
}
#container {
    position: fixed;
    width: 340px;
    height: 200px;
    top: 50%;
    left: 50%;
    margin-top: -140px;
    margin-left: -170px;
    border-radius: 3px;
    background: linear-gradient(to right,red,yellow,green); 
    border: 1px solid #ccc;
	
}
form {
margin: 0 auto;
margin-top: 20px;
}
input {
    font-family: "Helvetica Neue", Helvetica, sans-serif;
    font-size: 25px;
    outline: none;
}
input[type=text],
input[type=password] {
    color:black;
    padding-left: 10px;
    margin: 10px;
    margin-top: 12px;
    margin-left: 18px;
    width: 290px;
    height: 35px;
	border: 1px solid #c7d0d2;
    border-radius: 2px;
	}
    
input[type=submit]{
float: right;
margin-right: 20px;
margin-top: 20px;
width: 80px;
height: 30px;
font-size: 20px;
font-weight: bold;
color:grey;
border-radius: 10px;
border: 1px solid #66add6;
cursor: pointer;
}

</style>
<title>Login System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<div id="container">

 <form action="" method="post">
<input type="text" name="username" placeholder="UserName" autofocus required="">
<input type="password" name="password" placeholder="Password" required="">
<input  name="login"type="submit" value="LOGIN">
</form>	  	
</div>
	  	

  </body>
</html>
