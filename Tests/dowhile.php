<?php
  define ("TITLE", "Dowhile");

  $counter = 1;
?>

<!DOCTYPE html>

<html>
  <head>
    <title><?php echo TITLE; ?></title>
  </head>

  <body>

    <?php
      do{
        echo "$counter <br>";
        $counter++;
      }while($counter <= 5);

    ?>
  </body>
</html>
