<?php
include 'incldudes/header.php';
// require 'includes/header.php';
echo '<h1>Functions</h1>';

function jabaneezCar()
{
    echo "Hello, I'm Jabaneez Car Method<br>";
}

jabaneezCar();

// function sumTowNumbers(){
//     echo 5+7;
// }
function sumTowNumbers($x,
)
{
    // echo $x + $y;
    return $x + $y;
}

// echo sumTowNumbers(18, 9) / 2;
$r =  sumTowNumbers(18, 10);
// echo $r/2;
echo $r;

function welcome($username = 'visitor')
{
    echo 'Welcome ' . $username;
}

// welcome('Ali');
welcome('Mohammad<br>');

// for($i=0; $i<=10; $i++){
//     if($i%2 == 0){
//         echo $i . '<br>';
//     }
// }

function evenNumber($start, $end)
{
    for ($i = $start; $i <= $end; $i++) {
        if ($i % 2 == 0) {
            echo $i . '<br>';
        }
    }
}

evenNumber(9, 19);

$array = ['banana', 'orange', 'apple'];//befor
$array = ['banana', 'orange', 'lemon'];// after

function replaceItem($arr, $i, $newVal){
    $arr[$i] = $newVal;
    return $arr;
}

$fr = ['banana', 'orange', 'apple'];
print_r(replaceitem($fr, 1, 'lemon'));
print_r(rEplAceitEm($fr, 1, 'lemon'));

include('includes/footer.php');