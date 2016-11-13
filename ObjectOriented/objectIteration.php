<?php

class User{
  public $user1 = "Mike";
  public $user2 = "john";
  public $user3 = "Shelly";


  protected $user4 = "Kelly";
  private $user5 = "Peter";

  public function a(){
    echo "SO SILLY";
  }

  public function iterateObj(){
    foreach($this as $key => $value){
      echo "$key is $value <br>";
    }
  }
}

$userA = new User();

foreach($userA as $key => $value){
  echo "$key is $value <br>";
}

echo "*****<br>";

$userA->iterateObj();

?>
