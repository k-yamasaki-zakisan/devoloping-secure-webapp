<?php
    session_start();
    // @は簡易的な例外処理の演算子
    $id = @$_POST['ID'];
    $pwd = @$_POST['PWD'];
    if($id == '' || $pwd == '') {
        die(ログインできませんでした);
    }
    $_SESSION['ID'] = $id;
?>

<html>
    <head>
        <title>ログイン</title>
    </head>
    <body>
        ログイン成功しました
        <a href="32-022.php">プロフィール</a>
    </body>
</html>