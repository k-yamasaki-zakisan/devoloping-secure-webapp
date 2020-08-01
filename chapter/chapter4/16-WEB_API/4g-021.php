<?php
session_start();
if (empty($_SESSION['mail'])) {
    header('HTTP/1.1 403 Forbidden');
    die('ログインが必要です');
}
$json = file_get_contents('php://input');
$array = json_decode($json, true);
//更新処理　セッション変数の更新
$_SESSION['mail'] = $array['mail'];
$result = ['result' => 'ok'];
header('Content-Type: application/json: charset=utf-8');
echo json_encode($result);
?>