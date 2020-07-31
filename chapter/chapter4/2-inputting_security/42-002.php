<body>
    <?php
    $p = $GET['p'];
    if(preg_match('/\A[a-z0-9]', $p) === FALSE) {
        die('整数を入れてください');
    }
    echo $p;
    ?>
</body>

chapter4/2-inputting_security/42-002.php?p=1%00<spript>alert('XSS')</script>