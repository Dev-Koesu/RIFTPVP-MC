<?php
$host="localhost"; $db="rift_hosting"; $user="root"; $pass="";
try{
  $pdo=new PDO("mysql:host=$host;dbname=$db",$user,$pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  // No rompe el front si no hay DB
  $pdo=null;
}
?>