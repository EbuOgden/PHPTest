<?php

  define("TITLE", "Assosiative Arrays");
  $assosiativeArray = array (
                        name => "Ebubekir",
                        surname => "Ogden",
                        age => 22,
                        city => "San Jose",
                        state => "California"

                      );
 ?>

 <!DOCTYPE html>
<html>
  <head>
    <title><?php echo TITLE ?></title>
  </head>

  <body>

    <h5>Hi! I am writing below questions from an <?php echo $assosiativeArray?> </h5>
    <h5>My name is : <?php echo $assosiativeArray[name] ?></h5>

    <h5>Surname is : <?php echo $assosiativeArray[surname] ?></h5>

    <h5>I am  : <?php echo $assosiativeArray[age] ?> years old</h5>

    <h5>I am  living in : <?php echo $assosiativeArray[city] . "-" . $assosiativeArray[state]?></h5>

    <footer>
      <h5><?php echo date('Y');?></h5>
    </footer>
  </body>
</html>
