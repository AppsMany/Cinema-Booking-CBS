<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">  
</head>
<body>
   <?php
    $link = mysqli_connect("localhost", "root", "", "cinemamovies");
    $sql = "SELECT * FROM bookingTable";
    $bookingsNo=mysqli_num_rows(mysqli_query($link, $sql));
    $moviesNo=mysqli_num_rows(mysqli_query($link, "SELECT * FROM movieTable"));
    ?>
   
<h2 style="color: #cf4545"><?php echo $bookingsNo ?></h2>
<h3>Bookings</h3>

<h2 style="color: #4547cf"><?php echo $moviesNo ?></h2>
<h3>Movies</h3>

<form action="" method="POST">
<input placeholder="Title" type="text" name="movieTitle" required>
<input placeholder="Genre" type="text" name="movieGenre" required>
<input placeholder="Duration" type="number" name="movieDuration" required >
<input placeholder="Release Date" type="date" name="movieRelDate" required>
<input placeholder="Director" type="text" name="movieDirector" required>
<input placeholder="Actors" type="text" name="movieActors" required>
<button type="submit" value="submit" name="submit" >Add Movie</button>
<div class="top-menu">
 <ul>
<a href="logout.php">Logout ->></a></div>
</ul>
</div>

<?php
if(isset($_POST['submit'])){
$insert_query = "INSERT INTO 
movieTable (  
movieTitle,
movieGenre,
movieDuration,
movieRelDate,
movieDirector,
movieActors)
VALUES (        
'".$_POST["movieTitle"]."',
'".$_POST["movieGenre"]."',
'".$_POST["movieDuration"]."',
'".$_POST["movieRelDate"]."',
'".$_POST["movieDirector"]."',
'".$_POST["movieActors"]."')";
mysqli_query($link,$insert_query);}
?>
  <!-- redirect to index.php after logout -->

<?php
session_start();
include("checklogin.php");
check_login();

?>   
           
</body>

</html>