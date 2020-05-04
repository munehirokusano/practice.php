<?php

$a = 3;

$b = 7;

echo $a + $b . PHP_EOL;

$array = ["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"];

echo $array[7] . PHP_EOL;

$hello = "Hello,";

$name = "kusano";

$world = "s World";

echo $hello . $name . $world . PHP_EOL;

$tech_boost = "tech";

$tech_boost .= " boost";

echo $tech_boost . PHP_EOL;


$calender_2018 = [
    
    "January" => "1月" ,
    
    "February" => "2月" ,
    
    "March" => "3月" ,
    
    "April" => "4月" ,
    
    "May" => "5月" ,
    
    "Jun" => "6月" ,
    
    "July" => "7月" ,
    
    "August" => "8月" ,
    
    "Septenber" => "9月" ,
    
    "October" => "10月" ,
    
    "November" => "11月" ,
    
    "December" => '12月' ,
    
];

echo $calender_2018["December"] . PHP_EOL;

// 10月を文字列にすることを忘れている。
// 2018_calenderの変数の最初が数字になっている。
// 配列の要素を括るカッコを間違えている。 } →　×　[ → 〇
// ダブルコーテーションを忘れている。 [December] → ×　["Dcember"] → 〇