<?php
$id = $_POST['id'];
$name = $_POST['name'];
$pw = $_POST['password'];

require ("db.php");

$sql = "INSERT INTO userss ( id, name, password) VALUES (?, ?, PASSWORD(?))";

$cnt = query($con, $sql, [$id, $name, $pw]);

if ($cnt == 0) {
    echo "회원가입이 실패했습니다.";
}else {
    msgAndGo("회원가입이 성공했습니다.", "/gallery.php");
}