<?php
session_start();
include 'database.php';
if(!$pdo){ die("Error: Base de datos no configurada. Crea rift_hosting y tabla users."); }
$email=$_POST['email']??''; $pass=$_POST['pass']??'';
$stmt=$pdo->prepare("SELECT * FROM users WHERE email=?");
$stmt->execute([$email]); $u=$stmt->fetch();
if($u && password_verify($pass,$u['password'])){
  $_SESSION['user']=$u; header('Location: ../panel.html'); exit;
}else{ echo "<h3>Credenciales inválidas</h3><a href='../login.html'>Volver</a>"; }
?>