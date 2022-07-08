
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./signup.css" />
    <title>SIGNUP</title>

</head>

<body class="bod">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.2/vanilla-tilt.min.js"></script>
    <main>
        <div class="circle"></div>
        <form action="./signup_db.php" method="post" class="your-element" data-tilt>
            <span class="font">Sign up</span>
            <div class="cont">
                <div class="data font">
                    <label for="username">Username</label>
                    <input id="username" type="text" autocomplete="off" required="" name="username">
                </div>
                <div class="data font">
                    <label for="username">E-Mail adress</label>
                    <input id="username" type="text" autocomplete="off" required="" name="email">
                </div>
                <div class="data font">
                    <label for="password">Password</label>

                    <input id="password" type="password" required="" name="password">
                </div>
                <div class="data font">
                    <label for="password">Confirm Password</label>

                    <input id="password" type="password" required="" name="cpassword">
                </div>
                <div>
                    <input type="submit" name="submit" value="SIGN UP">
                </div>
                <p class="logo"><a href="./login.php" style="text-decoration: none;color: white;">Log In</a></p>
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
