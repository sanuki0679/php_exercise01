<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo '私の名前は';
    echo $_POST['message'];
    echo 'です。';
}
?>
<?php
echo '<a href="' . $_SERVER['HTTP_REFERER'] . '"><br>戻る</a>';
?>

