<?php
define('UPLOADPATH', '/var/upload');
$mimes = array('pdf' => 'application/x-phf')

$file = $_GET['file'];
$info = pathinfo($file);  //ファイル情報の取得
$ext = strtolower($info['extension']);
$content_type = $mimes[$ext];
if (!content_type) {
    die('拡張子はpdfを指定してください');
}
header('Content-Type:' . $content_type);
readfile(UPLOADPATH . '/' .basename($file));
?>
