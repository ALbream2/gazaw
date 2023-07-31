<?php
echo '<h1>Super Global Array</h1><pre>';

print_r($_GET);
print_r($_POST);
print_r($_FILE);
print_r($_REQUEST);
print_r($_SERVER);
// print_r($_SERVER['PHP_SELF']);
print_r($_COOKIE);
print_r($_SESSION);

$_GET['name']