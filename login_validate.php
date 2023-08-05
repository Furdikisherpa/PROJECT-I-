<?php
session_start();
//validated
require_once'connection.php';

// echo "<pre>";
// print_r($_POST);

// echo "</pre>";

 if(isset($_POST["test"])){
    //receiving user info from form
    $email = $_POST["user_email"];
    $password = $_POST["password"];

    //initially assuming that email and password hasn't been found.
    $email_found = 0;
    $password_found = 0;

    //selecting all data from registered_user table
    $query1 = "SELECT * FROM registered_users";
    $result = $conn->query($query1);
    $result = $result->fetchAll(PDO:: FETCH_ASSOC);
    //$result container all the rows from registered_users table as an 2 dimensional array with string index.

    // echo "<pre>";
    // print_r ($result); 
    // echo "</pre>";

    //comparing data from form wtih data from table.
    foreach($result as $singlerow){
        if($email == $singlerow["email"]){
            $email_found = 1;
            
            

            //only check if email has been found
            if($password == $singlerow["password"]){
                $password_found= 1; 
                $_SESSION['firstname'] = $singlerow['full_name'];
                
                break;
                

            }
        }
    }
    if($email_found == 0)
    {
        header("Location: index.php?UNF=1"); //UNF = UserNotFound
    }
    elseif($email_found == 1 && $password_found == 0)
    {
       header("Location: index.php?PNM=1"); //PNM = PasswordNotMatched
    }
    elseif($email_found == 1 && $password_found == 1)
    {
        $_SESSION['loggedin']=1;
        $_SESSION['userid']=$singlerow['user_id'];
        unset($_SESSION['notloggedin']);
        header("Location: index.php?");
    }
    
 }
 else
 {
    header("Location:error.php");
 }

?>