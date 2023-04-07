<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html >
<html lang="en" style="background: linear-gradient(135deg,  #8e8ee9, #eaeaf9);">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body
    {
        background-color: cyan;
    }
</style>
<body style="background-color: white;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form" style="background: linear-gradient(135deg,  #8e8ee9, rgba(255, 255, 255, 0));
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border-radius: 20px;
    border:1px solid rgba(255, 255, 255, 0.18);
    box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);">
                <form action="login-user.php" method="POST" autocomplete="">
                    <h2 class="text-center" style="text-align: center;">Login Form</h2>
                    <p class="text-center">Login with your email and password.</p>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" style="border-radius: 10px;margin: 10px; width:250px" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" style="border-radius: 10px;margin: 10px; width:250px" type="password" name="password" placeholder="Password" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                    </div>
                    <div class="link forget-pass text-left" style="text-align: center;"><a href="forgot-password.php">Forgot password?</a></div>
                    <div class="form-group">
                        <input class="form-control button" style="border-radius: 10px;margin: 10px; width:250px;background-color: #5757d1;" type="submit" name="login" value="Login now" >
                    </div>
                    <div class="link login-link text-center" style="text-align: center;"><a href="signup-user.php">Signup now</a></div>
                    <!-- <div class="link login-link text-center" style="text-align: center;"><a href="adminlogin.php">Admin Login</a></div> -->
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>

