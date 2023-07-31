<?php
echo '<h1>Conditions in PHP</h1>';

$m = 60;
// if($m >= 60){
//     echo 'PASS';
    // } else {
    //     echo 'FAIL';
    // }

    $c = 38;

// if($c > 30){
//     echo '<h3>Take care..</h3><br>';
// }

// if($c <= 12){
//     echo 'COLD';
// } elseif($c <= 25) {
//     echo 'MODIRATE';
// } else {
//     echo 'HOT<br>';
// }

// $a = 99;
// if($a<60){
//     echo 'Fail';
// } elseif($a<70){
//     echo 'Accepted';
// }elseif($a<80){
//     echo 'Good';
// }elseif($a<90){
//     echo 'v.good';
// }else{
//     echo 'Excellent';
// }
// if($m>=60){
//     echo 'PASS';
// } else {
//     echo 'FAIL';
// }
// SHORT HAND IF
// echo ($m >= 60) ? 'PASS' : 'FAIL';

// SWITCH
// $t = strtolower('ReD');
// $t = strtoupper('gReEn');
// switch($t){
//     // case 'green':
//     case 'GREEN':
//         echo 'Go';
//     break;
    
//     // case 'orange':
//     case 'ORANGE':
//         echo 'Ready';
//     break;
    
//     // case 'red':
//     case 'RED':
//         echo 'Stop.. !';
//     break;

//     default: echo 'Take care';

// }
// $d = Date('y-m-d H:i:s');
$d = Date('D');
// $d = 'Friday';
// echo $d;
switch ($d){
    case 'Fri':
    case 'Sat':
        echo 'Holiday';
    break;
    case 'Sun':
    case 'Tue':
        echo 'Mobile, Web';
    break;
    case 'Mon':
    case 'Wed':
        echo 'Security, Network';
    break;
    case 'Thu':
        echo 'Project';
    break;
    default : echo 'Error, check day.';

}