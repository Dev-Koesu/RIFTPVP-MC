<?php
header('Content-Type: application/json');
session_start();
echo json_encode(['status'=>'online','node'=>'BR-1','ram'=>'3.2/6GB','players'=>8,'uptime'=>'99.9%']);
?>