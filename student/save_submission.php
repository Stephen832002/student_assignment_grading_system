<?php

include "../config/database.php";

$assignment_id = $_POST['assignment_id'];

$filename = $_FILES['file']['name'];

move_uploaded_file(
    $_FILES['file']['tmp_name'],
    "../uploads/".$filename
);

mysqli_query(
    $conn,
    "INSERT INTO submissions
    (assignment_id, student_id, file_path, submit_date)
    VALUES
    (
        $assignment_id,
        2,
        '$filename',
        CURDATE()
    )"
);

echo "Submission Uploaded Successfully";

?>