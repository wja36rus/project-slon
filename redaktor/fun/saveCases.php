<?php
include $_SERVER["DOCUMENT_ROOT"]."/redaktor/case/Cases.php";
$news = new Cases(false, true);

foreach ($_POST as $key => $value) {
    $ex = explode('-',$key);
    if ($ex[0] !== "id") {
        $query = "UPDATE `cases` SET `{$ex[0]}`='$value' WHERE `id` = '{$ex[1]}';";

        $news->updateCases($query);
    }
}

header("Location: ".$_SERVER["HTTP_REFERER"]);