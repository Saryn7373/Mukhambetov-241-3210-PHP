<?php
    require('evalMath/evalmath.class.php');
    $calc = new EvalMath();
    header('Content-Type: application/json');
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = file_get_contents('php://input');
        $json = json_decode($data, true);
        if (isset($json['data'])) {
            $term = $json['data'];
            $res = $calc -> evaluate($term);
            $ans = ['data' => $res];
            echo json_encode($ans);
        }else {
            echo json_encode(['data' => 'Ошибка отправки']);
        }} else {
            echo json_encode(['data' => 'Выражение не отправлено']);
        }
?>