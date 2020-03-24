<?php

class Course{

  public function fetch_all(){
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM course");
    $query->execute();

    return $query->fetchAll();
  }

  public function fetch_data($course_id){
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM course WHERE course_id=?");
    $query->bindValue(1, $course_id);
    $query->execute();

    return $query->fetch();
  }

}

 ?>
