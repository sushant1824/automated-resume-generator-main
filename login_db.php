<?php
    session_start();
    include './dbconn.php';
    if(isset($_POST['login'])){
          
        $email = $_POST['email'];
        $password = $_POST['password'];
  
        $email_search = "select * from signup where email='$email' and status='active' ";
        $que = mysqli_query($con,$email_search);
  
        $email_count = mysqli_num_rows($que);
        
        if($email_count){
            $email_pass = mysqli_fetch_assoc($que);
            
            $db_pass = $email_pass['password'];

            $pass_decode = password_verify($password,$db_pass);


            if($pass_decode){
                
                echo "login successful";
                
                $_SESSION['login_email'] = $email;
                header("Location: home_after_login.php");
                exit();

            }else{
                echo "<script type='text/javascript'>alert('password incorrect');
                window.location = 'login.php';
                </script>";
            }
  
        }else{
            
            echo "<script type='text/javascript'>alert('invalid email');
            window.location = 'login.php';
            </script>";
        }
  
      }else{
        echo "<script type='text/javascript'>alert('you're email is not verified kindly check your inbox and verified yur email address');
        window.location = 'login.php';
        </script>";
      }  
?>
  