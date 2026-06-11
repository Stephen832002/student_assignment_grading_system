<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "assignment_system"
);

if(!$conn)
{
    die("Database Connection Failed");
}

?>