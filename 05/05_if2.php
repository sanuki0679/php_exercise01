<?php

$subjects = ['数学', '英語', '理科', '社会', '国語'];

// ここに処理を記述

foreach ($subjects as $kamoku) {


switch ($kamoku) {
    case '数学':
        echo $kamoku ,'の試験は明日です｡' . PHP_EOL;
        break;
    case '英語':
        echo '英語の試験は明後日です｡' . PHP_EOL;
        break;
    case '理科':
        echo '理科の試験は明々後日です｡' . PHP_EOL;
        break;
    case '社会':
        echo '社会の試験は昨日です｡' . PHP_EOL;
        break;
    case '国語':
        echo '国語の試験は中止です｡' . PHP_EOL;
        break;
    
}
}
