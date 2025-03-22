<?php
    echo '8. На карманы в самой регулярке Дана строка aaa bcd xxx efg. Найдите строки, состоящие из одинаковых символов (это будет aaa xxx). </br>';
    $str = 'aaa bcd xxx efg';
    $pattern = '/^(.)\1*$/';
    $arr = preg_split('/\s/', $str);
    echo 'Ответ: ';
    foreach ($arr as $ans) {
        if (preg_match($pattern, $ans)) {
            echo "$ans ";
        }
    }
    echo '</br></br>';

    echo '15. На обратный слеш \. Дана строка a\a abc. Напишите регулярку, которая заменит строку a\a на !. </br>';
    $str = 'a\a abc';   
    $pattern = '/a\\\a/';
    $ans = preg_replace($pattern, '!', $str);
    echo "Ответ: $ans </br></br>";

    echo '20. На preg_replace_callback Дана строка с целыми числами. Найдите числа, стоящие в кавычках и увеличьте их в два раза. </br>';
    $str = '2aaa\'37\'bbb\'4\'';
    $pattern = '/\'\d+\'/';
    $ans = preg_replace_callback($pattern, function($matches) {
        $match = $matches[0];
        $match = preg_replace('/\'/', '', $match);
        $match *= 2;
        return "'$match'";
    }, $str);
    echo "Ответ: $ans </br></br>";

    echo '26. На позитивный и негативный просмотр С помощью позитивного и негативного просмотра найдите все строки по шаблону 3 буквы a, затем любая буква, но не b и поменяйте 3 буквы a на знак \'!\'. То есть из, к примеру, \'aaaw\' нужно сделать \'!w\', а \'aaab\' не поменяется.</br>';
    $str = 'aaaw aaab aaww aaaB';
    $pattern = '/a{3}(?!b)/';
    $ans = preg_replace($pattern, '!', $str);
    echo "Ответ: $ans";
?>