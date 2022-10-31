<?php
session_start();

//$key = '80158fc467eedfff03d6c1514fe0ea48';
$key = '1145a30ff80745b56fb0cecf65305017';

$p = $_POST["password"];

if ($key === md5($p)) {
    $_SESSION["users_key"] = $key;
}

header('Location: ../index.php');