<?php
  define("TITLE", "Else If");

  $name = "Ebu";
  $age = 45;
  $city = "San Jose";
?>

<!DOCTYPE html>
<html>

  <head>
      <title><?php echo TITLE?></title>
  </head>

  <body>

    <?php

      if($age < 20){
        echo "You are not allowed";
      }
      elseif($age > 20 && $age < 40){
        echo "Welcome : " . $name;
      }
      else{
        echo "You are so high";
      }
    ?>

  </body>
</html>
