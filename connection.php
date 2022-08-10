<?php

$host="localhost";
$dbuser="root";
$dbpass="";
$dbname="test2";



//mysqli

@$con=mysqli_connect($host,$dbuser,$dbpass,$dbname);

if(!$con){
    
    echo 'nooo connect';
    
}

else{
	echo 'connect';
}

?>
