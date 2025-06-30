<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="Lesson-3-$_GET-&-$_POST-Part-2.php" method="get">
    <label>Quantity: </label><BR>
    <input type="text" name="quantity">
    <br>
    <input type="submit" value="total">
  </form>
</body>
</html>


<?php

$item = "pizza";
$price = 5.99;
// change $_GET to $_POST for secure/sensitive info.
$quantity = $_GET["quantity"];
$total = null;

echo "You have ordered {$quantity} x {$item}s <br>";
$total = $quantity * $price;

echo "Your total is \${$total}";




?>