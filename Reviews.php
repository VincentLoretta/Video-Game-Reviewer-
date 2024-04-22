<!DOCTYPE html>
<html lang="en">

    <head>
      <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews</title>


    <link rel="stylesheet" href="styles.css">   
  </head>
<style>
  
body{
  background-color: lightblue;
}

</style>
  <h1 style="color:blue;">Reviews<br><br> </h1>

<a href="http://localhost/myrepositories/Video-Game-Reviewer-/VGW.HTML">Leave another review </a><br><br><br>
</HTML>


<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "gameLibrary";
  // create connection 

  $con = mysqli_connect($servername, $username, $password, $dbname);


  
$sql = "SELECT `Title`, `Body`, `Likes` FROM `Reviews`";

$rs = mysqli_query($con, $sql);

if (mysqli_num_rows($rs) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($rs)) {
   echo $row["Title"]. ":  " . $row["Body"]."  ". $row["Likes"] ."/10" . "<br>". " ". "<br>". " ". "<br>". " ". "<br>";	


  }
} else {
  echo "0 results";
}


?>



