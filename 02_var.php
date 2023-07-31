<?php


// Variable
// 1- يبدأ برمز  $
// 2- يبدأ بحروف أو رمز _
// 3- لا يبدأ برموز أخرى ولا أرقام
// 4- اللغة حساسة لحالة الأحرف

$a5li5 = 0; // int
$price = 4.3; // double
$is_student = false; // boolean

$fname = 'ali'; // string
$lname = "Mohammad";
$age = 30;
echo $fname . ' ' . $lname;
echo '<br>';
echo $age;
echo '<br>';
echo $is_student;
echo '<br>';

echo gettype($is_student); // data type


// String fuctions // comment
echo '<br>';
//echo strtoupper($fname);
echo '<br>';
echo strtolower($fname);
echo '<br>';
echo ucfirst($fname);
echo '<br>';
echo strlen($lname);
echo '<br>';
echo str_replace('q', 'b', $fname);

echo '<br>';
echo strlen($fname) - 2;
echo '<br>';
echo $fname[strlen($fname) - 2];

//  Number functions
echo '<br>';
echo '$age sum: ' . ' ' .$age + $price;
echo '<br>';
echo 'Substraction: ' .' ' .$age - $price;
echo '<br>';
echo '$price' . " ".$age * $price;
echo '<br>';
echo 'Division value is: ' .$age / $price;
echo '<br>';
echo 'Rest value is: ' .$age % $price;
echo '<br>';
echo 'Power value is: ' . 2 ** 4;
