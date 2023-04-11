<?php
session_start();
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>

    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <header class="header">
        <img src="logo.png" alt="Our main logo" class="logo">
        <nav class="navbar">
            <ul class="navbar-lists">
                <li><a href="base.html" class="navbar-link home-link">Home</a></li>
                <li><a href="#" class="navbar-link about-link">Get Advice</a></li>
                <li><a href="#" class="navbar-link Topics-link">Doubt</a></li>
                <li><a href="#" class="navbar-link contact-link">Feedback</a></li>
                <li><a href="profile.html" class="navbar-link profile-link">Profile</a></li>
            </ul>
        </nav>
    </header>
    <div class="card-container">
    <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $conn = mysqli_connect($servername, $username, $password, "userform");

            if (!$conn)
                echo ("sorry we failed to connect :" . mysqli_connect_error());
            else {
                // echo "connection was successfull";
                // $sql ="CREATE DATABASE complaint";
                // $result=mysqli_query($conn,$sql);


                $query ="SELECT usertable.userCode, usertable.name, usertable.email
                FROM   usertable   where usertable.user='financial'";

                if ($result = $conn->query($query)) {
                    while ($row = $result->fetch_assoc()) {
                        $user_id = $row['userCode'];
                       
                        $field1name = $row["name"];
                        $field2name = $row["email"];
                        

                        echo '
                        <div class="card-main">
                        <div class="card">
                            <img src="profile.png" alt="" width="100" height="100">
                        </div>
                        <div class="card">
                            <h3>Name : '. $field1name .' </h3>
                        </div>
                        <div class="card">
                            <h3>Profession : Bank manager</h3>
                        </div>
                        <div class="card">
                            <h3>Email : '. $field2name .'</h3>
                        </div>
                        <div class="card">
                            <input type="submit" value="Get Advice" name="Get Advice" id="submit" class="btn btn-card">
                          </div>
            
                    </div>';
                    }
                    $result->free();
                }
            }

            ?>
       
    </div>
</body>
</html>