<?php session_start();
require_once('dbconnect.php');

//New registration insert into db
if(isset($_POST['signup']))
{
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $contact=$_POST['contact'];

  $a=date('Y-m-d');
  $msg=mysqli_query($con,"insert into users(fname,lname,email,password,contactno,posting_date) values('$fname','$lname','$email','$password','$contact','$a')");
if($msg)
{
  echo "<script>alert('Register successfully');</script>";
}
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Login System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../Cinema Booking CBS/css/style.css" rel="stylesheet">

</head>
<body>

<div id="container">
<form name="registration" method="post" action="">
<p>First Name </p>
<input type="text" class="text" value=""  name="fname" required >
<p>Last Name </p>
<input type="text" class="text" value="" name="lname"  required >
<p>Email Address </p>
<input type="text" class="text" value="" name="email"  >
<p>Password </p>
<input type="password" value="" name="password" required>
<p>Contact No. </p>
<input type="text" value="" name="contact"  required>
<input type="reset" value="Reset">
<a href="newlog.php">LOGIN </a>

<input type="submit" name="signup"  value="Sign Up" >
</div>
</div>
</form>

</body>
</html>