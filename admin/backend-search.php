<?php
try {
  $connect = new mysqli("localhost", "root", "root", "codeac");
  $connect->set_charset("utf8mb4");
}catch(Exception $e){
  error_log($e->getMessage());
  exit('Error connecting to database');
}

$output = '';


$param = "%{$_POST['search']}%";
$sql = $connect->prepare("SELECT * FROM course WHERE course_title LIKE ?");

$sql->bind_param("s",$param);

$sql->execute();

$result = $sql->get_result();

if($result->num_rows === 0) exit('No matches');

while($row = $result->fetch_assoc()) {

  $output.= "<a href='update-page.php?id=".$row["course_id"]."'>".$row["course_title"]."</a> <br/>";

}
echo $output;

$sql->close();
 ?>
