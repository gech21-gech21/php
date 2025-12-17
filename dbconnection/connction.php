<?php
$conn=mysqli_connect("localhost","root","","");
if($conn->connect_error){
        die("conection faild");

}
echo "connection successfuly created".$conn->connect_error;
$conn->close();












?>