<?php
include $_SERVER["DOCUMENT_ROOT"]."/redaktor/case/Cases.php";

$type = $_GET["type"];
$adm = $_GET["adm"];
$case = new Cases($type, $adm);