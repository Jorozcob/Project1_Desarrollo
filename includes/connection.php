<?php

session_start();

$conection = mysqli_connect("localhost","root","","prueba");

if($conection->connect_errno){
    die("Error");

}

?>
