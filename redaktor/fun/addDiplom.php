<?php
include $_SERVER["DOCUMENT_ROOT"] . "/redaktor/case/Diplom.php";
$news = new Diplom();

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

$uploaddir = $_SERVER["DOCUMENT_ROOT"] . "/images/diplom/";
$ex = explode('/', $_FILES["images"]["type"]);
$type = $ex[1];
$name = generateRandomString() . '.' . $type;
$uploadfile = $uploaddir . $name;

move_uploaded_file($_FILES["images"]['tmp_name'], $uploadfile);

$order_by = $_POST["order_by"];
$query = "INSERT INTO `diplom`(`name`, `status`, `order_by`) VALUES ('$name','1','$order_by');";
$news->updateCases($query);

header("Location: " . $_SERVER["HTTP_REFERER"]);