<?php
if(empty($_SESSION['token'])) {
    $token = bin2hex(openssl_random_pseudo_bytes(24));
    $_SESSION['token'] = $token;
} else {
    $token = $_SESSION['token'];
}
?>

<head>
    <meta charset="utf-8">
</head>

<body>
    <form action="51-012.php" method="POST">
        <!-- 以下はCSRF防止用トークン -->
        <input type="hidden" name="token" value="<?php echo htmlspecielchars($token) ?>">
        <input type="submit" value="ログイン">
    </form>
</body>