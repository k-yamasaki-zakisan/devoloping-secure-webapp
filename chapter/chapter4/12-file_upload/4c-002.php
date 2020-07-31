<?php
$tmpfile = $_FILES["imgfile"]["tmp_name"];  //一時ファイル
$tofile = $_FILE["imgfile"]["name"];  //元ファイル

if (! is_uploaded_file($tmpfile)) {  //ファイルがアップロードされているか
    die('ファイルがアップロードされていません');
}
$tofile = get_upload_file_name($orgfile);
if (! move_uploaded_file($tmpfile, './img/' . $tofile)) {
    die ('ファイルをアップロードできませんでした');
}
$imgurl = '4c-003.php?file=' . basename($tofile);
?>

<body>
    <a href="<?php echo htmlspecialchars($imgurl); ?>"
    <?php echo htmlspecialchars($tofile, ENT_NOQUOTES, 'UTF-8'); ?></a>
    をアップデートしました<br>
    <img src="<?php echo htmlspecialchars($imgurl); ?>">
</body>