<?php
$score = '';
$err_msg = '';
$judge_ment = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $score = filter_input(INPUT_POST, 'score');
    if (!is_numeric($score)) {
        $err_msg = '点数が入力されていません。';
    }
    if (!empty($score)) {
    
    if ($score >= 60) {
    
    $judge_ment = '合格です';

    }elseif ($score < 60) {
    
    $judge_ment = '不合格です';
    }
    }
    if (empty($err_msg)) {

        header("Location: 03_judge_ment.php?judge_ment=" . $judge_ment);
        exit();
    }
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
    <label for="score"></label>
    <?php if (empty($score)) : ?>
        <h1>点数を入れてください</h1>
    <?php endif; ?>
    <?php if (!empty($err_msg)) : ?>
        <ul>
            <li><?= $err_msg ?></li>
        </ul>
    <?php endif; ?>



    <form action="" method="post">
        <input type="number" name="score">
        <input type="submit" value="送信">

    </form>

</body>

</html>
