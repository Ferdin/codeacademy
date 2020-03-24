<?php
include_once('../includes/connection.php');

  if(isset($_POST['title'],$_POST['url'],$_POST['category'],$_POST['description'])){
    $title = $_POST['title'];
    $url = $_POST['url'];
    $category = $_POST['category'];
    $description = $_POST['description'];

    if(empty($title) or empty($url) or empty($category) or empty($description)){
      $error = "All fields are required";
    }else{
      $query = $pdo->prepare('INSERT INTO course (course_title,course_url,course_type,course_description) VALUES (?,?,?,?)');
      $query->bindValue(1, $title);
      $query->bindValue(2, $url);
      $query->bindValue(3, $category);
      $query->bindValue(4, $description);
      $query->execute();

      header('Location: index.php');
    }
  }

 ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Code Academy</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand cd-brand-size">
        Code <span class="cd-green">Academy</span>
      </a>
    </nav>
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand">
        <i class="fas fa-cog"></i> <strong>Dashboard</strong>
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../index.php">Visit Page</a>
        </li>
      </ul>
    </nav>
    <hr>
    <div class="row">
      <div class="col-md-4">
        <div class="container p-3 my-3 border rounded" style="margin-left:5%; background-color:#22a44b">
          <center><i class="fas fa-cog"></i> Dashboard</center>
        </div>
        <div class="container p-3 my-3 border rounded" style="margin-left:5%;">
          <a href="add.php">Add Video</a>
          <hr>
          <a href="update.php">Update Video</a>
          <hr>
          <a href="remove.php">Remove Video</a>
        </div>
      </div>
      <div class="col-md-7">
          <div class="container p-3 my-3 border rounded">
            <h4>Add Video</h4>
            <?php if(isset($error)){?>
              <small style="color:#aa0000;"><?php echo $error ?></small>
              <br><br>
            <?php } ?>
            <form action="add.php" method="post">
              <div class="form-group">
                <input type="text" name="title" class="form-control" placeholder="Enter the title of the video">
              </div>
              <div class="form-group">
                <input type="text" name="url" class="form-control" placeholder="Enter the url of the youtube video">
              </div>
              <div class="form-group">
                <select name="category" class="form-control">
                  <option name="php">PHP 7</option>
                  <option name="bs">Bootstrap</option>
                  <option name="js">JavaScript</option>
                  <option name="html">HTML 5</option>
                  <option name="css">CSS</option>
                  <option name="react">React JS</option>
                </select>
              </div>
              <div class="form-group">
                <textarea name="description" rows="8" cols="80" placeholder="Enter the description" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <center>
                  <button type="submit" name="submit" class="btn btn-primary">Add</button>
                </center>
              </div>
            </form>
          </div>
      </div>
    </div>
  </body>
</html>
