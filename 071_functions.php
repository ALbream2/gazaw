<?php

$x = 50;

function printX($x)
{
    global $x;
    $x++;
    echo $x . '<br>';
}

echo $x . '<br>';
printX($x);
echo $x . '<br>';


// return
function returnV()
{
    
    return 'ABC';
    echo 'Test';
}

returnV();
