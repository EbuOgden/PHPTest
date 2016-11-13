<?php

spl_autoload_register(function($class_name){ // Calling all php files in directory
  include $class_name. '.php';
});

class B extends A {
  function sayHi(){
    echo "Hello World!, from B";
  }
}

?>
