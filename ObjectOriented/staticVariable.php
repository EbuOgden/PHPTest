<?php
require "layout.php";

title("Static Variable");

class Counted{

  public static $count = 0;

  function __construct(){
    self::$count++;
  }

  function __destruct(){
    self::$count--;
  }
}

function makeObj(){
  $count = new Counted();
  echo "In scope : " . Counted::$count . "<br>";
}

makeObj();
makeObj();
makeObj();

echo "Out of function : " . Counted::$count. "<br>";

$count1 = new Counted();
echo "Out of function : " . Counted::$count. "<br>";

$count2 = new Counted();
echo "Out of function : " . Counted::$count. "<br>";

$count3 = new Counted();
echo "Out of function : " . Counted::$count. "<br>";

unset($count3); // FREE MEMORY

echo "Out of function : " . Counted::$count. "<br>";


?>

<!DOCTYPE html>
<html>
  <head>
    <title><?php echo TITLE ?></title>
  </head>
</html>
