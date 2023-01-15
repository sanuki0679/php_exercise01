<?php

$msg = '';
$week = ["日", "月", "火", "水", "木", "金", "土"];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // コードを追記
    $date = date('Y年m月d日');
    $msg = '今日は、' . $date . $week[date("w")] . '曜日です<br>'; //「はい」の時の処理
}

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if ($msg) : ?>
        <h1><?= $msg ?></h1>
        <a href="">戻る</a>
    <?php endif; ?>
    <?php if (!$msg) : ?>
        <h2>本日の日付、曜日を確認しますか？</h2>
        <form name="Hai" method="POST" action="">
            <input type="submit" name="answer" value="はい">

        </form>
    <?php endif; ?>
</body>

</html>
