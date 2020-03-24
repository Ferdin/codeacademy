<?php
ini_set("display_errors","1");
error_reporting(E_ALL);

include_once('../includes/connection.php');
include_once('../includes/course.php');

$course = new Course;
if(isset($_GET['id'])){
  $id =   $_GET['id'];
  $data = $course->fetch_data($id);
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
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript">
      function update_query() {
        var title = document.getElementById('title').value;
        var url = document.getElementById('url').value;
        var type = document.getElementById('category').value;
        var desc = document.getElementById('desc').value;
        var course_id = document.getElementById('course_id').value;
              $.ajax({
                type:"post",
                url: "update_complete.php",
                data:'title='+title+'&url='+url+'&type='+type+'&desc='+desc+'&course_id='+course_id,
                cache:false,
                submit:true,
                success: function(html){
                  $('#msg').html(html);
                }
              });

        return false;
      }
    </script>
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
            <h4>Update Video</h4>
            <?php if(isset($error)){?>
              <small style="color:#aa0000;"><?php echo $error ?></small>
              <br><br>
            <?php } ?>
            <form action="update-page.php" method="post">
              <input type="hidden" id="course_id" name="course_id" value="<?php echo $data['course_id']; ?>">
              <div class="form-group">
                <input type="text" id="title" name="title" class="form-control" value="<?php echo $data['course_title']; ?>" placeholder="Enter the title of the video">
              </div>
              <div class="form-group">
                <input type="text" id="url" name="url" class="form-control" value="<?php echo $data['course_url']; ?>" placeholder="Enter the url of the youtube video">
              </div>
              <div class="form-group">
                <select name="category" class="form-control" id="category">

                  <option name="php">PHP 7</option>
                  <option name="bs">Bootstrap</option>
                  <option name="js">JavaScript</option>
                  <option name="html">HTML 5</option>
                  <option name="css">CSS</option>
                  <option name="react">React JS</option>
                </select>
              </div>
              <div class="form-group">
                <textarea name="description" id="desc" rows="8" cols="80" placeholder="Enter the description" class="form-control">
                  <?php echo $data['course_description']; ?>
                </textarea>
              </div>
              <div class="form-group">
                <center>
                  <button type="submit" name="submit" class="btn btn-primary" onclick="return update_query()">Update</button>
                </center>
              </div>
            </form>
            <p id="msg"></p>
          </div>
      </div>
    </div>
  </body>
</html>
<?php } ?>
