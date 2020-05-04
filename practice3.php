<?php

// 課題1

function number($a){
    
    $redult = 0;
    
    $result = $a * 2;
    
    return $result;
    
}

echo number(4) . PHP_EOL;


// 課題2

function f($a , $b){
    
    $result = 0;
    
    $result = $a + $b;
    
    return $result;
    
}

echo f(2,4) . PHP_EOL;


// 課題3

function multiplication_array($arr){
    
    $total = 1;

    foreach ($arr as $score){
    
        $total *= $score;
        
    }
    
    return $total;
    
}

echo multiplication_array(array(1 , 3 , 5 , 7 ,9)) . PHP_EOL;



// 課題4

function max_array($arr4){
    
    $max_number = max($arr4);
    
    return $max_number;
    
}

echo max_array(array(1 , 7 , 9 , 15)) . PHP_EOL;


/// 課題5

//strip_tag

$text = "<h1>表紙</h1>";

echo strip_tags($text) . PHP_EOL;


//array push

$fruits = array("apple" , "orange");

array_push($fruits,"banana");

print_r($fruits);


//array_merge

$array1 = array(1 , 2, 3);

$array2 = array(5 , 7 , 9);

$total_array = array_merge($array1, $array2);

print_r($total_array);


//time , mktime

$time = time();

echo $time . PHP_EOL;


$time2 = mktime(11, 11, 11, 11, 11, 2011);

var_dump($time2);

echo date('Y年m月' , $time2);



    