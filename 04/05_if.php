<?php

echo '$numの値を入力して下さい:';
$num = trim(fgets(STDIN));
//ここに処理を記述
$point = false;
for ($j = 2; $j < $num; $j++) {
    if ($num % $j == 0) {
        $point = true;
        echo $num;
        echo 'は素数ではありません。' . "\n";
        break;
    }
}
if ($num == 1) {
    echo $num;
    echo 'は素数ではありません。' . "\n";
} elseif ($point == false) {
    echo $num;
    echo 'は素数です。' . PHP_EOL;
}
