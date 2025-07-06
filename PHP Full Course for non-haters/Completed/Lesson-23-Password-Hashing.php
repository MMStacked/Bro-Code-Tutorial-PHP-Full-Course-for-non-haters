<?php
    //  hashing = transforming sensitive data (password)
    //            into letters, numbers, and/or symbols
    //            via a mathimatical process. (similar to encryption)
    //            Hides the origional data from 3rd parties.

  $password = "pizza123";

  $hash = password_hash($password, PASSWORD_DEFAULT);

  echo $hash . "<br>";

  if(password_verify("pizza12", $hash)){
    echo "The password is correct. <br>";
  } 
  else {
    echo "Incorrect password. <br>";
  }

?>