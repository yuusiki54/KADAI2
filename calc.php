<?php
// 課題１０）
// 以下のような、四則演算（足し算、引き算、掛け算、割り算）可能な計算プログラム calc.php を作成してください。１つ目の入力値に、演算記号、２つ目と３つ目に数値を入力できること。演算記号は、「+」が足し算、「-」が引き算、「*」が掛け算、「/」が割り算を表すものとする。
// 実行例）php calc.php + 1 2 --> 3
// 実行例）php calc.php - 3 1 --> 2
// 実行例）php calc.php * 3 5 --> 15
// 実行例）php calc.php / 4 2 --> 2



//　　　　　　　　　　↓[＋ , 1 , 2]
function keisanki($numbers)
{
    $kekka = 0;
    foreach ($numbers as $nums) {
        if ($nums[0] == "+") {
            $kekka = $nums[1] + $nums[2];
        } elseif ($nums[0] == "-") {
            $kekka = $nums[1] - $nums[2];
        } elseif ($nums[0] == "*") {
            $kekka = $nums[1] * $nums[2];
        } elseif ($nums[0] == "/") {
            $kekka = $nums[1] / $nums[2];
        }
    }
    return $kekka;
}
array_shift($argv);
$answer = keisanki($argv);
echo $answer;
