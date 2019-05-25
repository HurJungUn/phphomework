<?php
require("db.php");

$id = $_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];

$sql = "UPDATE board SET `title` = ?, `content` = ? WHERE id = ?";

$cnt = query($con, $sql, [$title, $content, $id]);

if ($cnt == 1) {
    msgAndGo("수정완료", "/gallery.php");
} else {
    sendJsonResponse('DB 등록중 오류 발생', false,[$title, $content, $id]);
}

