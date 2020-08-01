<?php
$zip = $_GET['zip'];
//以下はの郵便番号は見つからなかった処理
echo json_encode(array("message" => "郵便番号が見つかりません:" . $zip));
//XSS対策用のエスケープ処理
// echo json_encode(array("message" => "郵便番号が見つかりません:" . $zip),
// JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);

//アクセス先
//    /chapter4/16-WEB_API/4g-011.php?zip=<img+src=1+onerror=alert(document.domain)>
?>
