<?php
require("db.php");

$id = $_GET['id'];

$sql = "DELETE FROM `board` WHERE id = ?";

$cnt = query($con, $sql, [$id]);

if ($cnt == 1) {
    msgAndGo("삭제완료", "/gallery.php");
} else {
    sendJsonResponse('DB 등록중 오류 발생', false);
}

