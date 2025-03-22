<?php
    session_start();
    echo '1. По заходу на страницу запишите в сессию текст \'test\'. Затем обновите страницу и выведите содержимое сессии на экран. </br>';
    if (!isset($_SESSION['text'])) {
        $_SESSION['text'] = 'test';
    } else {
        echo $_SESSION['text'];
    }
    echo '</br></br>';
?>