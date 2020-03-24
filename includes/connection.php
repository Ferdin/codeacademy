<?php

try{
  $pdo = new PDO('mysql:host=localhost;dbname=codeac','root','root');
}catch(PDOException $e){
  exit('Database error');
}

 ?>
