<?php
include $_SERVER["DOCUMENT_ROOT"] . "/redaktor/case/News.php";
$news = new News(false, true);

$title = $_POST["title"];
$text = $_POST["text"];
$order_by = $_POST["order_by"];
$query = "INSERT INTO `news`(`title`, `text`, `status`, `order_by`) VALUES ('$title','$text','1','$order_by');";
$news->updateCases($query);


header("Location: " . $_SERVER["HTTP_REFERER"]);