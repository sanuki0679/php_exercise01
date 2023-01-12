<?php

echo '$score_mathの値を入力して下さい: ';
$score_math = trim(fgets(STDIN));

echo '$score_englishの値を入力して下さい: ';
$score_english = trim(fgets(STDIN));

// ここに処理を記述
if (($score_math >= 60) && ($score_english >= 60)) {
    echo '合格' . PHP_EOL;
} elseif (($score_math < 60) xor ($score_english < 60)) {
    echo '再試験'  . PHP_EOL;
} else {
    echo '不合格'  . PHP_EOL;
}
