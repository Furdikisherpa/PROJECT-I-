<?php
session_start();
if(isset($_SESSION['loggedin'])){
    unset($_SESSION['loggedin'],$_SESSION['firstname']);
    unset($_SESSION['userid']);
    header("Location:index.php");
}else
{
    header("Location:index.php");
}


?>