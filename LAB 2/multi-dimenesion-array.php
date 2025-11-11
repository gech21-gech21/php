<?php
$marks = array("Sol" => array("physics" => 35, "maths" => 30,"chemistry" => 39),
"John" => array ("physics" => 30,"maths" => 32, "chemistry" =>29),
"Sara" => array ("physics" => 31,"maths" => 22, "chemistry" =>39));

echo "Marks for Sol in physics : ";
echo $marks['Sol']['physics']. "<br>";
echo "Marks for Sol in maths : ";
echo $marks['Sol']['maths']. "<br>";
echo "Marks for Sara in chemistry: ";
echo $marks['Sara']['chemistry']. "<br>";
?>
