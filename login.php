<?php
    session_start(); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./login.css" />
    <title>LOGIN</title>

</head>

<body class="bod">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.2/vanilla-tilt.min.js"></script>
    <main>
        <div class="circle"></div>
        
        <form action="./login_db.php" method="post" class="your-element" data-tilt>
            <span class="font">Log in</span>
            <div class="cont">
                <div class="data font">
                    <label><?php 
                    if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    }else if(isset($_SESSION['pass_msg'])){
                        echo $_SESSION['pass_msg'];
                    }else{
                        echo $_SESSION['msg'] = '';
                    }
                     ?></label>
                    <br>
                    <label for="email">Enter your email</label>
                    <input id="username" type="text" autocomplete="off" required="" name="email">
                </div>
                <div class="data font">
                    <label for="password">Password</label>

                    <input id="password" type="password" required="" name="password">
                </div>
                <div>
                    <input type="submit" name="login" value="Log in">
                </div>
                <p class="logo"><a href="./signup.php" style="text-decoration: none;color: white;">SIGNUP</a></p>
                
                <p class=forgot>Forgot Password <a href="./recover_mail.php" target="_blank" rel="noopener noreferrer">Click here</a> </p>
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