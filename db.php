<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "gameLibrary";
  // create connection 

  $con = mysqli_connect($servername, $username, $password, $dbname);

  if(mysqli_connect_errno()){
    echo "failed to connect!"
    exit();
  }
  echo "connection success!"
?>