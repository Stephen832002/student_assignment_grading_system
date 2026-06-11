<?php

include "config/database.php";

$email = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query(
    $conn,
    "SELECT * FROM users
     WHERE email='$email'
     AND password='$password'"
);

$user = mysqli_fetch_assoc($query);

if($user)
{
    if($user['role'] == 'teacher')
    {
        header("Location: teacher/dashboard.php");
    }
    elseif($user['role'] == 'student')
    {
        header("Location: student/dashboard.php");
    }
    else
    {
        echo "Admin Login";
    }
}
else
{
    echo "Login Failed!";
}

?>