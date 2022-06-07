<?php
$host="localhost";
$dbuser="root";
$dbpass="";
$dbname="don";

//mysqli

@$con=mysqli_connect($host,$dbuser,$dbpass,$dbname);

if(!$con){
    
    echo 'nooo connect';
    
}else {
    echo "yes connect";
}



?>