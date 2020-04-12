<?php
// 課題９）
// 以下５つのフルーツと価格のリストがあります。
// ・りんご、２００円
// ・バナナ、１００円
// ・みかん、１５０円
// ・ぶどう、３００円
// ・もも、４００円

// 上の課題７のフルーツのリストがあります。価格を入力するとその価格以上のフルーツのリストを出力するプログラム searchfruits.php を作成してください。
// 実行例） php searchfruits.php 200 -->  りんご、ぶどう、もも
// 実行例） php searchfruits.php 400 -->  もも
// 実行例） php searchfruits.php 500 -->  //ないので何も出力しない

$fruits = [200 => "りんご", 100 => "バナナ", 150 => "みかん", 300 => "ぶどう", 400 => "もも"];
function fruitslist($buyfruits)
{
    global $fruits;
    $hairetu = [];
    foreach ($fruits as $num => $fruits) {
        if ($num >= $buyfruits) {
            $hairetu[] = $fruits;
        }
    }
    return $hairetu;
}
$kekka = fruitslist($argv[1]);

foreach ($kekka as $value) {
    echo $value,PHP_EOL;
}
