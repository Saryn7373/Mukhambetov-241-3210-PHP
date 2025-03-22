<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <label>Укажите дату рождения<input name="birth-date" type="date"></label>
        <button type = "submit">Отправить</button>
    </form>

</body>
</html>

<?php
        if (!isset($_COOKIE['birth-date']) && isset($_POST['birth-date'])) {
            setcookie('birth-date', $_POST['birth-date'], time() + 3600, '/');
        } else {
            $birth = new DateTime($_COOKIE['birth-date']);
            $today = new DateTime();
            $today = $today->format('Y-m-d');
            $today = new DateTime($today);
            $year = $today->format('Y');
            $birth->setDate($year, $birth->format('m'), $birth->format('d'));


            
            if ($birth < $today) {
                $birth = $birth->add(new DateInterval('P1Y'));
                $dif = $today->diff($birth);
                echo "Ваше день рождения через ". $dif->days ." дней";
            } else if ($birth > $today) {
                $dif = $birth->diff($today);
                echo "Ваше день рождения через ". $dif->days ." дней";
            } else {
                echo 'С днем рождения!!';
            }
        }
    ?>

