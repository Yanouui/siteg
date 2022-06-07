<?php

$host="localhost";
$dbuser="root";
$dbpass="";
$dbname="cart_db";

$conn = mysqli_connect($host,$dbuser,$dbpass,$dbname);
if(!$conn){
    
    echo 'nooo connect';
    
}

?>