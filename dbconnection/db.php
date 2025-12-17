<?php

$createConn = new mysqli("localhost", "root", "","");

if($createConn->connect_error){
    die("Connection failed: " . $createConn->connect_error);
}
  echo "connection created  successful";
$sql = "create database mydb3";
if($createConn->query($sql) === true){
    echo "Creating db successfully";
} else {
    echo "Creating db not successful: " . $createConn->error;    
}

$createConn->close();


echo "<br>Connection successful";
//creating table 

?>