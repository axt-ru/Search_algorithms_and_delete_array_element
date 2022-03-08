<?php

$array = [2, 3, 5, 6, 4, 7, 1, 2, 4, 6, 9];

function bubbleSort($array){
    $iter = 0;
    for($i=0; $i<count($array); $i++){
        $iter++;
        $count = count($array);
        for($j=$i+1; $j<$count; $j++){
            $iter++;
            if($array[$i]>$array[$j]){
                $temp = $array[$j];
                $array[$j] = $array[$i];
                $array[$i] = $temp;
            }
        }
    }
    echo "Количество итераций Пузырьком: $iter".PHP_EOL;
    return $array;
}

function bubbleSortList($array){

    for($i=0; $i<count($array); $i++){
        $count = count($array);
        for($j=$i+1; $j<$count; $j++){
            if($array[$i]>$array[$j]){

                list($array[$i], $array[$j]) = array($array[$j], $array[$i]);
            }
        }
    }
    return $array;
}

function bubbleSortBit($array){

    for($i=0; $i<count($array); $i++){
        $count = count($array);
        for($j=$i+1; $j<$count; $j++){
            if($array[$i]>$array[$j]){

                $array[$j]^=$array[$i]^=$array[$j]^=$array[$i];

            }
        }
    }
    return $array;
}
