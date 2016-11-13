<?php
  define("TITLE", "Multi Dimensional Arrays");

  $multiDimensional = array(
                        array(
                          name => "Ebubekir",
                          age =>  22,
                          city => "San Jose"
                        ),
                        array(
                          name => "Jahrein",
                          age => 25,
                          city => "Santa Clara"
                        ),
                        array(
                          name => "Rauf",
                          age => 31,
                          city => "Kars"
                        )
                      );

?>

<!DOCTYPE HTML>
<html>
  <head>
    <title><?php echo TITLE?></title>

  </head>

  <body>

    <h5>User 1</h5>

    <?php
    $counter = 1;
    foreach($multiDimensional as $a){

                      echo "<h5> Our " . $counter . ". user is : " . $a[name] . " " . $a[age] . " years old. Lives in " . $a[city] . ".</h5>";
                      $counter++;
                        };
    ?>
    <ul>
      <li>asdfasijfas</li>
    </ul>
  </body>
</html>
