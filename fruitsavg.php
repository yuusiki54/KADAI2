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
for ($i = 1; $i < count($argv); $i++) {
    if ($argv[$i] == "りんご") {
    $fruits_price += $fruits["りんご"];
    }elseif($argv[$i] == "バナナ"){
        $fruits_price += $fruits["バナナ"];
    }elseif($argv[$i] == "みかん"){
        $fruits_price += $fruits["みかん"];
    }elseif($argv[$i] == "ぶどう"){
        $fruits_price += $fruits["ぶどう"];
    }elseif($argv[$i] == "もも"){
        $fruits_price += $fruits["もも"];
    }
}
array_shift($argv);
$average = $fruits_price / count($argv);
echo $average;
?>