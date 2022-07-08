<?php
    
    session_start();

    unset($_SESSION['login_email']);
    unset($_SESSION['pass_msg']);
    unset($_SESSION['msg']);

    echo "<script type='text/javascript'>alert('you are logged out');
    window.location = 'login.php';
    </script>";


?>