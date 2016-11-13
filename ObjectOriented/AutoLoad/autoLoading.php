<?php

spl_autoload_register(function($class_name){ // Calling all php files in current directory
  echo $class_name . "<br>";
  include $class_name. '.php';
});

$a = new A();
$a->describe();

$b = new B();
$b->name = "B";
$b->color = "B Color";
echo $b->describe();

$b->sayHi();

?>
