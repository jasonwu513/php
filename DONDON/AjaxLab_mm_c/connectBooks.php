<?php
  $dsn="mysql:host=localhost;dbname=books;charset=utf8;";
  $user="root";
  $password="513513";
  $options=array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION); 
  $pdo = new PDO($dsn, $user, $password, $options);
?>