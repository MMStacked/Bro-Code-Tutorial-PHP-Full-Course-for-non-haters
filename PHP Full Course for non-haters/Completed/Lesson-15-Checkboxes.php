<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    <input type="checkbox" name="foods[]" value="Pizza">
    Pizza<br>
    <input type="checkbox" name="foods[]" value="Hamburger">
    Hamburger<br>
    <input type="checkbox" name="foods[]" value="Hotdog">
    Hotdog<br>
    <input type="checkbox" name="foods[]" value="Taco">
    Taco<br>
    <input type="submit" name="submit">
  </form>
</body>
</html>


<?php
/*  ###---  This is the normal if function for when each food has a unique 'name="xyz"'.  ---###
  if(isset($_POST["submit"])){

    if(isset($_POST["pizza"])){
      echo "You like pizza! <br>";
    }
    if(isset($_POST["hamburger"])){
      echo "You like Hamburgers! <br>";
    }
    if(isset($_POST["hotdog"])){
      echo "You like hotdogs! <br>";
    }
    if(isset($_POST["taco"])){
      echo "You like tacos! <br>";
    }
    // ###---  The output if you dont tick a food box  ---###
    if(empty($_POST["pizza"])){
      echo "You dont like pizza <br>";
    }
    if(empty($_POST["hamburger"])){
      echo "You dont like hamburgers <br>";
    }
    if(empty($_POST["hotdog"])){
      echo "You dont like hotdogs <br>";
    }
    if(empty($_POST["taco"])){
      echo "You dont like tacos <br>";
    }
  }
*/

  if(isset($_POST["submit"])){

    $foods = $_POST["foods"];

    foreach ($foods as $food){
      echo $food . "<br>";
    }

  }




?>