<?php
    //1. array_count_values. Дан массив с элементами 'a', 'b', 'c', 'b', 'a'. Подсчитайте сколько раз встречается каждая из букв.
    $arr = ['a', 'b', 'c', 'b', 'a'];
    $ans = [];
    foreach ($arr as $k) {
        if (isset($ans[$k])) {
            $ans[$k]++;
        } else {
            $ans[$k] = 1;
        }
    }
    echo "1. array_count_values. Дан массив с элементами 'a', 'b', 'c', 'b', 'a'. Подсчитайте сколько раз встречается каждая из букв. <br>";
    print_r($ans);
    echo "<br><br>";
    // $count = array_count_values($arr);
    // print_r($count);

    //15. array_shift, array_pop, array_unshift, array_push. Дан массив с элементами 1, 2, 3, 4, 5. Добавьте ему в начало элемент 0, а в конец - элемент 6.
    $arr = [1, 2, 3, 4, 5];
    array_unshift($arr, 0);
    array_push($arr, 6);
    echo "15. array_shift, array_pop, array_unshift, array_push. Дан массив с элементами 1, 2, 3, 4, 5. Добавьте ему в начало элемент 0, а в конец - элемент 6. <br>";
    print_r($arr);
    echo "<br><br>";

    //47. Двумерный массив. С помощью двух циклов создайте массив [[1, 2, 3], [4, 5, 6], [7, 8, 9]].
    $arr = [];
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            $arr[$i][$j] = 1 + 3* $i + $j;
        }
    }
    echo "47. Двумерный массив. С помощью двух циклов создайте массив [[1, 2, 3], [4, 5, 6], [7, 8, 9]]. <br>";
    print_r($arr);
?>