<?php

$connect = mysqli_connect("localhost", "root", "root", "codeac");

$output = '';

$sql = "SELECT * FROM course WHERE course_title LIKE '%".$_POST["search"]."%'";

$result = mysqli_query($connect, $sql);

if(mysqli_num_rows($result) > 0){

  while($row = mysqli_fetch_array($result)){
    $output.= "<a href='update-page.php?id=".$row["course_id"]."'>".$row["course_title"]."</a> <br/>";
  }
  echo $output;
}
else{
  echo 'Match Not Found';
}

 ?>
