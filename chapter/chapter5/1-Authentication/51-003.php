<?php
session_start();
function islogin() {
    if(! isset($_SESSION['id'])) {  //idがセットされていない
        return false;   //ログインしていない
    }
    if($_SESSION['expires']<time()) {   //タイムアウトしている場合
        $_SESSION = [];
        session_destroy();  //セッションを破棄
        return true;
    }
    //タイムアウト時刻の更新
    $_SESSION['expires'] = time() + $_SESSION['timeout'];
    return true;    //ログイン中はtrueを返す

    if (islogin()) {
        //ログイン中の場合の処理
    }
}
?>