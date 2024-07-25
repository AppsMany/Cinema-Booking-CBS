<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../Cinema Booking CBS/css/homestyle.css" rel="stylesheet">

<title>Book A Ticket</title>
<link rel="icon" type="image/png" href="img/bob.jpeg">
</head>
<body>

	<div class="header">
<h2 class="logo">MY MOVIES</h2>

</div>
</div>
<div class="movies-container">

<?php
session_start();
include("checklogin.php");
check_login();

    $link = mysqli_connect("localhost", "root", "", "cinemamovies");
    $sql = "SELECT * FROM movieTable";
    ?>
  <?php
      if($result = mysqli_query($link, $sql)){
if(mysqli_num_rows($result) > 0){
for ($i = 0; $i <= 4; $i++){
$row = mysqli_fetch_array($result);
echo '<div class="movie-box">';
echo '<div class="movie-info ">';
echo '<h3>'. $row['movieTitle'] .'</h3>';
echo '<a href="booking.php?id='.$row['movieID'].'"></i> Book a seat</a>';
echo '</div>';
echo '</div>';
}
} }
// Close connection
mysqli_close($link);
?> 
</div>

</body>

</html>
