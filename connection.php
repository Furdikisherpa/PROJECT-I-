<?php
try{
$dsn = "mysql:host=localhost; dbname=tourism";  //it specify hostname and databasename
$username = "root";
$password = "";
$conn = new PDO($dsn, $username, $password);  //creating a PDO object 
// echo "Connection successful";
}catch(PDOException $e)
{
    echo $e-> getMessage(); 
}
?>