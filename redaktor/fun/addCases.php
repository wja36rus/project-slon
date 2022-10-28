<?php
include $_SERVER["DOCUMENT_ROOT"] . "/redaktor/case/Cases.php";
$news = new Cases(false, true);

$title = $_POST["title"];
$subtitle = $_POST["subtitle"];
$text = $_POST["text"];
$order_by = $_POST["order_by"];
$query = "INSERT INTO `cases`(`title`,`subtitle`, `text`, `status`, `order_by`) VALUES ('$title', '$subtitle','$text','1','$order_by');";

$news->updateCases($query);

header("Location: " . $_SERVER["HTTP_REFERER"]);