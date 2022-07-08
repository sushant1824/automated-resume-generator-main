<?php
    session_start();
    include './dbconn.php';
    

    if(isset($_GET['token'])){
        $token = $_GET['token'];

        $update = "UPDATE `signup` SET `status`= 'active' where token= '$token'";
        $query = mysqli_query($con,$update);

        if($query){
            if(isset($_SESSION['msg'])){
                $_SESSION['msg']="Account verified";
                header('location: login.php');
            }else{
                $_SESSION['msg']="You are logged out";
                header('location: login.php');
            }
        }else{
            $_SESSION['msg']="Account not verified yet";
            header('location: login.php');
        }
    }
?>