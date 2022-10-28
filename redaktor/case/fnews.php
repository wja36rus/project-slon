<?php
include $_SERVER["DOCUMENT_ROOT"]."/redaktor/case/News.php";

$type = $_GET["type"];
$adm = $_GET["adm"];
$case = new News($type, $adm);