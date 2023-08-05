<?php
// echo "<pre>";
// print_r($_POST); //array print garxa 
// echo "</pre>";

if(isset($_POST['submit'])){
    require_once "connection.php";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $Mobile_no = $_POST['number'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];

    $query = 'INSERT INTO contact_us (name,email,mobile_number,subject,message) VALUES (?,?,?,?,?)';
    $stmt = $conn->prepare($query);
    $stmt -> execute([$name, $email, $Mobile_no,  $subject, $message,]);
    header("Location:contactus.php");
}else
{
    header("Location:contactus.php");
}


?>