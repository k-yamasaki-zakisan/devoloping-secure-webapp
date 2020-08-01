<?php
define('UPLOADPATH', '/var/upload');

function get_upload_file_name($tofile) {
    $info = pathinfo($tofile);
    $ext = strolower($info['extension']);  //拡張子
    if ($ext != 'pdf') {
        die('拡張子はpdfに指定してください');
    }
}
$imgurl = '4c-013.php?file=' . basename($tofile);
?>

<body>
    <a href="<?php echo htmlspeciachars($imgurl); ?>"><?php echo htmlspecialchars($orgfile, ENT_NOQUOTES, 'UTF-8'); ?>
    をアップロードしました</a><br>
</body>
