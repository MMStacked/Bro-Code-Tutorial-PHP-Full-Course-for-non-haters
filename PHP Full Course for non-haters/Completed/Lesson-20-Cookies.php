<?php
    //  cookie = Information about a user stored in a user's web browser
    //           targeted advertisements, browsing preferences, and
    //           other non-sensitive data.
  //  ###---  Set the first test cookie value
    setcookie("fav_food", "pizza", time() + (86400 * 2), "/");
    setcookie("fav_drink", "coffee", time() + (86400 * 3), "/"); 
    setcookie("fav_dessert", "ice cream", time() + (86400 * 2), "/");

// ###--- How to delete cookie "time() - 0," instead of "time() + (86400 * 2),"
/*
    setcookie("fav_food", "pizza", time() - 0, "/");
    setcookie("fav_drink", "coffee", time() - 0, "/");
    setcookie("fav_dessert", "ice cream", time() - 0, "/");
*/

foreach($_COOKIE as $key => $value){
  echo "{$key} = {$value} <br>";
}




  if(isset($_COOKIE["fav_food"])){
    echo "Buy some {$_COOKIE["fav_food"]}";
  }
    else{
      echo "I don't know your favourite food";
    }
?>