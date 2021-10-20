<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'testdb';

//establish connection to db
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$conn){
        die("Connection failed");
}else
{
     //   echo "Connected successfully";
}
?>