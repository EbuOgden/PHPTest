<?php
  define("TITLE", "Functions");

  $arr = array("Marvel", "Klo", "Hey", "Http", "WebSocket");
?>

<!DOCTYPE html>
<html>
  <head>
    <title><?php echo TITLE ?></title>
  </head>

  <body>
    <?php

      sort($arr);

      echo "-----Sorted!-----<br>";

      foreach($arr as $item){
        echo "$item <br>";
      };

      echo "-----Reverse Sorted!-----<br>";

      rsort($arr);

      foreach($arr as $item){
        echo "$item <br>";
      };

      echo "-----Str To Lower!-----<br>";

      foreach($arr as $item){
        echo strtolower($item) . "<br>";
      }

      echo "-----SHA1!-----<br>";

      foreach($arr as $item){
        echo $item . " is : " . sha1($item) . "<br>";
      }
    ?>

    <form method="POST">
      <input type="text" placeholder="Enter for sha1 result!" name="sha1"></input>
      <input type="submit" name="submit" value="Submit">
    </form>

    <?php

      if(isset($_POST['sha1'])){
        echo "Your datum is : " . $_POST['sha1'] . " and this is the sha1 version : " . sha1($_POST['sha1']) ;
      }
    ?>
  </body>
</html>
