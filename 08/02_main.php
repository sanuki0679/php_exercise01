<?php

require_once __DIR__ . '/02_functions.php';

$yesterday_meal = [
    '食パン' => 300, 
    'ステーキ' => 1200, 
    'うどん' => 500
];

$today_meal = [
    'シリアル' => 200, 
    'とんかつ' => 1000,
    'パスタ' => 400
];

// コードを追記
// 標準関数を使用して、配列を結合($yesterday_mealと$today_meal)

echo calc_cal($total_meals);
