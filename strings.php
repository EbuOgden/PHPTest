<?php

  define("TITLE", "Strings");

  $a = "Ebu";
  $a .= "bekir";
  $b = $a. " Ogden";



?>

<!DOCTYPE html>
<html>
  <head>
    <title><?php echo TITLE ?></title>
  </head>

  <body>

    <?php echo $a .= " Ogden" ?>
  </body>
</html>
