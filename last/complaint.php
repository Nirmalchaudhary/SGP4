<?php

use LDAP\Result;

$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername,$username,$password);

echo "connection was successful";


if(!$conn)
    echo ("sorry we failed to connect :". mysqli_connect_error());
else
    echo "connection was successfull";
    $conn = mysqli_connect($servername,$username,$password,"userform");
    $sql = "INSERT INTO complainttemp(category,services,discription,filename) values('ok','ok','ok','ok')";
    if ($conn->query($sql)){
        echo "New record is inserted sucessfully";
    } else {
        echo "not inserted".mysqli_error($conn);
    }
//db

// $sql ="CREATE DATABASE complaint";
// $result=mysqli_query($conn,$sql);
// echo "the result is" ;
// echo var_dump($result);
// echo "<br>";

// if(!$result)
// {
//     echo "the db was created successfully";
// }
// else
// {
//     echo "the db was not created because of this error -->".mysqli_error($conn);
// }


if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
	include "db_conn.php";

	echo "<pre>";
	print_r($_FILES['my_image']);
	echo "</pre>";

	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

	if ($error === 0) {
		if ($img_size > 125000) {
			$em = "Sorry, your file is too large.";
		    header("Location: index.php?error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				$sql = "INSERT INTO complainttemp(image_url) 
				        VALUES('$new_img_name')";
				mysqli_query($conn, $sql);
				header("Location: view.php");
			}else {
				$em = "You can't upload files of this type";
		        header("Location: new-complain.html?error=$em");
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: new-complain.html?error=$em");
	}

}else {
	header("Location: index.php");
}

?>