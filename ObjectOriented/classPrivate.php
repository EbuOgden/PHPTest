<?php

require "layout.php";

title("Class Private");
class User{
  public function __construct(){
    echo "Constructor Called!<br>";
  }

  public function login($username, $password){
    $this->authenticate_user($username, $password);
  }

  private function authenticate_user($username, $password){
    echo $username . " + " . $password . "<br>";

  }

  public function __destruct(){
    echo "Destructor Called!";
  }
}

$newUser = new User();

$newUser->login("S", "B")
?>

<!DOCTYPE html>
<html>
  <head>
    <title><?php echo TITLE ?></title>
  </head>
</html>
