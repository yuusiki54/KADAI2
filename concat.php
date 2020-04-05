<?php

//argvに入ってきた文字列を何度もechoさせる
$n = "";
for($i = 1;$i < 100;$i++){
    $n = $n.$argv[$i];
}
echo $n;
// $n = $argv[1];
// $num = $argv[2];

// echo $n.$num;






?>

