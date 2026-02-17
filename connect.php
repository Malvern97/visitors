<?php
$name='root';
$host='localhost';
$pass='';
$db='blog'

$conn = new('$host,$db,$name,$pass');

if($conn){ echo" the connection was successful";}
else{
    echo"Unfortunately the database connection failed";
}






?>