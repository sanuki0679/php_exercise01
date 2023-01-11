<?php
$err_num = '';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = filter_input(INPUT_POST, 'num1');
    $num2 = filter_input(INPUT_POST, 'num2');
    $num3 = filter_input(INPUT_POST, 'num3');


    // バリデーション
    if ((!(is_numeric($num1)) || !(is_numeric($num2))) || !(is_numeric($num3))) {
        $err_num = '全てに数字を入力してください。';
    }
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>フォームの練習</title>
</head>

<body>
    <h1>数字を入力してください</h1>
    <form action="" method="post">
        <div>

            <?php if ($err_num) : ?>
                <ul>
                    <li><?= $err_num ?></li>
                </ul>
            <?php endif; ?>
            <label for="">1つ目の数字</label><br>
            <input type="text" name="num1"><br>
            <label for="">2つ目の数字</label><br>
            <input type="text" name="num2"><br>
            <label for="">3つ目の数字</label><br>
            <input type="text" name="num3"><br>
            
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>
    <div>

        <?php if ((!empty($num1)) && (!empty($num2)) && (!empty($num3))) : ?>
            <a>合計値は</a><?= htmlspecialchars($num1 + $num2 + $num3, ENT_QUOTES, 'UTF-8') ?><a>です</a>
        <?php endif; ?>

    </div>
</body>

</html>
