<?php
session_start();
if (!$_SESSION["users_key"]) {
    header("Location: login.php");
}
include $_SERVER["DOCUMENT_ROOT"] . "/redaktor/case/Cases.php";
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
            <a href="index.php" class="btn btn-success">Новости</a>
            <a href="case.php" class="btn btn-success ms-2 active">Случаи из практики</a>
            <a href="fun/exit.php" class="btn btn-danger ms-auto">Выход</a>
        </div>
    </div>
</div>
<div class="container">
    <div class="card p-2 m-2">
        <h5>Добавить новость</h5>
        <form action="fun/addCases.php" method="post">
            <div class="d-flex align-items-center mb-2">
                <h5 class="w-25">Заголовок:</h5>
                <input class="form-control ms-2" name="title" type="text">
            </div>

            <div class="d-flex align-items-center mb-2">
                <h5 class="w-25">Подзаголовок:</h5>
                <input class="form-control ms-2" name="subtitle" type="text">
            </div>

            <div class="d-flex align-items-center mb-2">
                <h5 class="w-25">Текст:</h5>
                <textarea class="form-control ms-2" name="text"></textarea>
            </div>

            <div class="d-flex align-items-center mb-2">
                <h5 class="w-25">Порядковый номер:</h5>
                <input class="form-control ms-2" name="order_by" type="number" min="1">
            </div>
            <input type="submit" class="btn btn-warning" value="Добавить случай">
        </form>
    </div>
    <form action="fun/saveCases.php" method="post">
        <input type="submit" value="Сохранить" class="btn btn-primary">
        <?php
        $news = new Cases('all', true);
        $data = $news->getCases("all", true);

        for ($is = 0; $is < count($data); $is++):
            ?>
            <div class="card p-2 m-2">

                <div class="d-flex align-items-center mb-2">
                    <h5 class="w-25">ID:</h5>
                    <input class="form-control ms-2"  name="id-<?= $data[$is]["id"] ?>" type="text" value="<?= $data[$is]["id"] ?>">
                </div>

                <div class="d-flex align-items-center mb-2">
                    <h5 class="w-25">Заголовок:</h5>
                    <input class="form-control ms-2"  name="title-<?= $data[$is]["id"] ?>" type="text" value="<?= $data[$is]["title"] ?>">
                </div>

                <div class="d-flex align-items-center mb-2">
                    <h5 class="w-25">Подзаголовок:</h5>
                    <input class="form-control ms-2"  name="title-<?= $data[$is]["id"] ?>" type="text" value="<?= $data[$is]["subtitle"] ?>">
                </div>

                <div class="d-flex align-items-center mb-2">
                    <h5 class="w-25">Текст:</h5>
                    <textarea class="form-control ms-2" name="text-<?= $data[$is]["id"]?>"><?= $data[$is]["text"] ?></textarea>
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
            </div>
        <?php endfor; ?>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</body>
</html>