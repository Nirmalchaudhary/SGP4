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
    <link rel="stylesheet" href="card.css">
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
                FROM   usertable   where usertable.user='education'";

                if ($result = $conn->query($query)) {
                    while ($row = $result->fetch_assoc()) {
                        $user_id = $row['userCode'];
                       
                        $field1name = $row["name"];
                        $field2name = $row["email"];
                        

                        echo '
                        <div id="login-container">
        <div class="profile-img"></div>
        <h1>
          Adviser
        </h1>
        <div class="description">
          <p>Name :- '.$field1name.'</p><br>
          <p>Profesion :- Profesor</p><br>
          <p> Email :- '.$field2name.'</p><br>
        </div>
        <button>Get Advice</button>
      </div>';
                    }
                    $result->free();
                }
            }

            ?>
       
    </div>
</body>
</html>