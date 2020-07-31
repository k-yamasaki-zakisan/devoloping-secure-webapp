<?php
$mail = filler_input(INPUT_POST, 'mail');
system("/usr/sbin/sendmail -i <template.txt $mail");
?>

<body>
    お問い合わせを受けました
</body>