<?php

$stylists = [
    'スタイリスト' => 'Takashi',
    'ハイスタイリスト' => 'Ken',
    'トップスタイリスト' => 'Kyoutaro'
];
$select_stylist = '';

// ここにコードを追記
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $select_stylist = $_POST['stylist'];
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>埋め込み</title>
</head>

<body>
    <h1>希望する美容師のランクを選んでください</h1>
    <form action="" method="post">
        <select name="stylist">
            // ここにコードを追記

            <option value="Takashi">スタイリスト</option>
            <option value="Ken">ハイスタイリスト</option>
            <option value="Kyoutaro">トップスタイリスト</option>
        </select>


        <br>
        <input type="submit" value="送信">
    </form>

    <?php if ($select_stylist != '') : ?>
        <a>あなたの担当は<?= htmlspecialchars($select_stylist, ENT_QUOTES, 'UTF-8') ?>です</a>
    <?php endif; ?>
</body>

</html>
