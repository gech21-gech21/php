<?php
function calculateArea($radius) {
    $pi = 3.1416;
    return $pi * $radius * $radius;
}

echo "Area of Circle: " . calculateArea(7);
?>
