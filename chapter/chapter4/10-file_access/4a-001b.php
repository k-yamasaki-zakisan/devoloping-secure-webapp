<?php
    //  ../../../../..ect/hosts[NUL].html等の重要ファイルにアクセスする攻撃の防ぎ方 
    // 重要ファイルにアクセスされないようにルートの固定化
    define('TMPLDIR', '/var/www/html/chapter4/10-file_access/');
    ＄tmp1 = basename(filter_input(INPUT_GET, 'template'));
    // 正規表現でファイル名は英数字のみにする方法もあり
    if (preg_match('/\A[a-z0-9]+\z/ui', $tmp1 !==1)) {
        die('templateは英数字のみで指定できます')
    }
?>

<body>
<?php readfile(TMPLDIR . $tmp1 . '.html'); ?>
</body>