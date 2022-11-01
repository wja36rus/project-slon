<?php
session_start();
if (!$_SESSION["users_key"]) {
    header("Location: login.php");
}
include $_SERVER["DOCUMENT_ROOT"] . "/redaktor/case/News.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Редактор</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<div class="pt-2 pb-2 shadow">
    <div class="container ">
        <div class="d-flex align-items-center ">
            <?php
            include $_SERVER["DOCUMENT_ROOT"]."/redaktor/layout/nav.php";
            nav(3);
            ?>
        </div>
    </div>
</div>
<div class="container">
    <div class="card p-2 m-2">
        <h5>Политика конфиденциальности</h5>
        <form action="fun/addDocument.php" method="post" enctype="multipart/form-data">

            <div class="d-flex align-items-center mb-2">
                <h5 class="w-25">Изображение:</h5>
                <input class="form-control ms-2" name="files" type="file">
            </div>

            <input type="submit" class="btn btn-warning" value="Загрузить файл" accept="application/pdf">
        </form>
        <iframe height="900" src="../download.pdf" frameborder="0"></iframe>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</body>
</html>