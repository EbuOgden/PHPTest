<?php

require "layout.php";

title("Abstract");

abstract class Animal{

    public $name;
    public $color;

    public function describe(){
      return $this->name. ' is : ' . $this->color . "<br>";
    }

    public function __construct(){
      echo "Constructor called from Animal!<br>";
    }

    public function __destruct(){
      echo "Destructor called from Animal!<br>";
    }

    abstract public function makeSound();
}

class Duck extends Animal{
  public function describe(){
    return "I am a Duck!<br>";
    //return parent::describe();
  }

  public function makeSound(){
    return "Quack";
  }
}

class Dog extends Animal{
  public function describe(){
    return "I am a Dog!<br>";
    return parent::describe();
  }

  public function makeSound(){
    return "Bark";
  }
}

class A{

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
}

class B extends A {

}

class C extends A {

}

$duck = new Duck();
$duck->name = "Donald";
$duck->color = "White";

echo $duck->describe();

echo $duck->makeSound();

$dog = new Dog();
$dog->name = "Dog";
$dog->color = "Brown";

echo $dog->describe();

// $b = new B();
// $b->name = "B";
// $b->color = "B Color";
// echo $b->describe();
//
// $c = new C();
// $c->name = "C";
// $c->color = "C Color";
// echo $c->describe();

?>

<!DOCTYPE html>
<html>
  <head>
    <title><?php echo TITLE ?></title>
  </head>

  <body>

  </body>
</html>
