<?php

echo '<h1>Loops in PHP</h1>';
// FOR Loop كلما
// for($i=0; $i<10; $i++){
//     echo $i . '<br>';
// }

// for($i=1; $i<6; $i++){
//     echo 'User0' . $i .'<br>';
// }

// for ($i = 20; $i >= 10; $i--) {
//     echo 'User0' . $i . '<br>';
// }

// // for($i=0; $i<5; $i++){
// //     echo 'User0' . $i+1 .'<br>';
// // }

// // WHILE طالما
// // $c = 0;
// // while($c < 10){
// //     echo $c+1 . '<br>';
// //     $c++;
// // }
// // re-write for with while or بالعكس
// // for($c=0; $c<10; $c++){
// //     echo $c+1 . '<br>';
// // }

// // DO-WHILE
// // 
// $m = 1;
// do {
//     echo $m . '<br>';
//     $m++;
// } while ($m <= 5);

// //
// for ($c = 1; $c < 11; $c++) {
//     echo "$c * 5 = " . $c * 5 . '<br>';
// }

// // Array Loop
// $arr = ['Ali', 123, false, NULL, 'Gaza'];
// foreach ($arr as $a) {
//     echo $a . '<br>';
// }

// $l = count($arr);
// // echo $l;
// for ($i = 0; $i < $l; $i++) {
//     echo $arr[$i] . '<br>';
// }

// // COMPARISONS
// // Strickt vs Loose (weak) comp.
// $d = 8;
// $a = 5;
// $b = '5';
// // if ($a == $b){
// if ($a === $b) {
//     echo 'TRUE';
// } else {
//     echo 'FALSE<br>';
// }



// echo ($d != $a) ? 'YES' : 'No';
// echo ($d !== $a) ? 'YES' : 'No';
// echo ($d >= $a) ? 'YES' : 'No';
// echo ($d <= $a) ? 'YES' : 'No';

// // Increment Operators
// echo '<br>';
// $x = 5;
// echo ++$x;
// echo '<br>';
// echo $x++;
// echo '<br>';
// echo $x;
// //decrement 
// echo '<br>';
// $x = 4;
// echo $x--;
// echo $x;
// echo '<br>';


$cols = 10;
$rows = 10;
echo "<table border=\"1\">";

        for ($r =1; $r <= $rows; $r++){

            echo'<tr>';

            for ($c = 1; $c <= $cols; $c++)
                echo '<td>' .$c*$r.'</td>';
           echo '</tr>'; // close tr tag here

        }

  echo"</table>";
