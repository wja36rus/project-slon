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

foreach ($_FILES as $key => $value) {
    if ($_FILES[$key]["size"] > 0) {
        $uploaddir = $_SERVER["DOCUMENT_ROOT"] . "/images/partners/";
        $ex = explode('/', $_FILES[$key]["type"]);
        $type = $ex[1];
        $name = generateRandomString() . '.' . $type;
        $uploadfile = $uploaddir . $name;

        move_uploaded_file($_FILES[$key]['tmp_name'], $uploadfile);

        $exp = explode('-',$key);
        $id = $exp[1];
        $query = "UPDATE `partner` SET `images`='$name' WHERE `id` = '{$id}';";
        $news->updateCases($query);
    }
}

foreach ($_POST as $key => $value) {
    $ex = explode('-',$key);
    if ($ex[0] !== "id") {
        $query = "UPDATE `partner` SET `{$ex[0]}`='$value' WHERE `id` = '{$ex[1]}';";

        $news->updateCases($query);
    }
}

header("Location: ".$_SERVER["HTTP_REFERER"]);