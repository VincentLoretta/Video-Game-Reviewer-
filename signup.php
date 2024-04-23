<!doctype html>
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
  </head>



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
  $Email = $_POST['email'];
  $new_password = $_POST['password'];


// Function to check if email already exists in the database
function isEmailUnique($email) {
    // Perform a database query to check if the email exists
    // Example: SELECT COUNT(*) FROM users WHERE email = '$email'
    // Execute the query and return true if no rows are found, false otherwise
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    // Check if email is unique
    if (isEmailUnique($email)) {
        // Proceed with user registration
        // Example: INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$password')
        echo "Account created successfully!";
    } else {
        echo "This email is already in use. Please use a different email.";
    }
}

$sql = "INSERT INTO `Users` (`username`, `email`,`new_password`) VALUES ('$Username', '$Email', '$new_password')";



  
  

?>

</html>