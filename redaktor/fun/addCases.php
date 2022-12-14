<?php
include $_SERVER["DOCUMENT_ROOT"] . "/redaktor/case/Cases.php";
$news = new Cases(false, true);

function generateRandomString($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$uploaddir = $_SERVER["DOCUMENT_ROOT"] . "/images/cases/";
$ex = explode('/', $_FILES["images"]["type"]);
$type = $ex[1];
$name = generateRandomString() . '.' . $type;
$uploadfile = $uploaddir . $name;

move_uploaded_file($_FILES["images"]['tmp_name'], $uploadfile);

$title = $_POST["title"];
$subtitle = $_POST["subtitle"];
$text = $_POST["text"];
$order_by = $_POST["order_by"];
$query = "INSERT INTO `cases`(`title`, `images`, `subtitle`, `text`, `status`, `order_by`) VALUES ('$title', '$name', '$subtitle','$text','1','$order_by');";

$news->updateCases($query);

header("Location: " . $_SERVER["HTTP_REFERER"]);