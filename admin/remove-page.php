<?php

include_once('../includes/connection.php');

if(isset($_GET['id'])){
  $id =   $_GET['id'];
  $conn = new mysqli('localhost', 'root', 'root', 'codeac');
// Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  // sql to delete a record
  $sql = "DELETE FROM course WHERE course_id='".$id."'";

  if ($conn->query($sql) === TRUE) {
      header('Location: index.php');
  } else {
      echo "Error deleting record: " . $conn->error;
  }

  $conn->close();
  }
 ?>
