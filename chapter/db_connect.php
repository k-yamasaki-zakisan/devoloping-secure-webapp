<?php
$dsn = "mysql:dbname=test; host=localhost";
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

#dockerのDBコンテナにイン
// docker exec -it docker_db_1 bash
// mysql -u root -p test
// root

// CREATE TABLE test.users (
//     id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
//     name VARCHAR(50),
//     email VARCHAR(50),
//     password VARCHAR(50),
//     created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
// );
?>