<?php
session_start();
if (empty($_SESSION['mail'])) {
    $_SESSTION['mail'] = 'secret@examle.jp';
}
//メールアドレスをJSONで返す
header('Content-Type: application/json; chartset=utf-8');
echo json_encode(array(
    'mail' => $_SESSION['mail']
));
?>