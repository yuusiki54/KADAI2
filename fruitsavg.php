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

$fruits = ["りんご" => 200,"バナナ" => 100,"みかん" => 150,"ぶどう" => 300,"もも"  => 400];
$total_price = 0;
$total_count = 0;
foreach($fruits as $kudamono => $price){
    if($argv[1] == $kudamono){
        $total_price += $price;
        $total_count += 1;
    }elseif($argv[2] == $kudamono){
        $total_price += $price;
        $total_count += 1;
    }elseif($argv[3] == $kudamono){
        $total_price += $price;
        $total_count += 1;
    }elseif($argv[4] == $kudamono){
        $total_price += $price;
        $total_count += 1;
    }elseif($argv[5] == $kudamono){
        $total_price += $price;
        $total_count += 1;
    }
}

$fruitsavg = $total_price / $total_count;
echo $fruitsavg;



?>