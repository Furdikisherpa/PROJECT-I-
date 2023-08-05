<?php
session_start();
require_once 'connection.php';
$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM registered_users where email=?";
$stmt=$conn->prepare($query);
$stmt -> execute([$email]);
$count = $stmt->rowCount();
if($count > 0){
    header("Location:index.php?ex=1");
}else{
$query2 = "INSERT INTO registered_users (full_name, username, email, password) VALUES (?, ?, ?, ?)";
$stmt=$conn->prepare($query2);
$stmt->execute([$_POST["fullname"], $_POST["username"], $email, $password]);
header("Location:index.php");
}
?>