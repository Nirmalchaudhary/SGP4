<?php
session_start();
$userCode = $_SESSION['user1'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" href="profile1.css">
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <header class="header">
        <img src="logo.png" alt="Our main logo" class="logo">
        <nav class="navbar">
            <ul class="navbar-lists">
                <li><a href="base1.html" class="navbar-link home-link">Home</a></li>
                <li><a href="select.html" class="navbar-link about-link">Get Advice</a></li>
                <li><a href="#" class="navbar-link Topics-link">Doubt</a></li>
                <li><a href="#" class="navbar-link contact-link">Feedback</a></li>
                <li><a href="profile1.php" class="navbar-link profile-link">Profile</a></li>
            </ul>
        </nav>
    </header>
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
                    FROM   usertable   where usertable.userCode='$userCode'";

                    if ($result = $conn->query($query)) {
                        while ($row = $result->fetch_assoc()) {
                        $user_id = $row['userCode'];
                        $field1name = $row["name"];
                        $field2name = $row["email"];
                       

                            echo '
                            <div class="sidenav">
        <div class="profile">
            <img src="profile.png" alt="" width="100" height="100">
            <div class="name">
                '. $field1name . '
            </div>
            <div class="job">
            '. $field2name . '
            </div>
        </div>
    </div>

    <div class="main">
        <h2>IDENTITY</h2>
        <div class="card">
            <div class="card-body">
                <i class="fa fa-pen fa-xs edit"></i>
                <table>
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td>'. $field1name . '</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>'. $field2name . '</td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>:</td>
                            <td>*********</td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>:</td>
                            <td>changa, Anand</td>
                        </tr>
                        <tr>
                            <td>Phone no</td>
                            <td>:</td>
                            <td>9876540321</td>
                        </tr>
                        <tr>
                            <td>Highest Qualification</td>
                            <td>:</td>
                            <td>B Tech</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

       
    </div>';
                    }
                        $result->free();
                    }
                }

                ?>
    <!-- End -->
</body>
</html>



