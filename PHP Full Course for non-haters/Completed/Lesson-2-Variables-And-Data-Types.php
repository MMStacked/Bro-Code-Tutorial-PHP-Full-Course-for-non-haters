<?php
  $name = "John";
  $food = "pizza";
  $email = "john234@gmail.com";

  $age = 21;
  $users = 2;
  $quantity = 3;

  $gpa = 2.5;
  $price = 4.99;
  $tax_rate = 5.1;

  $employed = true;
  $online = true;
  $for_sale = false;

  $food = "Pizza";
  $total = null;

  echo "Hello {$name}<br>";
  echo "You like {$food}<br>";
  echo "Your email is $email<br>";

  echo "You are {$age}<br>";
  echo "There are {$users} online<br>";
  echo "You would like to buy {$quantity} items<br>";

  echo "Your GPA is: {$gpa}<br>";
  echo "Your pizza is: \${$price}<br>";
  echo "Your salses tax rate is: {$tax_rate}%<br>";

  echo "online status: {$online}<br>";

  echo "You have ordered {$quantity} x {$food}<br>";
  $total = $quantity * $price;
  echo "Your total is: \${$total}";
  

?>