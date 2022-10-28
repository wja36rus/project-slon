<?php
include $_SERVER["DOCUMENT_ROOT"]."/redaktor/case/News.php";
$news = new News(false, true);

foreach ($_POST as $key => $value) {
    $ex = explode('-',$key);
    if ($ex[0] !== "id") {
        $query = "UPDATE `news` SET `{$ex[0]}`='$value' WHERE `id` = '{$ex[1]}';";

        $news->updateCases($query);
    }
}

header("Location: ".$_SERVER["HTTP_REFERER"]);