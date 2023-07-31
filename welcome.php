<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    echo "Welcome ". $_SESSION['name'];
} else {
    $_SESSION['name'] = $_REQUEST['name'];
    $_SESSION['age'] = $_REQUEST['age'];
    echo "Welcome ". $_REQUEST['name'];
}
?>

<form action="session_test.php">
    <input type="submit">
</form>