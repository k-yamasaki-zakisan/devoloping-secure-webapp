<?php
session_start();
?>

<body>
    検索キーワード：<?php echo $_GET['keyword']; ?><br>
    以下略
</body>

<!-- 正常系     /chapter4/3-problem_of_display/43-001.php?keyword=競技プログラミング -->
<!-- xss攻撃    /chapter4/3-problem_of_display/43-001.php?keyword=<script>alert(document.cookie)</script> -->