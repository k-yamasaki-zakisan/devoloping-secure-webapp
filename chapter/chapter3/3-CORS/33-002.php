<?php
    header('Content-Type: application/json');
    // 特定のURLからの通信は許可
    header('Access-Control-Allow-Origin: http://localhost:8090');
    echo json_encode(['zipcode' => '100-0100', 'address' => '東京都大島町']);

