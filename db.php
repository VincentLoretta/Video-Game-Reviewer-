<?php




if($_SERVER["REQUEST_METHOD"] !== "POST"){
    //redirect the user to destination
    header('Location: ../VGW.HTML');
    exit(); //terminate the program
  }

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "gameLibrary";
  // create connection 

  $con = mysqli_connect($servername, $username, $password, $dbname);

  $Title = $_POST['Title'];
  $Rev = $_POST['Rev'];
  $Likes = $_POST['Likes'];




$sql = "INSERT INTO `Reviews` (`Title`, `Review`,`Likes`) VALUES ('$Title', '$Rev', '$Likes')";

$rs = mysqli_query($con, $sql);

if($rs)
{
  echo "Thank you for your review of " . $Title .", Check out some other reviews";
}
elSE {

  ECHO "OOPS SOMETHING FUCKED UP ";
  // code...
}

  
  

?>

<!DOCTYPE html>
<style>
  body{
    background-color: lightblue;
  }
</style>

<a href="http://localhost/myrepositories/Video-Game-Reviewer-/Reviews.php">Check Out Our Other Reviews </a><br><br><br>


</HMTL>







