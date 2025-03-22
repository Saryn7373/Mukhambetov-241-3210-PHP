<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>4. Задачи на preg_match[_all] Задачи не всегда можно решить с помощью одной только регулярки. Может понадобится еще что-нибудь дописать на PHP (не всегда, но такое может быть). С помощью preg_match определите, что переданная строка является доменом 3-го уровня. Примеры доменов: hello.site.ru, hello.site.com, hello.my-site.com.</p>
    <form action="#" method="get">
        <label><input name="domain" type="text" placeholder="Введите домен"></label>
        <button>Отправить</button>
    </form>
</body>
</html>

<?php
    if (isset($_GET['domain'])) {
        $domain = $_GET['domain'];
        if (preg_match_all('/\./', $domain) === 2) {
            echo "$domain является доменом 3-го уровня";
        } else {
            echo "$domain НЕ является доменом 3-го уровня";
        }
    }
?>