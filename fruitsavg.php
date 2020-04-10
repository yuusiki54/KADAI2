<?php
// 以下５つのフルーツと価格のリストがあります。
// ・りんご、２００円
// ・バナナ、１００円
// ・みかん、１５０円
// ・ぶどう、３００円
// ・もも、４００円

// 上の課題７のフルーツのリストがあります。フルーツの名前を複数入力すると、それらのフルーツの価格の平均値を求めるプログラム fruitsavg.php を作成してください。
// 実行例） php fruits.php ぶどう みかん --> 平均：２２５円
// 実行例） php fruits.php りんご ぶどう もも --> 平均 300円


$fruits = ["りんご" => 200, "バナナ" => 100, "みかん" => 150, "ぶどう" => 300, "もも"  => 400];


$fruits_price = 0;
$fruits_count = 0;
//$fruits["りんご"]=200
for ($i = 1; $i < count($argv); $i++) {
    if (array_key_exists($argv[$i], $fruits)) {
        $fruits_price = $fruits_price + $fruits[$argv[$i]];
        $fruits_count += 1;
    }
}

$average = $fruits_price / $fruits_count;
echo $average;
