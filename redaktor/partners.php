<?php
session_start();
if (!$_SESSION["users_key"]) {
    header("Location: login.php");
}
include $_SERVER["DOCUMENT_ROOT"] . "/redaktor/case/Partners.php";
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
            nav(5);
            ?>
        </div>
    </div>
</div>
<div class="container">
    <div class="card p-2 m-2">
        <h5>Добавить партнера</h5>
        <form action="fun/addPartner.php" method="post" enctype="multipart/form-data">


            <div class="d-flex align-items-center mb-2">
                <h5 class="w-25">Порядковый номер:</h5>
                <input class="form-control ms-2" name="order_by" type="number" min="1">
            </div>

            <div class="d-flex align-items-center mb-2">
                <h5 class="w-25">Название:</h5>
                <input class="form-control ms-2" name="name" type="text">
            </div>

            <div class="d-flex align-items-center mb-2">
                <h5 class="w-25">Ссылка:</h5>
                <input class="form-control ms-2" name="href" type="text">
            </div>

            <div class="d-flex align-items-center mb-2">
                <h5 class="w-25">Изображение:</h5>
                <input class="form-control ms-2" name="images" type="file" accept="image/jpeg">
            </div>

            <input type="submit" class="btn btn-warning" value="Добавить партнера">
        </form>
    </div>
    <form action="fun/savePartner.php" method="post" enctype="multipart/form-data">
        <input type="submit" value="Сохранить" class="btn btn-primary">
        <div class="d-flex align-items-center flex-wrap">
            <?php
            $news = new Partners();
            $data = $news->getCases(true);

            for ($is = 0; $is < count($data); $is++):
                ?>
                <div class="card p-2 m-2" style="width: 48.5%; height: 35rem">

                    <div class="d-flex align-items-center mb-2">
                        <h5 class="w-25">ID:</h5>
                        <input class="form-control ms-2" name="id-<?= $data[$is]["id"] ?>" type="text"
                               value="<?= $data[$is]["id"] ?>">
                    </div>

                    <div class="d-flex align-items-center mb-2">
                        <h5 class="w-25">Номер по порядку:</h5>
                        <input class="form-control ms-2" name="order_by-<?= $data[$is]["id"] ?>" type="number"
                               value="<?= $data[$is]["order_by"] ?>">
                    </div>

                    <div class="d-flex align-items-center mb-2">
                        <h5 class="w-25">Название :</h5>
                        <input class="form-control ms-2" name="name-<?= $data[$is]["id"] ?>" type="text"
                               value="<?= $data[$is]["name"] ?>">
                    </div>

                    <div class="d-flex align-items-center mb-2">
                        <h5 class="w-25">Ссылка :</h5>
                        <input class="form-control ms-2" name="href-<?= $data[$is]["id"] ?>" type="text"
                               value="<?= $data[$is]["href"] ?>">
                    </div>

                    <div class="d-flex align-items-center mb-2">
                        <h5 class="w-25">Статус:</h5>
                        <select class="form-select" name="status-<?= $data[$is]["id"] ?>">
                            <?php
                            if ($data[$is]["status"]) {
                                echo '<option value="1" selected>Активен</option>
                        <option value="0">Не активен</option>';
                            } else {
                                echo '<option value="1">Активен</option>
                        <option value="0" selected>Не активен</option>';
                            }
                            ?>

                        </select>
                    </div>

                    <div class="d-flex align-items-center mb-2">
                        <h5 class="w-25">Картинка:</h5>
                        <div class="d-block">
                            <input class="form-control ms-2 mb-2" name="images-<?= $data[$is]["id"] ?>" type="file" accept="image/jpeg"/>
                            <div class="d-grid">
                                <img style="height: 220px;" class="mb-2" src="../images/partners/<?= $data[$is]["images"] ?>"
                                     alt="">
                                <p><?= $data[$is]["images"] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</body>
</html>