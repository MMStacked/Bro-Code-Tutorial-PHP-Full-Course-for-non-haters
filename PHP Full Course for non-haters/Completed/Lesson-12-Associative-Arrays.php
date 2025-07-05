<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
      <label>Enter a country</label>
      <input type="text" name="country">
      <input type="submit">
    </form>
</body>
</html>


<?php
    //  associative array =  an array made of key => value pairs

    //  countries => capitals
    //  id => username
    //  item => price

  $capitals = array("USA"=>"Washington D.C",
                    "Japan"=>"Kyoto",
                    "South Korea"=>"Seoul",
                      "India"=>"New Delhi");

  //$capital = $_POST["country"];
  $capital = $capitals[$_POST["country"]];
  echo $capital;














                      
            
  //echo $capitals["India"];

  //Change The $value of a $key
  //$capitals["USA"] = "Las Vegas";

  //add a Key value pair
  //$capitals["china"] = "Bejing";

  //remove the last value pair from an array
  //array_pop($capitals);

  //remove the first key value pair from the array
  //array_shift($capitals);

  //save the $keys of an key value array into a new variable
  //$keys = array_keys($capitals);

  //save the $values of an key value array into a new variable
  //$values = array_values($capitals);

  //Swap the $Key and $value around
  //$capitals = array_flip($capitals);

  //Reverse the order of the key value pairs
  //$capitals = array_reverse($capitals);

  // count the number of key value pairs 
  //echo count($capitals) . "<br>";




/*Outputs both the key and the value as a list
  foreach($capitals as $key => $value){
    echo "{$key} = {$value} <br>";
  }
*/


  /*Outputs the main Key as a list
  foreach($keys as $key){
    echo $key . "<br>";
  }
  */

  /*
  foreach($values as $value){
    echo $value . "<br>";
  }
  */

 /* 
  foreach($capitals as $key => $value){
    echo "{$key} = {$value} <br>";
  }
*/

?>