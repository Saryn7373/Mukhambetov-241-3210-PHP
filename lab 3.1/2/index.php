<p>2. Запись в файл. Пусть в корне вашего сайта лежит файл test.txt. Запишите в него текст '12345'.</p>
<?php
    if (file_exists('../test.txt')) {
        file_put_contents("../test.txt", "\n12345", FILE_APPEND);
        echo file_get_contents("../test.txt");
    }
?>