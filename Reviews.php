


<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "gameLibrary";
  // create connection 

  $con = mysqli_connect($servername, $username, $password, $dbname);


  
$sql = "SELECT `Body` FROM `Reviews`";

$rs = mysqli_query($con, $sql);

if (mysqli_num_rows($rs) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($rs)) {
   echo $row["Body"]."<br>". " ". "<br>". " ". "<br>". " ". "<br>";	
  }
} else {
  echo "0 results";
}


?>



