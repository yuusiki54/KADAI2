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
$fruits_key1 = "りんご";
$fruits_key2 = "バナナ";
$fruits_key3 = "みかん";
$fruits_key4 = "ぶどう";
$fruits_key5 = "もも";

$fruits_price = 0;
//$fruits["りんご"]=200
for ($i = 1; $i < count($argv); $i++) {
    if(array_key_exists($fruits_key1,$fruits) and array_key_exists($fruits_key2,$fruits) and array_key_exists($fruits_key3,$fruits)
        and array_key_exists($fruits_key4,$fruits) and array_key_exists($fruits_key5,$fruits)){
    $fruits_price = $fruits_price + $fruits[$argv[$i]];
        }else{
    echo "その果物は存在しません";
        }}
array_shift($argv);
$average = $fruits_price / count($argv);
echo $average;
?>