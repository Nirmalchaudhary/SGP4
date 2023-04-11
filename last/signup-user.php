<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en" style="background: linear-gradient(135deg,  #8e8ee9, #eaeaf9);">
<head>
    <meta charset="UTF-8">
    <title>Signup Form</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: white;">
<div style="position:absolute;top:190px;border-radius:20px;padding:30px;box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);">
<p style="color:white">If you want advise then enter user in User Type</p>
<p style="color:white">If you are advisor then Enter your field:-</p>
<p>1) education</p>
<p>2) industry</p>
<p>3) property</p>
<p>4) tech</p>
<p>5) financial</p>
<p>6) Other</p>

</div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form"style="background: linear-gradient(135deg, #8e8ee9, rgba(255, 255, 255, 0));
                         backdrop-filter: blur(10px);
                         -webkit-backdrop-filter: blur(10px);
                          border-radius: 20px;
                          border:1px solid rgba(255, 255, 255, 0.18);
                          box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);" >
                <form action="signup-user.php" method="POST" autocomplete="" style="text-align: center;">
                    <h2 class="text-center">Signup Form</h2>
                    <p class="text-center">It's quick and easy.</p>
                    <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" style="border-radius: 10px;margin: 5px; width:250px" type="text" name="name" placeholder="Full Name" required value="<?php echo $name ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" style="border-radius: 10px;margin: 5px; width:250px" type="email" name="email" placeholder="Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Enter a valid Email Address" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" style="border-radius: 10px;margin: 5px; width:250px" type="text" name="user" placeholder="User Type"  required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" style="border-radius: 10px;margin: 5px; width:250px" type="password" name="password" placeholder="Password" minlength="8" maxlength="20"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" style="border-radius: 10px;margin: 5px; width:250px" type="password" name="cpassword" placeholder="Confirm password" minlength="8" maxlength="20"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" style="border-radius: 10px;margin: 5px; width:250px ;background-color:  #5757d1;" type="submit" name="signup" value="Signup">
                    </div>
                    <div class="link login-link text-center">Already a member? <a href="login-user.php">Login here</a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>