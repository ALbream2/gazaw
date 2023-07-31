
<?php
$name = 'Ali';
$uid = '2022001';
$level = 1;
$avg = 88.8;
$is_graduated = false;

$student = ['Ali', '2022001', 1, 88.8, true]; // INDEXED
$student1 = [
    'name' => 'Omar',
    'uid' => '2022001',
    'avg' => 88.88,
    'is_graduated' => false,
    'level' => 2
]; // ASSOCIATIVE ARRAY (KEY=>VALUE)

// CONSTANT in PHP
define('PI', 3.14);
// PI = 5; // Erroe
$r = 5; 
$a =  PI * $r * $r; 
$pi = 23.14; // Another variable 

echo $a . '<br>';
echo $abc = 2 * PI * $r;

echo  '<br>';
?>
<html>
    <body>
        <table>
            <th>#</th>
            <th>Name</th>
            <th>ID</th>
            <th>Level</th>
            <th>Average</th>
            <th>Graduated</th>
            <tr>
                <td>1</td>
                <td><?php echo $student[0] ?></td>
                <td><?php echo $student[1] ?></td>
                <td><?php echo $student[2] ?></td>
                <td><?php echo $student[3] ?></td>
                <td><?php if($student[4] == false){ echo 'STUDENT';} else {echo 'Congrants';} ?> </td>
            </tr>
            <tr>
                <td>1</td>
                <td><?php echo $student1['name'] ?></td>
                <td><?php echo $student1['uid'] ?></td>
                <td><?php echo $student1['level'] ?></td>
                <td><?php echo $student1['avg'] ?></td>
                <td><?php if($student1['is_graduated']) {echo 'GRADUATED';} ?> </td>
            </tr>
        </table>
    </body>
</html>

