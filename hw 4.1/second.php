<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="container">
            <img src="public\logo.png" alt="logo" class="logo">
            <p class="task">4.1. Домашняя работа: Feedback Form.</p>
        </div>
    </header>
    <main>
        <div class="container">
            <textarea rows="13" cols="50" name="get_headers" id="get_headers" readonly>
                    <?php
                    $header = get_headers('https://httpbin.org/post');
                    print_r($header);
                    ?>
            </textarea>
        </div>
    </main>
    <footer>
        <div class="container">
            <p>Собрать сайт из двух страниц.

                1 страница: Сверстать форму обратной связи. Отправку формы осуществить на URL: https://httpbin.org/post.
                Добавить кнопку для перехода на 2 страницу.

                2 страница: вывести на страницу результат работы функции get_headers. Загрузить код в удаленный
                репозиторий. Залить на хостинг.

                Дано:

                Header = слева логотип МосПолитеха, по центру название работы.

                Footer = задание для самостоятельно работы (без описания).

                Main 1{

                Имя пользователя

                e-mail пользователя

                Тип обращения (жалоба, предложение, благодарность)

                Текст обращения

                Вариант ответа(смс, e-mail) (checkbox)

                Кнопка отправить

                Ссылка на 2 страницу

                }

                Main 2{

                Результат работы функции get_headers вывести в textarea

                }</p>
        </div>
    </footer>
</body>

</html>