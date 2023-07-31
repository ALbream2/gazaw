<?php
echo '<pre><h1>Datatypes</h1><br>';
// variables: 1. primitive (simple)
// int, double, string, boolean, null
// $avg = 88.8287;
$avg = 1;
// echo round($avg, 1);
// echo $avg;
$newVar = null;
// echo gettype($avg) . '<br>';
// var_dump($avg);
// echo is_nan($avg);
// echo is_int($avg). '<br>';

// variables: 2. compound (Array-Object-Resourse)
// // 1. Array
// Indexed Array
// $arr = ['Ali', 30];
// var_dump($arr);
// echo '<br>';
// print_r($arr); 
// echo $arr; // X
// $arr[] = true;
// $arr[2] = true;
// echo '<br>';
// print_r($arr); 
// $arr[5]= 'Ali Ahmad';
// echo '<br>';
// print_r($arr); 
// array_pop($arr);
// array_pop($arr);
// array_pop($arr);
// array_pop($arr);
// array_push($arr, 88.8);
// echo '<br>';
// print_r($arr); 
// echo $arr[3];
$a1 = ['Ali', 90.3, 'ICT', 88.8, false, 'Gaza'];
// array_push($a1, 'Programming');
$a1[] = 'programming';
// array_pop($a1);
// $a1[1] = 10;
// print_r($a1);
// Associative Array
$a2 = [
    'name' => 'Ali',
    'avg' => 90.3,
    'collage' => 'ICT',
    'uavg' => 88.8,
    'is_graduated' => false,
    'address' => 'Gaza',
    'skills' => 'Programming',
];

// print_r($a2);
// echo '<br>'. $a2['uavg']; // show
$a2['level'] = 3; // add
$a2['level'] = 5; // update
array_pop($a2); // remove last element
// print_r($a2);
// 3. Multidimentional Array
$ar3 = [
    'fruits'        => ['banana', 'apple'],
    //  ['banana', 'apple'],
    'vegatables'    => ['onioin', 'tomato']
    
    //  ['onioin', 'tomato']
];

// var_dump($ar3);
// echo $ar3['vegatables'][1];
// echo $ar3[1][0];
$ar3['fruits'][2] = 'orange';
print_r($ar3);