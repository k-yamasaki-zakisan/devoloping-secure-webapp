<?php
$dsn = "mysql:dbname=test; host=13306";
$username = "test";
$password = "test";
$attr_emulate_prepares = array(PDO::ATTR_EMULATE_PREPARES => false);

ini_set("display_errors", On);
error_reporting(E_ALL);

try {
    $db = new PDO($dsn, $username, $password, $attr_emulate_prepares);
} catch(PODException $e) {
    echo "DB接続失敗" .$e->getMessage() ."\n";
    die();
}

// require('../../db_connect.php');
?>

