<?php

$name = "佐藤";

if ($name == "佐藤") {

    echo "私は佐藤です".PHP_EOL;

}

else {

    echo "あなたの名前ではありません。";

}

$total = 0;

for ($i = 0; $i < 100000; $i++){
    
   $total += $i;
   
}

   echo $total.PHP_EOL;
   
   
$fruits = array("apple" , "orange" , "lemon" , "banana" , "strawberry");

foreach($fruits as $fruits){
    
    echo $fruits . PHP_EOL;
    
}
 
 $start = 1;
 
 $end = 101;
 
 for($i = $start; $i < $end; $i++){
     
     if($i % 5 ==0){
         
         echo $i . PHP_EOL;
 
     }
     
 }
 