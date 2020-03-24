<?php

  $title = $_POST['title'];
  $url = $_POST['url'];
  $type = $_POST['type'];
  $desc = $_POST['desc'];
  $id = $_POST['course_id'];

  $conn = new mysqli("localhost", "root", "root", "codeac");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE course SET course_title='".$title."',course_type='".$type."',course_description='".$desc."',course_url='".$url."' WHERE course_id='".$id."'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

 ?>
