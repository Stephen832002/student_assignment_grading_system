<?php

include "../config/database.php";

$title = $_POST['title'];
$description = $_POST['description'];
$deadline = $_POST['deadline'];

mysqli_query(
    $conn,
    "INSERT INTO assignments
    (title, description, deadline, teacher_id)
    VALUES
    ('$title', '$description', '$deadline', 1)"
);

echo "Assignment Saved Successfully";

?>