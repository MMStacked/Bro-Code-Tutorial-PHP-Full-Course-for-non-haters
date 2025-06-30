<?php
  // if statement = if some condition is true, do something
  //                if condition is false, dont do it

/*    $age = 18;

    if($age >=100){
      echo "Sorry, you are too old to enter";
    }
    elseif ($age >= -1){
      echo "You may enter this site";
    }
    elseif ($age <= 0){
      echo "That is not valid";
    }
    else {
      echo "You must be 18+ to enter";
    }
*/ 


/*
  $adult = true;

  if($adult == true){
    echo "You may enter this site";
  }
  else {
    echo "You must be an adult to enter";
  }
*/

  $hours = 50;
  $rate = 15;
  $weekly_pay = null;

  if($hours <= 0){
    $weekly_pay = 0;
  }
  elseif($hours <= 40){
      $weekly_pay = $hours * $rate;
  }
  else{
    $weekly_pay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));
  }


  echo "You made \${$weekly_pay} this week";



?>