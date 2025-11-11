<?php
function findAverage($numbers) {
    $total = array_sum($numbers);
    $count = count($numbers);
    return $total / $count;
}
$nums = [10, 20, 30, 40, 50];
echo "Average: " . findAverage($nums);
?>
