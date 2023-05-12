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
  $Rating = $_POST['Rating'];

$sql = "INSERT INTO `Reviews` (`Title`, `Body`, `Likes`) VALUES ('$Title', '$Rev', 0)";

$rs = mysqli_query($con, $sql);

if($rs)
{
  echo "Contact Records Inserted";
}




  
 

?>









