<?php

// '朝' or '昼' or '夜'を指定

//if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    //$time_zone = $_POST['time_zone'];
//}
$time_zone = '夜';
function get_greeting($time_zone)
{
    $greetings = [
        '朝' => 'おはよう',
        '昼' => 'こんにちは',
        '夜' => 'こんばんは'
    ];
    // コードを追記
    return  "{$time_zone}の挨拶は{$greetings[$time_zone]}" ;
    //echo "{$time_zone}の挨拶は{$greetings[$time_zone]}";
}



