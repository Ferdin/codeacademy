<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Code Academy</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/style.css">
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand cd-brand-size">
        Code <span class="cd-green">Academy</span>
      </a>
    </nav>

    <hr>
    <div class="container cd-font p-3 my-3 border">
      <p>
        Welcome to Code Academy, An open platform dedicated for improving your coding skills into next level.
        For now, we are offering a few courses on Web Development. Feel free to check it.
      </p>
    </div>
    <div class="container p-3 my-3 border">
      <div class="card-columns">
        <div class="card">
          <img class="card-img-top" src="assets/php7.png" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">PHP 7</h4>
            <p class="card-text">Learn PHP 7 from scratch</p>
            <a href="course.php?course_type=PHP 7" class="btn btn-primary">Get Started</a>
          </div>
        </div>
        <div class="card" >
          <img class="card-img-top" src="assets/html5.png" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">HTML 5</h4>
            <p class="card-text">Learn HTML 5 from scratch</p>
            <a href="course.php?course_type=HTML 5" class="btn btn-primary">Get Started</a>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="assets/css3.png" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">CSS 3</h4>
            <p class="card-text">Learn CSS 3 from scratch</p>
            <a href="course.php?course_type=CSS" class="btn btn-primary">Get Started</a>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="assets/bootstrap.png" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">Bootstrap</h4>
            <p class="card-text">Learn bootstrap from scratch</p>
            <a href="course.php?course_type=Bootstrap" class="btn btn-primary">Get Started</a>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="assets/js.png" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">JavaScript</h4>
            <p class="card-text">Learn JavaScript from scratch</p>
            <a href="course.php?course_type=JavaScript" class="btn btn-primary">Get Started</a>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="assets/react.png" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">React</h4>
            <p class="card-text">Learn React from scratch</p>
            <a href="course.php?course_type=React JS" class="btn btn-primary">Get Started</a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
