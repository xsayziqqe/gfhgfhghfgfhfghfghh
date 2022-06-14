<?php
 if (isset($_POST["name"]) && isset($_POST["mail"])) {
    $name = $_POST["name"];
    $mail = $_POST["mail"];

   if (mail('pankich99@mail.ru',
            'Новое письмо',
            'Вы успешно отправили письмо'."\n".
            'Вы ввели имя'.$name."\n".
            'Вы ввели почту'.$mail."\n".

   )) {
    each("Успешно отправлено");
    else {
        each("Ошибка"); 
    }
   }

 }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>php-form</title>
</head>
<body>
<form method="POST">
    <input type="text" name="name" placeholder="Имя">
    <input type="mail" name="mail" placeholder="Почта">
    <label for="message"></label>
    <br>
    <textarea name="message" cols="30" rows="5"></textarea>
    <input type="submit" value="ОТПРАВИТЬ">

</form>
</body>
</html>