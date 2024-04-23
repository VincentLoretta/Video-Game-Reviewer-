import mysql.connector

mydb = mysql.connector.connect(
  host="127.0.0.1",
  user="root",
  database = "gameLibrary"
)

mycursor = mydb.cursor()

mycursor.execute("Select title From Games" )

myresult = mycursor.fetchall()

for x in myresult:
    print(x)
    
    
    f = open('VGW.HTML', 'w')

    html_template = """ <html>
    <head>




    <title>Video Game Website</title>
    </head> 
    <style>
    body {
      margin: 0;
      font-family: Times New Roman;
    }
    body {background-color: violet;}

    input[type=button], input[type=submit], input[type=reset] {
      background-color: yellow;
      border: none;
      color: black;
      padding: 13px 17px;
      text-decoration: none;
      margin: -41px 1725px;
      cursor: pointer;
    }

    </style>



    <body>

    <div class="topnav">

      <a class="active" href="#home ">Home</a>
      <a href=" #about">  About</a> 
      <a href=" #contact ">Contact</a>
      <input type="text" placeholder="Search..">
      <form action="/action_page.php">
      <input type="Submit" value ="Submit">
     
    </div>


    <style>





    .topnav {
        overflow: hidden; 
        background-color: black; }


    .topnav a {
        float: left;
        display: block;
        background
        color: white;
        text-align: center
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
        margin-right: 50px;
        cursor: pointer;
        }


    .topnav button type{
        margin-right: 80px;
        }


    .topnav a.active {
       padding: 13px 17px;
      background-color: yellow;
      color: black;
    }

    .topnav input[type=text] {
      float: right;
      padding: 10px;
      border: none;
      margin-top: 3px;
      margin-right: 200px;

      font-size: 17px;

    }


    @media screen and (max-width: 600px) {
      .topnav a, .topnav input[type=text] {
        float: none;
        display: block;
        text-align: left;
        width: 100%;
        margin: 0;
        padding: 14px;
      }
      .topnav input[type=text] {
        border: 1px solid #ccc;
      }
    }
    </style>


    <h1 style="color:blue;">Welcome to the Video Game Reviewer </h1>

    <form>

    <label for='Vname'>Video Game Title </label><br>
    <input type='text' id='Vname'name='Vname'</input><br>
    <label for='Rev'>Please Leave your Review</label><br>
    <input type='text' id='Rev' name='Rev'</input><br>

        

    </form>

<?php
$hostName = "127.0.0.1";
$userName = "root";
$password = "";
$databaseName = "GameLibrary";
 $conn = new mysqli($hostName, $userName, $password, $databaseName);


?>





    </body>
    </html>
    """
    f.write(html_template)

    f.close()