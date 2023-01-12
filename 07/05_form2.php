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
    //$item_key = $_POST['item_key'];
    $selected_key = $_POST['item_key'];
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
    if ((!empty($name)) && (!empty($tel)) && (!empty($email))) {

        header("Location: 05_confirm.php?selected_key=".$selected_key);
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
    <title>Document</title>
</head>

<body>
    <h3>個人情報を入力してください</h3>
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
        <input type="text" name="name" value="<?= $name ?>"><br>


        <label for="tel">電話番号</label><br>
        <input type="text" name="tel" value="<?= $tel ?>"><br>

        <label for="email">メールアドレス</label><br>
        <input type="text" name="email" value="<?= $email ?>"><br>


        <h3>購入するものを選択してください</h3>

        <select name="item_key">
            <?php
            foreach ($items as $item_key) {
                echo '<option value="', $item_key, '">', $item_key, '</option>';
            }
            ?>


        </select>
        <p></p>

        <div class=" submit">

            <input type="submit" value="送信">


        </div>
    </form>


    <?php if ((!empty($name)) && (!empty($tel)) && (!empty($email)) && (!empty($item_key))) : ?>
        <h3>以下の内容が送信されました。</h3><br>
        <table border="0">
            <tr>
                <td>氏名</td>
                <td><?= $name ?></td>
            </tr>
            <tr>
                <td>電話番号</td>
                <td><?= $tel ?></td>
            </tr>
            <tr>
                <td>メールアドレス</td>
                <td><?= $email ?></td>
            </tr>
            <tr>
                <td>購入するもの</td>
                <td><?= $selected_key ?></td>
            </tr>
        </table>


    <?php endif; ?>
</body>

</html>
