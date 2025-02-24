<?php
    $arr = ['1.txt', '2.txt', '3.txt'];
    $new = fopen('new.txt', 'w');
    $string = '';
    foreach ($arr as $k) {
        $v = file_get_contents($k);
        $string = $string.$v;
    }
    fwrite($new, $string);
    fclose($new);
    echo '3. Запись и чтение из файла. Пусть в корне вашего сайта лежат файлы 1.txt, 2.txt и 3.txt. Вручную сделайте массив с именами этих файлов. Переберите его циклом, прочитайте содержимое каждого из файлов, слейте его в одну строку и запишите в новый файл new.txt. Изначально этого файла не должно быть. <br><br>';
    echo "Ответ: ";
    echo file_get_contents('new.txt')
?>