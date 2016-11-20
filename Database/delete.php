<?php
  require ('database.php');

  $database = new Database();

  if($_POST['submit']){
    $id = $_POST['delete_id'];

    $insert = "DELETE FROM posts WHERE id = :id";

    $database->query($insert);

    $database->bind(':id', $id);

    $database->execute();

    header('Location: http://localhost:8888/databaseIndex');
  }
?>
