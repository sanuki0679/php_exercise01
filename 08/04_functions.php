<?php
function check_temperature($body_temperature)
{
    // コードを追記
    // 37度未満の場合はtrue
    if ($body_temperature < 37) {
        true;
    } elseif ($body_temperature >= 37) {
        false;
    }
    // 37度以上の場合はfalse
}



function create_message($body_temperature)
{
    // コードを追記

    // check_temperature関数を呼び出す
    // check_temperature関数の結果によって文字列を変更し、関数の戻り値として設定
    $coment = check_temperature($body_temperature);
    if (($coment == true)) {
        echo "あなたは平熱なので、問題なく参加できます";
    } elseif (($coment == false)) {
        echo "あなたは発熱なので、参加できません";
    }
}
