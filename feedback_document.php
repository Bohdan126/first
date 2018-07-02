<?php
include 'includes/db.php';

$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];

$count = mysqli_query($connection, "SELECT * FROM 'users' WHERE 'name' = '$name' AND 'password' = '$password' AND 'email' = '$email'");

/*if (mysqli_num_rows($count) == 0){
    echo 'You are not authorized!';
} else{*/
    echo 'Hello, ' . $name . '!' ."<br />";
    echo 'Your password -  ' . $password ."<br />";
    echo 'Your email - ' . $email;
//}