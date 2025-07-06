<?php
    //  session = SGB (Super Global Variable) used to store information on a user
    //            to be used across multiple pages.
    //            A user is assigned a session-id
    //            ex. login credentials

    session_start();






?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- This is the login page <br>
  <a href="home.php">This does to the home page </a> <br> -->

  <form action="index.php" method="post">
    username: <br>
    <input type="text" name="username"> <br>
    password: <br>
    <input type="password" name="password"> <br>
    <input type="submit" name="login" value="login"> <br>

</body>
</html>

<?php
/*
  $_SESSION["username"] = "Awais";
  $_SESSION["password"] = "password123";

  echo $_SESSION["username"] . "<br>";
  echo $_SESSION["password"] . "<br>";
*/

  if(isset($_POST["login"])){

    if(!empty($_POST["username"]) &&
      !empty($_POST["password"])) {

        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];

        // echo $_SESSION["username"] . "<br>";
        // echo $_SESSION["password"] . "<br>";

        header("location: home.php");
      } else {
        echo "Missing username and/or password. <br>";
      }

  }


?>
