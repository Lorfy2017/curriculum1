<?php  
//1.連想配列
$fruits = ["りんご" =>"300" , "みかん"=>"150","もも"=>"3000"];

//2.関数の定義

function culcPrice($unit,$qty){
    $price = $unit * $qty;
    return $price;
}
//3.繰り返しを使ってそれぞれのフルーツを書く
foreach($fruits as $key => $value){
    echo $key . "は" . culcPrice($value,1) .  "円です。";
    echo '<br>';
}

?>