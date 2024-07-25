<!DOCTYPE html>
<html lang="en">
<!-- db connect and select -->
<?php 
$id = $_GET['id'];
$link = mysqli_connect("localhost", "root", "", "cinemamovies");
$movieQuery = "SELECT * FROM movieTable WHERE movieID = $id"; 
$movieImageById = mysqli_query($link,$movieQuery);
$row = mysqli_fetch_array($movieImageById);
?>
<!-- redirect to index.php -->

<?php
session_start();
include("checklogin.php");
check_login();

?>

<head>
<meta charset="UTF-8">
<link href="../Cinema Booking CBS/css/homestyle.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Booking <?php echo $row['movieTitle']; ?> Now</title>
<link rel="icon" type="image/png" href="img/bob.jpeg">
</head>
<body style="background-color:grey;">
<h1>RESERVE YOUR TICKET</h1>
<div class="header">
<h2 class="logo">CBS</h2>

<ul class="menu">
<a href="home.php">Home</a>
<div id="logout">
<a href="logout.php">Logout ->></a></div>
</ul>
</div>
<!-- display image and content on table -->
 <div class="movies-box"><?php

?></div>
<div class="title"><?php echo $row['movieTitle']; ?></div>
<div class="movie-information">
<table>
<tr>
<td>GENRE</td>
<td><?php echo $row['movieGenre']; ?></td>
</tr>
<tr>
<td>DURATION</td>
<td><?php echo $row['movieDuration']; ?></td>
</tr>
<tr>
<td>RELEASE DATE</td>
<td><?php echo $row['movieRelDate']; ?></td>
</tr>
<tr>
<td>DIRECTOR</td>
<td><?php echo $row['movieDirector']; ?></td>
</tr>
<tr>
<td>ACTORS</td>
<td><?php echo $row['movieActors']; ?></td>
</tr>
</table>
</div>
<form action="" method="POST">

<select name="theatre" required>
<option value="" disabled selected>THEATRE</option>
<option value="main-hall">Main Hall</option>
<option value="vip-hall">VIP Hall</option>
<option value="private-hall">VVIP Hall</option>
</select>

<select name="type" required>
<option value="" disabled selected>TYPE</option>
<option value="3d">3D</option>
<option value="2d">2D</option>
<option value="imax">IMAX</option>
<option value="7d">7D</option>
</select>

<select name="date" required>
<option value="" disabled selected>DATE</option>
 <option value="12-3">SEPTEMBER 12,2019</option>
<option value="13-3">SEPTEMBER 16,2019</option>
<option value="14-3">SEPTEMBER 17,2019</option>
<option value="15-3">SEPTEMBER 19,2019</option>
<option value="16-3">SEPTEMBER 19,2019</option>
</select>

<select name="hour" required>
<option value="" disabled selected>TIME</option>
<option value="09-00">09:00 AM</option>
<option value="12-00">12:00 AM</option>
<option value="15-00">03:00 PM</option>
<option value="18-00">06:00 PM</option>
<option value="21-00">09:00 PM</option>
<option value="24-00">12:00 PM</option>
</select>

<input placeholder="First Name" type="text" name="fName" required>
<input placeholder="Last Name" type="text" name="lName">
<input placeholder="Phone Number" type="text" name="pNumber" required>
<button type="submit" value="submit" name="submit" class="form-btn">Book a Seat</button><script>alert('Seat Booked Successful);</script>


                    <?php
                    $fNameErr = $pNumberErr= "";
                    $fName = $pNumber = "";
            
                    if(isset($_POST['submit'])){
                     
            
                        $fName = $_POST['fName'];
                        if (!preg_match('/^[a-zA-Z0-9\s]+$/', $fName)) {
                            $fNameErr = 'Name can only contain letters, numbers and white spaces';
                            echo "<script type='text/javascript'>alert('$fNameErr');</script>";
                        }   
            
                        $pNumber = $_POST['pNumber'];
                        if (preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $pNumber)) {
                            $pNumberErr = 'Phone Number can only contain numbers and white spaces';
                            echo "<script type='text/javascript'>alert('$pNumberErr');</script>";
                        } 
                        
                        $insert_query = "INSERT INTO 
                        bookingTable (  movieName,
                                        bookingTheatre,
                                        bookingType,
                                        bookingDate,
                                        bookingTime,
                                        bookingFName,
                                        bookingLName,
                                        bookingPNumber)
                        VALUES (        '".$row['movieTitle']."',
                                        '".$_POST["theatre"]."',
                                        '".$_POST["type"]."',
                                        '".$_POST["date"]."',
                                        '".$_POST["hour"]."',
                                        '".$_POST["fName"]."',
                                        '".$_POST["lName"]."',
                                        '".$_POST["pNumber"]."')";
                        mysqli_query($link,$insert_query);
                        }
                    ?>
                </form>
            </div>
        </div>
    </div>

</body>

</html>