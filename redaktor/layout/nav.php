<?php
function nav($page)
{
    $nav = [
        ["id" => 1, "title" => "Новости", "href" => "index.php"],
        ["id" => 2, "title" => "Случаи из практики", "href" => "case.php"],
        ["id" => 3, "title" => "Политика конфиденциальности", "href" => "politic.php"],
        ["id" => 4, "title" => "Дипломы", "href" => "diplom.php"],
        ["id" => 5, "title" => "Партнеры", "href" => "partners.php"],
    ];

    for ($i = 0; $i < count($nav); $i++) {
        if ($page == $nav[$i]["id"]) {
            if ($i != 0) {
                echo "<a href = '{$nav[$i]["href"]}' class='btn btn-success ms-2 active'>{$nav[$i]["title"]}</a>";
            } else {
                echo "<a href = '{$nav[$i]["href"]}' class='btn btn-success active'>{$nav[$i]["title"]}</a>";
            }
        } else {
            if ($i != 0) {
                echo "<a href = '{$nav[$i]["href"]}' class='btn btn-success ms-2'>{$nav[$i]["title"]}</a>";
            } else {
                echo "<a href = '{$nav[$i]["href"]}' class='btn btn-success'>{$nav[$i]["title"]}</a>";
            }
        }
    }

    echo "<a href = 'fun/exit.php' class='btn btn-danger ms-auto'>Выход</a>";

}


