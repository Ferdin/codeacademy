<?php

$connect = new mysqli("localhost", "root", "root", "codeac");

$output = '';

$param = "%{$_POST['search']}%";

$sql = $connect->prepare("SELECT * FROM course WHERE course_title LIKE ?");

$sql->bind_param("s",$param);

$sql->execute();

$result = $sql->get_result();

if($result->num_rows === 0) exit('No rows');

while($row = $result->fetch_assoc()) {
    $output.= "<a href='remove-page.php?id=".$row["course_id"]."'>".$row["course_title"]."</a> <br/>";
  }
  echo $output;

$sql->close();

 ?>
