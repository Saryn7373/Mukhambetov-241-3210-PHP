<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>241-3210 Мухамбетов</title>
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
            <form action="https://httpbin.org/post" method="post">
                <label>Имя пользователя<input name="name" type="text" maxlength="15" required></label>
                <label>Почта<input name="e-mail" type="email" required></label>
                <label>Тип обращения<select name="appealType" id="appealType">
                    <option value="complaint">Жалоба</option>
                    <option value="proposal">Предложение</option>
                    <option value="gratitude">Благодарность</option>
                </select></label>
                <label>Обращение<textarea name="appeal" id="appeal"></textarea></label>
                <fieldset><legend>Тип ответа</legend>
                    <label>СМС<input type="checkbox" name="SMS_response"></label>
                    <label>e-mail<input type="checkbox" name="e-mail_response"></label>
                </fieldset>
                <button type="submit">Отправить</button>
                <a href="second.php">2 страница</a>
            </form>
        </div>
    </main>
    <footer>
        <div class="container">
            <p>Собрать сайт из двух страниц.

1 страница: Сверстать форму обратной связи. Отправку формы осуществить на URL: https://httpbin.org/post. Добавить кнопку для перехода на 2 страницу.

2 страница: вывести на страницу результат работы функции get_headers. Загрузить код в удаленный репозиторий. Залить на хостинг.

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