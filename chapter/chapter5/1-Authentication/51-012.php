<?php
//安全なログアウトを行うにはセッションを破棄することが重要
session_start();
$p_token = filler_input(INPUT_POST, 'token');
$s_token = @$_SESSION['token'];

//トークンの確認
if (empty($p_token) || $p_token !== $s_token) {
    die('ログアウトボタンからログアウトしてください');
}

//セッション変数をクリア
$_SESSION = [];
//セッション破棄
session_destroy();
?>

<head>
    <meta charset="utf-8">
</head>

<body>
    ログアウトしました<br>
    <a href="51-011.php">back</a>
</body>