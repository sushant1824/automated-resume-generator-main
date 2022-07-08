<?php
    session_start();
    ob_start();
    include './dbconn.php';    
    if(isset($_POST['submit']))
    {
        
        if(isset($_GET['token'])){
            $token = $_GET['token'];
               
        $newpassword = mysqli_real_escape_string($con,$_POST['password']);
        
        $cpassword = mysqli_real_escape_string($con,$_POST['cpassword']);

        $pass=password_hash($newpassword, PASSWORD_BCRYPT);
        
        $cpass=password_hash($cpassword, PASSWORD_BCRYPT);

        if($newpassword == $cpassword)
        {
         
        $update_password_query = "UPDATE `signup` SET `password` = '$pass' where token= '$token' "; 
        $pass_query = mysqli_query($con,$update_password_query);  
        
        $_SESSION['msg'] = 'Your password has been updated please login with your updated password!';
        header('location: login.php');
        }else{
            $_SESSION['pass_msg'] = "Password is not matching";
        }
        }else{
            echo 'try again with the link!!';
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
    <link rel="stylesheet" type="text/css" href="./recover_mail.css" />
    <title>Password Reset</title>

</head>

<body class="bod">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.2/vanilla-tilt.min.js"></script>
    <main>
        <div class="circle"></div>
        <form action="" method="post" class="your-element" data-tilt>
            <span class="font">Password reset</span>
            <div class="cont">
                <div class="data font">
                    <label for="password">Enter Your new Password</label>

                    <input id="password" type="password" required="" name="password">
                </div>
                <div class="data font">
                    <label for="password">Confirm Password</label>

                    <input id="password" type="password" required="" name="cpassword">
                </div>
                <div class="data font">
                    <div>
                        <input type="submit" name="submit" value="Reset Your Password" style="width: 160px;margin-left: 8px!important;">
                    </div>
                    <p class="logo" style="margin-left: 68%;"><a href="./login.php" style="text-decoration: none;color: white;">Log In</a></p>
                    <br>
                    <br>
                    <p class="logo" style="margin-left: 68%;"><a href="./signup.php" style="text-decoration: none;color: white;">SIGNUP</a></p>
                </div>
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