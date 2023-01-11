<?php

$name = '';
$tel = '';
$email = '';
$item_key = '';
$err_msgs = [];

$items = ['バッグ', '靴', '時計', 'ネックレス', 'ピアス'];

// コードを追記
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
        $name = $_POST['name'];
        //$tel = filter_input(INPUT_POST, 'tel');
        //$email = filter_input(INPUT_POST, 'email');
    
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $item_key = $_POST['item_key'];

    // バリデーション

    if (empty($name)) {
        $err_msgs[] = '氏名を入力してください。';
    }

    if (empty($tel)) {
        $err_msgs[] = '電話番号を入力してください。';
    }
    if (empty($email)) {
        $err_msgs[] = 'メールアドレスを入力してください。';
    }
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
    <h3>個人情報を入力してください</h3><br>
    <?php if (!empty($err_msgs)) : ?>
        <h2>エラーメッセージ</h2>
        <ul>
            <?php foreach ($err_msgs as $err_msg) : ?>
                <li><?= $err_msg ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form action="" method="post">

        <label for="name">氏名</label><br>
        <input type="text" name="name"><br>


        <label for="tel">電話番号</label><br>
        <input type="text" name="tel"><br>

        <label for="email">メールアドレス</label><br>
        <input type="text" name="email"><br>


        <h3>購入するものを選択してください</h3>
        <ul>
            <select name="item_key">
                <?php
                foreach ($items as $item_key) {
                    echo '<option value="', $item_key, '">', $item_key, '</option>';
                }
                
                ?>


            </select>
        </ul>


        <div class=" submit">

            <input type="submit" value="送信">


        </div>
    </form>


    <?php if (!empty($name)) : ?>
        <h3>以下の内容が送信されました。</h3><br>
        <div>
            <?= '氏名' . '           ' . $name  ?>
        </div>
    <?php endif; ?>
    <?php if (!empty($tel)) : ?>
        <div>
            <?= '電話番号' . '       ' . $tel . PHP_EOL ?>
        </div>
    <?php endif; ?>
    <?php if (!empty($email)) : ?>
        <div>
            <?= 'メールアドレス' . '  ' . $email . PHP_EOL ?>
        </div>
    <?php endif; ?>
    <?php if (!empty($item_key)) : ?>
        <div>
            <?= '購入するもの  ' . $item_key . PHP_EOL ?>
        </div>
        unset($item_key);
    <?php endif; ?>
</body>

</html>
