<!DOCTYPE html>
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
            <h4>Update a Video</h4>
              <div class="form-group search-box">
                <input type="text" name="search_text" id="search_text"class="form-control" placeholder="Enter the title of the video for the update">
                <div id="result"></div>
              </div>
          </div>
      </div>
    </div>
  </body>
</html>

<script type="text/javascript">
  $(document).ready(function(){
    $('#search_text').keyup(function(){
      var txt = $(this).val();
      if(txt == ''){
        $('#result').html('');
      }
      else {
        $('#result').html('');
        $.ajax({
          url:'backend-search.php',
          method:'post',
          data:{search:txt},
          dataType:'text',
          success:function(data){
            $('#result').html(data);
          }
        });
      }
    });
  });
</script>
