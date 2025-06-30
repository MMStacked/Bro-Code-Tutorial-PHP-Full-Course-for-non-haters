<?php

    //switch = replacement to using many elseif statements
    //         more efficient, less code to write


/*
    $grade = "Fg";


    switch($grade){
      case "A":
          echo "You did great";
          break;
      case "B":
          echo "You did good";
          break;
      case "C":
          echo "You did okay";
          break;
      case "D":
          echo "You did poorly";
          break;
      case "F":
          echo "You failed";
          break;
      default:
          echo "{$grade} is not valid.";
    }
*/

  $date = date("l");
        $date = "pizza";

    switch($date){
      case "Monday":
        echo "I hate Mondays";
        break;
      case "Tuesday":
        echo "I have Tuesday";
        break;
      case "Wednesday":
        echo "I hate Wednesday";
        break;
      case "Thursday":
        echo "I hate Thursdays";
        break;
      case "Friday":
        echo "I love Fridays";
        break;
      case "Saturday":
        echo "I love to part on the weekend!";
        break;
      case "Sunday":
        echo "I like relaxing on a Sunday";
        break;
      default:
      echo "'{$date}' is not a date";      
    }
?>