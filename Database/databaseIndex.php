<?php
  require ('database.php');

  $database = new Database();

  $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

  if($post['submit']){
    $title = $post['title'];
    $body = $post['body'];

    $insert = "INSERT INTO posts (title, body) VALUES(:title, :body)";

    $database->query($insert);

    $database->bind(':title', $title);

    $database->bind(':body', $body);

    $database->execute();

    if($database->lastInsertId()){
      echo "<p>Post Added</p>";
    }
  }

  $getAll = "SELECT * FROM posts";

  $database->query($getAll);

  $rows = $database->resultset();

?>

<!DOCTYPE html>
<html>
<head>
  <title>Database</title>
</head>

<body>

  <center>
      <h1>Add Post</h1>


      <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
        <label>Post Title</label>
        <input type="text" name="title" placeholder="Add a Title..."><br><br>
        <label>Post Body</label>
        <textarea name="body"></textarea><br><br>
        <input type="submit" name="submit" value="Submit">
      </form>

  </center>

  <center>

    <h1>Update Post</h1>
    <form method="POST" action="/update">
      <label>Post ID</label>
      <input type="text" name="id" placeholder="Add a ID..."><br><br>
      <label>Post Title</label>
      <input type="text" name="title" placeholder="Add a Title..."><br><br>
      <label>Post Body</label>
      <textarea name="body"></textarea><br><br>
      <input type="submit" name="submit" value="Submit">
    </form>
  </center>

  <h1 style="text-align:center;">Posts</h1>

  <?php foreach($rows as $row) : ?>
    <div>
      <h3 style="text-align:center;"><?php echo $row['title']; ?></h3>
      <p><?php echo $row['body']; ?></p>
      <center>

        <h1>Delete Post</h1>
        <form method="POST" action="/delete">
          <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
          <input type="submit" name="submit" value="Delete">
        </form>
      </center>

    </div>
  <?php endforeach; ?>
</body>
</html>
