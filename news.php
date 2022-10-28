<?php
include $_SERVER["DOCUMENT_ROOT"] . "/redaktor/case/News.php";
$news = new News('all', true, $_GET["news"]);
$data = $news->getCases("all", true, $_GET["news"]);
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style/index.css">
    <link rel="icon" type="image/png" href="favicon.png"/>
    <title>СЛОН | Юридическое агентство | НОВОСТИ</title>
</head>
<body>
<header class="pt-1 pb-1">
    <div class="container header">
        <div class="d-flex">

            <div class="logo d-flex align-items-center">
                <a href="/">
                    <img class="logo-image" src="images/menu/logo.svg" alt="">
                </a>
                <div class="d-grid ms-2">
                    <p class="mb-0"><b>СЛОН</b></p>
                    <p class="mb-0">Юридическое агентство</p>
                </div>
            </div>

            <div class="d-grid ms-auto me-3 d-none1100">
                <div class="d-flex align-items-center">
                    <img class="anim-hover" src="images/menu/mobile.svg" alt="">
                    <a class="connect connect-hover ms-2" href="tel:+7 910 344 91 88">+7 910 344 91 88</a>
                </div>
                <div class="d-flex align-items-center">
                    <img class="anim-hover" src="images/menu/email.svg" alt="">
                    <a class="connect connect-hover ms-2"
                       href="mailto:mkharchenko_pro@mail.ru">mkharchenko_pro@mail.ru</a>
                </div>
            </div>

            <div class="d-grid ms-3 me-3 ms-auto1100 d-none550">
                <div class="d-flex align-items-center">
                    <p class="connect mb-0">ПН-ПТ: с 09:00 по 18:30</p>
                </div>
                <div class="d-flex align-items-center">
                    <div class="d-flex align-items-center">
                        <a class="connect view1100" href="tel:+7 910 344 91 88">
                            <img class="anim-hover" src="images/menu/mobile.svg" alt="">
                        </a>
                        <a class="connect view1100 ms-2" href="mailto:mkharchenko_pro@mail.ru">
                            <img class="anim-hover" src="images/menu/email.svg" alt="">
                        </a>
                        <a class="connect ms-2" href="mailto:mkharchenko_pro@mail.ru">
                            <img class="anim-hover" src="images/menu/telegramm.svg" alt="">
                        </a>
                        <a class="connect ms-2" href="mailto:mkharchenko_pro@mail.ru">
                            <img class="anim-hover" src="images/menu/whatsup.svg" alt="">
                        </a>
                    </div>
                </div>
            </div>

            <button class="btn-hovers btn-outline">Получить консультацию</button>

            <div class="burger">
                <img src="images/menu/burger-closed.svg" alt="">
            </div>
        </div>
    </div>
    <div class="container header">
        <nav>
            <a href="index.php" class="nav-item me-auto">Главная</a>
            <a href="index.php#about" class="nav-item me-auto">Обо мне</a>
            <a href="index.php#service" class="nav-item me-auto">Услуги</a>
            <a href="index.php#diplom" class="nav-item me-auto">Дипломы и сертификаты</a>
            <a href="index.php#cases" class="nav-item me-auto">Случаи из практики</a>
            <a href="index.php#news" class="nav-item me-auto">Новости</a>
            <a href="index.php#partner" class="nav-item me-auto">Клиенты и партнеры</a>
            <a href="index.php#form" class="nav-item">Контакты</a>
        </nav>
    </div>
    <div class="mobile-menu">
        <img class="close" src="images/menu/burger-opened.svg" alt="">
        <nav>
            <a href="index.php" class="nav-item me-auto mobile-item">Главная</a>
            <a href="index.php#about" class="nav-item me-auto mobile-item">Обо мне</a>
            <a href="index.php#service" class="nav-item me-auto mobile-item">Услуги</a>
            <a href="index.php#diplom" class="nav-item me-auto mobile-item">Дипломы и сертификаты</a>
            <a href="index.php#cases" class="nav-item me-auto mobile-item">Случаи из практики</a>
            <a href="index.php#news" class="nav-item me-auto mobile-item">Новости</a>
            <a href="index.php#partner" class="nav-item me-auto mobile-item">Клиенты и партнеры</a>
            <a href="index.php#form" class="nav-item">Контакты</a>
        </nav>
        <div class="d-grid ms-3 me-3 p-3">
            <div class="d-flex align-items-center">
                <p class="connect mb-0">ПН-ПТ: с 09:00 по 18:30</p>
            </div>
            <div class="d-flex align-items-center">
                <div class="d-flex align-items-center">
                    <a class="connect" href="tel:+7 910 344 91 88">
                        <img src="images/menu/mobile.svg" alt="">
                    </a>
                    <a class="connect ms-2" href="mailto:mkharchenko_pro@mail.ru">
                        <img src="images/menu/email.svg" alt="">
                    </a>
                    <a class="connect ms-2" href="mailto:mkharchenko_pro@mail.ru">
                        <img src="images/menu/telegramm.svg" alt="">
                    </a>
                    <a class="connect ms-2" href="mailto:mkharchenko_pro@mail.ru">
                        <img src="images/menu/whatsup.svg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<main>
    <div class="container pt-5 mt-5">
        <div class="pt-5">
            <h1><?=$data[0]["title"]?></h1>
            <p><?=$data[0]["text"]?></p>
        </div>
    </div>
</main>
<footer>
    <div class="container">
        <div class="d-flex align-items-start flex-wrap">
            <div class="footer ms-auto pt-5 pb-5">
                <h5>Индивидуальный предприниматель</h5>
                <h5>Харченко Марина Александровна</h5>
                <br>
                <h5>ОГРНИП 322366800023007</h5>
                <h5>ИНН 366215465540</h5>
            </div>
            <div class="footer ms-auto me-auto pt-5 pb-5">
                <h6>На связи с понедельника по пятницу</h6>
                <h6>с 9:00 до 18:30!</h6>
                <br>
                <h6>г. Воронеж, площадь Ленина, д. 3</h6>
                <h6>+7 910 344 91 88</h6>
                <h6>mkharchenko_pro@mail.ru</h6>
                <div class="d-flex pt-3">
                    <a href="" class="me-2"><img src="images/footer/vk.png" alt=""></a>
                    <a href="" class="me-2"><img src="images/footer/tg.png" alt=""></a>
                    <a href="" class="me-2"><img src="images/footer/wu.png" alt=""></a>
                </div>
            </div>
        </div>
        <div class="text-center">
            © Все права защищены
        </div>
    </div>
</footer>
<div class="out-form">
    <form action="#" class="inset-form d-grid">
        <img class="close-form" src="images/menu/burger-opened.svg" alt="">
        <input class="form-control mb-1" type="text" placeholder="Ваше имя">
        <input class="form-control mb-1" type="text" placeholder="Ваш телефон">
        <input class="form-control mb-1" type="text" placeholder="Ваш e-mail">
        <div class="d-flex align-items-center text-start">
            <input class="mt-2 mb-2 me-2" type="checkbox" checked>
            <small>согласен с правилами обработки персональных данных</small>
        </div>

        <button class="btn-hovers btn-white">Отправить</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="script/script.js"></script>
<script>
    $(document).ready(function () {
        
        $.ajax({
            type: "GET",
            url: "redaktor/case/fcases.php?type=notfull",
            dataType: "json",
            success: function (response) {
                $.map(response, function (elementOrValue, indexOrKey) {

                    const cont = '<div class="cases-card mb-5">'+
                    '<img class="w-100" src="images/cases/cases.jpg" alt="">'+
                        '<div class="cases-title">'+
                            elementOrValue.title+
                        '</div>'+
                        '<div class="cases-text">'+
                            '<p>'+
                                elementOrValue.subtitle+
                            '</p>'+
                        '</div>'+
                        '<a class="btn-hovers btn-cases mt-2">Читать дальше</a>'+
                    '</div>';

                    console.log(cont);
                    $('.cases-wrap').append(cont);
                });
            }
        });

        $.ajax({
            type: "GET",
            url: "redaktor/case/fnews.php?type=notfull",
            dataType: "json",
            success: function (response) {
                $.map(response, function (elementOrValue, indexOrKey) {

                    const cont = '<a class="card-href" href="news.php?news='+elementOrValue.id+'">'+
                        '<div class="blog-card">'+
                            '<img src="images/news/news.jpg" alt="" class="w-100">'+
                            '<p class="news-title">'+elementOrValue.title+'</p>'+
                            '<p class="news-text mb-0">'+
                                elementOrValue.text+
                            '</p>'+
                        '</div>'+
                    '</a>';
                    $('.news-wrap').append(cont);
                });
            }
        });

        $('#all-case').click(function (e) { 
            e.preventDefault();
            $('.cases-wrap').empty();
             $.ajax({
            type: "GET",
            url: "redaktor/case/fcases.php?type=all",
            dataType: "json",
            success: function (response) {
                $.map(response, function (elementOrValue, indexOrKey) {

                    const cont = '<div class="cases-card mb-5">'+
                    '<img class="w-100" src="images/cases/cases.jpg" alt="">'+
                        '<div class="cases-title">'+
                            elementOrValue.title+
                        '</div>'+
                        '<div class="cases-text">'+
                            '<p>'+
                                elementOrValue.subtitle+
                            '</p>'+
                        '</div>'+
                        '<a class="btn-hovers btn-cases mt-2">Читать дальше</a>'+
                    '</div>';

                
                    $('.cases-wrap').append(cont);
                });
            }
        });
        });

         $('#all-news').click(function (e) { 
            e.preventDefault();
            $('.news-wrap').empty();
             $.ajax({
            type: "GET",
            url: "redaktor/case/fnews.php?type=all",
            dataType: "json",
            success: function (response) {
                $.map(response, function (elementOrValue, indexOrKey) {

                    const cont = '<a class="card-href" href="">'+
                        '<div class="blog-card">'+
                            '<img src="images/news/news.jpg" alt="" class="w-100">'+
                            '<p class="news-title">'+elementOrValue.title+'</p>'+
                            '<p class="news-text mb-0">'+
                                elementOrValue.text+
                            '</p>'+
                        '</div>'+
                    '</a>';
                    $('.news-wrap').append(cont);
                });
            }
        });
        });
    });



</script>
</body>
</html>