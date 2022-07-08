<?php
    session_start();

     include './dbconn.php';

    
    if(isset($_POST['submit'])){$email = mysqli_real_escape_string($con,$_POST['email']);
        
        $emailquery = "select * from signup where email = '$email' ";

        $query = mysqli_query($con,$emailquery);

        $emailcount = mysqli_num_rows($query);

        if($emailcount){
            $userdata = mysqli_fetch_array($query);

            $username = $userdata['username'];

            $token = $userdata['token'];

            
            $subject = "Password Reset";
            $body = "Hi $username. Click here too reset your password 
            http://localhost/niit%20newnew/reset_password.php?token=$token";
            $sender_email = "From: rahulkumarcoder1404@gmail.com";

            if(mail($email, $subject, $body, $sender_email)){
                $_SESSION['msg'] = "email succesfully send to your email id = $email. for password reset part";
                header('Location: login.php');
            }else{
                
                $_SESSION['msg'] = "email not  send to your email id = $email. try again!!";
            }

        }else{
            echo "your email= $email is not found";   
        }
    }else{
        echo "";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./recover_mail.css">
    <title>Recover Your Account</title>

</head>

<body class="bod">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.2/vanilla-tilt.min.js"></script>
    <main>
        <div class="circle"></div>
        
        <form action="" method="post" class="your-element" data-tilt>
            <span class="font">Recover Your account</span>
            <div class="cont">
                <div class="data font">
                    <label><?php 
                    if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    }else{
                        echo $_SESSION['msg'] = '';
                    }
                     ?></label>
                     <br>
                    <label for="email">Enter your email Properly.</label>
                    <input id="username" type="text" autocomplete="off" required="" name="email">
                </div>
                <div class="data font">
                <div>
                    <input type="submit" name="submit" value="Send Mail">
                </div>
                <p class="logo"><a href="./login.php" style="text-decoration: none;color: white;">Log In</a></p>
                <br>
                <br>
                <p class="logo"><a href="./signup.php" style="text-decoration: none;color: white;">SIGNUP</a></p>
            </div>

        </form>
        <script type="text/javascript">
            VanillaTilt.init(document.querySelector(".your-element"), {
                max: 15,
                speed: 400,
                glare: true,
                "max-glare": 1
            });


            VanillaTilt.init(document.querySelectorAll(".your-element"));
        </script>
    </main>
</body>

</html>
