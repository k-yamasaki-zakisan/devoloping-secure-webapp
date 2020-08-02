<?php
//ここまでパスワードの照合済
$autologin = ($_GET['autologin'] === 'on');
$timeout = 60*60;
if($autologin) {  //自動ログインの場合
    $timeout = 7 * 24 * 60 * 60;  //セッションの有効期間を１週間に指定
    session_set_cookie_params($timeout);    //クッキーのExpires
}
session_start();
session_regenerate_id(true);  //セッションIDの固定化対策
$_SESSION['id'] = $id;  //ログイン中のユーザーID
$_SESSION['timeout'] = $timeout;  //タイムアウトの時間
$_SESSION['expires'] = time();  //タイムアウト時間
?>

<body>
    login successful<a href="51-003.php">next</a>
</body>