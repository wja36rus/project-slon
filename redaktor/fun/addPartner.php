<?php
include $_SERVER["DOCUMENT_ROOT"] . "/redaktor/case/Partners.php";
$news = new Partners();

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

$uploaddir = $_SERVER["DOCUMENT_ROOT"] . "/images/partners/";
$ex = explode('/', $_FILES["images"]["type"]);
$type = $ex[1];
$images = generateRandomString() . '.' . $type;
$uploadfile = $uploaddir . $images;

move_uploaded_file($_FILES["images"]['tmp_name'], $uploadfile);

$order_by = $_POST["order_by"];
$name = $_POST["name"];
$href = $_POST["href"];
$query = "INSERT INTO `partner`(`name`, `href`, `images` ,`status`, `order_by`) VALUES ('$name','$href','$images','1','$order_by');";
$news->updateCases($query);

header("Location: " . $_SERVER["HTTP_REFERER"]);