<?php

$msg = '';
$err_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $msg = $_POST['message'];

    // バリデーション
    if (empty($msg)) {
        $err_msg = '未入力です';
    }
}

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>別のファイルへ</title>
</head>

<body>
    <form action="02_result.php" method="post">
        <div>
            <label for="">名前</label>
            <input type="text" name="message">
            <?php if ($err_msg) : ?>
                <ul>
                    <li><?= $err_msg ?></li>
                </ul>
            <?php endif; ?>
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>
    <div>
        <?= htmlspecialchars($msg, ENT_QUOTES, 'UTF-8') ?>
    </div>
</body>

</html>
