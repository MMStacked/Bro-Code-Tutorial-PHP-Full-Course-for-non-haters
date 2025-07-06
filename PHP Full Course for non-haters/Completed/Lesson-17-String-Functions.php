<?php

    // $username = "Bro The Code";
    $username = array("Bro", "The", "Code");
    $phone = "123-456-7890";

    //$username = strtolower($username);
    //$username = strtoupper($username);
    //$username = trim($username);
    //$username = str_pad($username, 1000, "1234");
    //$phone = str_replace("-", "", $phone);
    //$username = strrev($username);
    //$username = str_shuffle($username);
    //$equals = strcmp($username, "Bro Code");
    //$len = strlen($username);
    // $index = strpos($phone, "-");
    // $firstname = substr($username, 0, 3);
    // $lastname = substr($username, 4,);
    // $fullname = explode(" ", $username);
    $username = implode(" ",  $username);


  echo $username;
  // echo $phone;
  // echo $equals;
  // echo $len;
  // echo $index;
  // echo $firstname;
  // echo $lastname;
  // echo $fullname;

  // foreach ($fullname as $name){
  //   echo $name . "<br>";
  // }


?>