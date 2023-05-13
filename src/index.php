<?php

$servername = "mysql_db";
$username = "root";
$password = "mypass";
$dbname = "mydb";
$port = "3306";

try{
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=$dbname",$username,$password);
    $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Connected succesfully";
} catch(PDOException $e){
    echo "Connection failed: " . $e -> getMessage();
}