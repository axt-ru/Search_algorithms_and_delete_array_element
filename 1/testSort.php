<?php
include "Sort/DualSelectSort.php";
include "Sort/Heapsort.php";
include "Sort/randArray.php";
include "Sort/ShakerSort.php";
include "Sort/Bubble.php";

function getArr(int $n): array
{
    return _randArray($n);
}

// Тест пузырьковой сортировки при разной замене переменных: Промежуточным значением, List, XOR
$shareArr = getArr(2000);

// Замена промежуточное значение $temp
$arr = $shareArr;
$start = microtime(true);
$sort = bubbleSort($arr);
echo "Сортировка пузырьком промежуточное значение: ".( microtime(true) - $start).PHP_EOL;
//Сортировка пузырьком: 0.17708802223206

// Замена list
$arr = $shareArr;
$start = microtime(true);
$sort = bubbleSortList($arr);
echo "Сортировка пузырьком Замена: ".( microtime(true) - $start).PHP_EOL;
//Сортировка пузырьком замена: 0.20533490180969

// Меняем местами битовой операцией XOR
$arr = $shareArr;
$start = microtime(true);
$sort = bubbleSortBit($arr);
echo "Сортировка пузырьком Битовая операция: ".( microtime(true) - $start).PHP_EOL;
//Сортировка пузырьком битовая: 0.13682007789612
//Самый быстрый обмен значениями.
//---------------------------------------------------------------------------------

$shareArr = getArr(1000);
$lastIndex = count($shareArr) - 1;

//Сортировка выбором
$arr = $shareArr; //
$start = microtime(true);
dualSelectSort($arr);
echo "Сортировка выбором: ".( microtime(true) - $start).PHP_EOL;
//Сортировка выбором: 0.027838945388794

//Сортировка пирамидальная:
$arr = $shareArr;
$start = microtime(true);
heapSort($arr);
echo "Сортировка пирамидальная: ".( microtime(true) - $start).PHP_EOL;
//Сортировка пирамидальная: 0.0031321048736572

//Сортировка пирамидальная битовая замена:
$arr = $shareArr;
$start = microtime(true);
heapSort2($arr);
echo "Сортировка пирамидальная битовый обмен: ".( microtime(true) - $start).PHP_EOL;
//Сортировка пирамидальная: 0.0030419826507568
//немного быстрее с заменой битовой операцией.

//Шейкерная сортировка:
$arr = $shareArr;
$start = microtime(true);
shakerSort($arr);
echo "Шейкерная сортировка: ".( microtime(true) - $start).PHP_EOL;
//Шейкерная сортировка: 0.058016061782837 выигрывает только до 100 значений, а далее увеличивается









