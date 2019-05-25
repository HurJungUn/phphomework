<?php

$id = $_POST['id'];
$pw = $_POST['password'];

require("db.php");

$sql = "SELECT * FROM userss WHERE id = ? AND password = PASSWORD(?)";
$user = fetch($con, $sql, [$id, $pw]);

if ($user) {
    $_SESSION['user'] = $user;
    $_SESSION['name'] = $user->name;
    
    msgAndGo("로그인 성공", "/gallery.php");
}else{
    msgAndGo("로그인 실패", "/index.php");
}