<?php

require "layout.php";

title("Set Get");

class Post{
    private $name;

    public function __set($name, $value){
      echo "Set called" .$name;
      $this->name = $value;
    }

    public function __get($name){
      echo "Get called " . $name;
    }
}

?>

<!DOCTYPE html>
<html>
  <head>
    <title><?php echo TITLE ?></title>
  </head>

  <body>
    <?php $newPost = new Post();
    $post->name = "Where is Walo?";

    echo "This post name is : " .$post->name;

    ?>

  </body>
</html>
