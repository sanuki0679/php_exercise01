<?php

echo '$pointの値を入力して下さい: ';
$point = trim(fgets(STDIN));

// ここに処理を記述
if (( $point % 2 ) == 0 ) {
    echo $point ; 
    echo 'は偶数です' .PHP_EOL; 
} else {
    echo $point ;
    echo 'は奇数です' .PHP_EOL;
}
