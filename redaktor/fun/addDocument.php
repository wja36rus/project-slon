<?php
$uploaddir = $_SERVER["DOCUMENT_ROOT"] . "/download.pdf";
$uploadfile = $uploaddir;

move_uploaded_file($_FILES["files"]['tmp_name'], $uploadfile);

header("Location: " . $_SERVER["HTTP_REFERER"]);