<?php
require("db.php");

$title = $_POST['title'];
$content = $_POST['content'];
$writer = $_SESSION['user']->name;

if ($title == "" || $content == "" || $writer == "") {
    sendJsonResponse('필요한 값이 누락되었습니다.', false);
    exit;
}

$sql = "INSERT INTO board(`title`, `content`, `writer`) VALUES (?,?,?)";

$cnt = query($con, $sql, [$title, $content, $writer]);

if ($cnt == 1) {
    msgAndGo("등록완료", "/gallery.php");
} else {
    sendJsonResponse('DB 등록중 오류 발생', false);
}

