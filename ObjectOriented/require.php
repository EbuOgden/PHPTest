<?php
require "layout.php";

title("Require");

$word = "wonderful";
$day = "have a wonderful day";
$n = "nah"
?>

<!DOCTYPE html>
<html>
  <head>
    <title><?php echo TITLE ?></title>
  </head>
  <body>
    <?php
      if($pos = strpos($day, $word )){
        echo "'$word' is found at '$pos' in '$day'<br>";
      }
      else{
        echo "'$word' not found in '$day' <br>";
      }

      $new_str = str_replace("wonderful", $n, $day);
      echo $new_str;

    ?>
  </body>
</html>
