<?php
    //  function = write some code one, reuse when you need it
    //             type () after function name to invoke
    //             ex. add() subtract() multiply() divide()


/*
  function happy_birthday($first_name, $age){
    echo "Happy Birthday dear {$first_name}! <br>";
    echo "Happy Birthday to you! <br>";
    echo "Happy Birthday dear {$first_name} <br>";
    echo "You are {$age} years old! <br><br>";

    return
  }


  happy_birthday("Spongebob", 30);
  happy_birthday("Patrick", 35);
  happy_birthday("Squidward", 45);
*/

/*
function is_even($number){
  //$result = $number % 2;
  return $number % 2;
}

echo is_even(33);
*/


function hypotenuse(int $a, float $b) {
  $c = sqrt($a ** 2 + $b ** 2);
  return $c;
} 

echo hypotenuse(3, 4);
?>