<?php
$data=file_get_contents("data.json");
$arraydata=json_decode($data,true);

echo "hello every one i'm ". $arraydata['Lname']." " .$arraydata['Fname'];

?>