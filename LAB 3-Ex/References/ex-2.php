<?php
function addFive(&$num) {
    $num += 5;
}

$value = 10;       
addFive($value);   

echo $value;       
?>
