<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Авторизация</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<div class="w-100">
    <div class="w-100 h-100 d-flex align-items-center position-absolute">
        <form class="m-auto text-center" action="fun/auth.php" method="post">
            <input  class="form-control mb-2" type="password" name="password" placeholder="Пароль">
            <input type="submit" class="btn btn-success " value="ВОЙТИ">
        </form>
    </div>
</div>

</html>