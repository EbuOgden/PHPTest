<?php
  define("TITLE", "Custom Functions");

?>

<!DOCTYPE html>
<html>
  <head>
    <title><?php echo TITLE ?> </title>
  </head>

  <body>

    <button name="sayBut">SAY!</button>
    <?php
      function sayHello(){
        echo "Hello World!";
      };


      $say = $_POST['sayBut'];

      $say = true;
      if($say){
        sayHello();
      }
      else{
        echo "BB";
      }
    ?>
  </body>
</html>
