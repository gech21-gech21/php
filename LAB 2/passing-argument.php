<?php
function addFive(&$num) {
$num +=5;
}
function addSix(&$num) {
$num += 6;}
$orignum = 10;
addFive( $orignum);
echo "Original Value is Sorignum<br />";
addSix( $orignum);
echo "Original Value is $orignum<br />";
?>