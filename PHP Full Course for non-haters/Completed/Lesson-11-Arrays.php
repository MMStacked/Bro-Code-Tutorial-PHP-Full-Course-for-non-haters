<?php

    //  array = "variable" which can hold more than one value at a time

    $food_1 = "apple";
    $food_2 = "orange";
    $food_3 = "banana";
    $food_4 = "coconut";

    $foods = array("apple", "orange", "banana", "coconut");

/*
    echo $foods[0] . "<br>";
    echo $foods[1] . "<br>";
    echo $foods[2] . "<br>";
    echo $foods[3] . "<br>";
*/

  //replace an item at a spesific index with a new value.
    //$foods[0] = "pineapple";

  //add an addional value into the array.
    //array_push($foods, "pineapple", "kiwi");

  //remove the last value from the array
    //array_pop($foods);

  //remove the first value from the array
    //array_shift($foods);

  //reverse the order of the array, BUT, it will create it as a new output/array, which you can assign
    //$foods = array_reverse($foods);

  //xby
    echo count($foods) . "<br>";



    foreach($foods as $food){
      echo $food . "<br>";
    }



?>