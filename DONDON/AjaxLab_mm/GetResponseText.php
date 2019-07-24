<?php
try{
  require_once("connectBooks.php");

}catch(PDOException $e){
  echo $e->getMessage();
}
?>