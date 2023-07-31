<?php
session_start();
echo "Your name is " . $_SESSION['name'] . ", and your age is: " . $_SESSION['age'];
?>
<form action="9.php">
    <label>Alaa</label>    
    <input type="submit">
</form>