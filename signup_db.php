<?php
    session_start();

     include './dbconn.php';

    
    if(isset($_POST['submit'])){
        
        $username = mysqli_real_escape_string($con,$_POST['username']);

        $email = mysqli_real_escape_string($con,$_POST['email']);
        
        $password = mysqli_real_escape_string($con,$_POST['password']);
        
        $cpassword = mysqli_real_escape_string($con,$_POST['cpassword']);

        $pass=password_hash($password, PASSWORD_BCRYPT);
        
        $cpass=password_hash($cpassword, PASSWORD_BCRYPT);
        
        $token = bin2hex(random_bytes(15));

        $emailquery = "select * from signup where email = '$email' ";

        $query = mysqli_query($con,$emailquery);

        $emailcount = mysqli_num_rows($query);

        if($emailcount>0){
            echo "<script>alert('email already exists try login with this email that you have entered!')</script>";
            include './login.php';
        }else{
            if($password == $cpassword){
                $sup = "insert into signup (username,email,password,cpassword,token,status) values('$username','$email','$pass','$cpass','$token','inactive')";

                $iquery =  mysqli_query($con,$sup);

                if($iquery){
                    $subject = "Email Activation";
                    $body = "Hi $username. Click here too activate your acount
                     http://localhost/niit%20newnew/activation.php?token=$token  ";
                    $sender_email = "From: rahulkumarcoder1404@gmail.com";

                    if(mail($email, $subject, $body, $sender_email)){
                        $_SESSION['msg'] = "email succesfully send to your email id = $email";
                        header('Location: login.php');

                    }else{
                        echo "<script type='text/javascript'>alert('enter the valid email !!');
                        window.location = 'signup.php';
                        </script>";
                    }
                }else{
                    
                echo "<script type='text/javascript'>alert('not inserted succesfully Try again!!');
                window.location = 'signup.php';
                </script>";
                }
            }else{
                
                echo "<script type='text/javascript'>alert('password is not matching');
                window.location = 'signup.php';
                </script>";
            }
        }
    }else{
        
        echo "<script type='text/javascript'>alert('Try Again!!');
        window.location = 'signup.php';
        </script>";
    }

?>