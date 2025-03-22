<?php
    session_start();
    if (!(isset($_SESSION['time']) || isset($_SESSION['unix-time']))) {
        $_SESSION['time'] = 'Пользователь только зашел на страницу';
        $_SESSION['unix-time'] = time();
    } else {
        $_SESSION['time'] = time() - $_SESSION['unix-time'];
    }
    echo $_SESSION['time'];
?>