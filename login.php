<?php

    session_start();

    require 'database.php';
    require 'function.php';

    $error_msg = '';
    $error_msg2 = '';

  
    if(isset($_POST['submit'])) {
        
        $user = $_POST['user_id'];
        $email = $_POST['email_id'];
        $password = $_POST['password'];

        $res = mysqli_query($con, "select * from users where user_id='$user' and password='$password'");
        $check = mysqli_num_rows($res);

        if($check>0){
            $error_msg2 = "Sorry!! user id ".$user." is already taken";
        }else{
            mysqli_query($con, "insert into users (user_id,email_id,Password) values('$user', '$email', '$password')");
        }

        
    } elseif (isset($_POST['login'])) {
        $user = $_POST['user'];
        $password = $_POST['pass'];

        $req = mysqli_query($con, "select * from users where user_id='$user' and password='$password'");
        $check = mysqli_num_rows($req);

        if($check>0){

            $row = mysqli_fetch_assoc($req);

            $_SESSION['USER_LOGIN'] = 'yes';
            $_SESSION['USER_ID'] = $row['user_id'];
            $_SESSION['USER_EMAIL'] = $row['email_id'];
            redirect('index.php');
            

        }else{
            $error_msg = "Invalid crendentials";
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Register</title>
    <link rel="stylesheet" href="login .css">
</head>
<body>
    
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <div style="color:red; text-align:center"> <?php echo $error_msg  ?><?php echo $error_msg2  ?> </div> <br>
                    
          
            <form id="login" method="post" class="input-group">
                <input type="text" name="user" class="input-field" placeholder="User Id" required>
                <input type="password" name = "pass" class="input-field" placeholder="Enter Password" required>

                <input type="checkbox" class="check-box"><span>Remember Password</span>
                <button type="submit" name="login" class="submit-btn" >Log In</button>
                
            </form>
            <form id="register" class="input-group" method="post">
                <input type="text" name="user_id" class="input-field" placeholder="User Id" required>
                <input type="email" name="email_id" class="input-field" placeholder="Email Id" required>
                <input type="text" name="password" class="input-field" placeholder="Enter Password" required>
                <input type="checkbox"  class="check-box"><span>I agree to the terms and conditions</span>
                <button type="submit" name="submit" class="submit-btn">Register</button>
            </form>
        </div>

       
    </div>

    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register() {
            x.style.left ="-400px";
            y.style.left ="50px";
            z.style.left ="110px";
        }

        function login() {
            x.style.left ="50px";
            y.style.left ="450px";
            z.style.left ="0px";
        }
    </script>
</body>
</html>