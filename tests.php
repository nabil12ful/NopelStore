<?php

function resortingArry(array $array){
    $keys = array_keys($array);
    $count = count($array);
    $newArray = [];
    for($i=0; $i < $count; $i++){
        $key = $keys[$i];
        $newArray[] = $array[$key];
    }
    return $newArray;
}

function getTotal(array $array){
    $array = resortingArry($array);
    $count = count($array);
    $total = 0;
    for($i=0; $i < $count; $i++){
        $total += ($array[$i]['price'] * $array[$i]['count']);
    }
    return $total;
}

session_start();
// unset($_SESSION['passValue'])/
// $arr = array_slice($_SESSION['card']['products'], -2, 2, true);
$arr = $_SESSION['card']['products'];

$newArr = resortingArry($arr);
$count = count($newArr);
$total = 0;
for($i=0; $i < $count; $i++){
    $total += ($newArr[$i]['price'] * $newArr[$i]['count']);
}

echo $total = getTotal($arr);

// delete item from 

?>

<pre>
    <?php //print_r($newArr) ?>
</pre>