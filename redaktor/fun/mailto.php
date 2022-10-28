<?php
// несколько получателей
$to  = 'wja36rus@yandex.ru';

// тема письма
$subject = 'Сообщение с сайта pravo-slonagency.ru';

// текст письма
$message = '
<html>
<head>
  <title>Сообщение с сайта pravo-slonagency.ru</title>
</head>
<body>
  <p>Из Формы на сайте были получены данные:</p>
  <div><span>Имя: </span><span>'.$_POST["name"].'</span></div>
  <div><span>Телефон: </span><span>'.$_POST["phone"].'</span></div>
  <div><span>Почта: </span><span>'.$_POST["email"].'</span></div>
</body>
</html>
';

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$headers .= 'To: wja36rus@yandex.ru';

echo mail($to, $subject, $message, $headers);