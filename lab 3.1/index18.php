<p>18. Работа с переносом строки. Дан файл test.txt. Прочитайте его текст, получите массив его строк.</p>
<?php
    if (file_exists("test.txt")) {
        $test = file("test.txt");
        print_r($test) ;
    }
?>