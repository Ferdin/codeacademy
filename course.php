<?php

// Get course type.

//Show video using the url

if(isset($_GET['course_type'])){
    $course_type = $_GET['course_type'];
    $conn = new mysqli('localhost', 'root', 'root', 'codeac');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM course WHERE course_type='".$course_type."'";
    $result = $conn->query($sql);
    ?>
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
    <?php

    if ($result->num_rows > 0) {
        // output data of each row
        echo "<center><h3>".$course_type." Tutorials</h3><center>";
        while($row = $result->fetch_assoc()) {
            //echo  $row["course_url"]. "<br>";
            //echo "<object width='425' height='350' data='".$row["course_url"]."' type='application/x-shockwave-flash'><param name='src' value='".$row["course_url"]."' /></object>";
            //echo "<object width='425' height='350' data='http://www.youtube.com/v/Ahg6qcgoay4' type='application/x-shockwave-flash'><param name='src' value='http://www.youtube.com/v/Ahg6qcgoay4' /></object>";

            echo "<div class='container p-3 my-3 bg-dark text-white'>";
            echo "<h4>".$row['course_title']."</h4>";
            echo "<iframe width='480' height='315' src='".$row['course_url']."'></iframe>";
            echo "<div>".$row['course_description']."</div>";
            echo "</div>";
        }
    } else {
      echo "<center><h3>".$course_type." Tutorials</h3><center>";
      echo "<div class='container p-3 my-3 bg-dark text-white'>";
      echo "These tutorials are comming soon. Brace yourself.";
      echo "</div>";
    }
    $conn->close();
}
 ?>


   </body>
 </html>
