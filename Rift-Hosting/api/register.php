<?php
include 'database.php';
if(!$pdo){ die("Error: DB no configurada. Ver README.md"); }
$user=trim($_POST['user']??''); $email=trim($_POST['email']??''); $pass=$_POST['pass']??'';
if(!$user || !$email || !$pass){ die("Faltan datos"); }
$hash=password_hash($pass,PASSWORD_DEFAULT);
try{
  $stmt=$pdo->prepare("INSERT INTO users (username,email,password) VALUES (?,?,?)");
  $stmt->execute([$user,$email,$hash]);
  header('Location: ../login.html');
}catch(Exception $e){ echo "Error: ".$e->getMessage()." <a href='../register.html'>Volver</a>"; }
?>