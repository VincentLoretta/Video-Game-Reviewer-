<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Game Reviewer</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            background-color: lightpink;
            position: relative; /* Ensure absolute positioning works */
        }

        .login-signup-button {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
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

  $Username = $_POST['username'];
  $new_password = $_POST['password'];

  echo "Welcome Back". $Username;

?>


</html>
