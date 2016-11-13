<?php

require "layout.php";

title("Class");

class Circle{

  public $radius;

  function __construct($r){

    $this->radius = $r;
  }

  function calculateArea(){

    return 3.14 * ($this->radius ** 2);
  }
}

$radius = 5;
$circle = new Circle($radius);

echo "Your circle area is " . $circle->calculateArea() . "<br>";
?>

<!DOCTYPE html>
<html>
  <head>
    <title><?php echo TITLE ?></title>
  </head>

  <body>

  </body>
</html>
