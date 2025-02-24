<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="#" method="get">
        <label> 1.
            <textarea name="text" id="text" required></textarea>
            <button type="submit">Отправить</button>
        </label>
    </form>
    <p>Ответ:</p>
    <?php
        function Uppercase(&$arr){
            foreach ($arr as $k => &$v) {
                if ($k % 2 == 1){
                    $v = mb_convert_case($v, MB_CASE_UPPER);
                } else continue;
            }
            print_r($arr);
        }
        if (isset($_GET["text"])) {
            $arr = explode(" ", $_GET["text"]);
            Uppercase($arr);
        }
    ?>
</body>

</html>