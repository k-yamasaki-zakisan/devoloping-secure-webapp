<?php
    //  ../../../../..ect/hosts[NUL].html等の重要ファイルにアクセスする攻撃の防ぎ方 
    // 重要ファイルにアクセスされないようにルートの固定化
    define('TMPLDIR', '/var/www/html/chapter4/10-file_access/');
    ＄tmp1 = basename(filter_input(INPUT_GET, 'template'));
?>

<body>
<?php readfile(TMPLDIR . $tmp1 . '.html'); ?>
</body>