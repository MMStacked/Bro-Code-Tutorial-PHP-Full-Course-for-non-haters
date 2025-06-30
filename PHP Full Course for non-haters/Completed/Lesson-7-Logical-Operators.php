<?php
    //  Logical operators = combine conditional statements
    //  if(condition1 && condition2)


    //  && = True if both conditions are true
    //  || = True if at least one condition is true
    //  ! = True if false. False if true.(oposite)


  $temp = 15;
  $cloudy = false;

/* this is if you use the && (and) operator

  if($temp >= 0 &&  $temp <=30){
    echo "The weather is good.";
  }
  else {
    echo "The weather is bad";
  }

*/

/*use of the || (OR) operator

  if($temp < 0 || $temp > 30) {
    echo "The weather is bad";
  } else {
    echo "The weather is good.<br>";
  }

  if($cloudy) {
    echo "It's cloudy";
  } else {
    echo "It's sunny!";
  }
*/

$age = 18;
$citizen = true;

  /* this is if you use the && (and) operator

  if($age >= 18 && $citizen){
    echo "You can vote!";
  } else {
    echo "You cannot vote :(";
  }

  */

  /*
  if ($age < 18 || !$citizen){
    echo "You cannot vote.";
  } else {
    echo "You can vote!";
  }
*/


$child = false;
$senior = false;
$ticket = null;

if($child || $senior){
  $ticket = 10;
} else {
  $ticket = 15;
}

echo "The ticket price if \${$ticket}"







?>