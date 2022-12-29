<?php

echo '$numの値を入力して下さい: ';
$num = trim(fgets(STDIN));

// ここに処理を記述

for ($i = 1; $i <= $num ; $i++) {

    $point = 0;

for ($j = 1; $j <= $num; $j++) {
    if ($num % $j == 0) {
    $point += 1;
    }
}

    if ($point == 2) {
    echo $num ;
    echo ' は素数です。' . "\n";
    break ;
    } else {
    echo $num ;
    echo ' は素数ではありません。' . PHP_EOL;
    break ;
    }

}
