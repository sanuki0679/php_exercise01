<?php

echo '$scoreの値を入力して下さい: ';
$score = trim(fgets(STDIN));

// ここに処理を記述
if ($score >= 60) {
    echo '合格です' . PHP_EOL;
} elseif ($score >= 30) {
    echo '追試です' . PHP_EOL;
} else {
    echo '不合格です' . PHP_EOL;
}
