<?php
  require ('database.php');

  $database = new Database();

  $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

  if($post['submit']){
    $title = $post['title'];
    $body = $post['body'];
    $id = $post['id'];

    $insert = "UPDATE posts SET title = :title, body = :body WHERE id = :id";

    $database->query($insert);

    $database->bind(':title', $title);

    $database->bind(':body', $body);

    $database->bind(':id', $id);

    $database->execute();

    header('Location: http://localhost:8888/databaseIndex');
  }
?>
