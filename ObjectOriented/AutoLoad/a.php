<?php

class A{ // final can not be inheritaed

  public $name;
  public $color;

  public function describe(){
    return $this->name. " is : " . $this->color . "<br>";
  }

  public function __construct(){
    echo "Constructor called from A!<br>";
  }

  public function __destruct(){
    echo "Destructor called from A!<br>";
  }

  function sayHi(){
    echo "Hello World!, from A";
  }
}

?>
