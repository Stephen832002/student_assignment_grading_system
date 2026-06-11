<?php

include "../config/database.php";

$submission_id = $_POST['submission_id'];
$score = $_POST['score'];
$feedback = $_POST['feedback'];

mysqli_query(
    $conn,
    "INSERT INTO grades
    (submission_id, score, feedback)
    VALUES
    (
        '$submission_id',
        '$score',
        '$feedback'
    )"
);

echo "Grade Saved Successfully";

?>