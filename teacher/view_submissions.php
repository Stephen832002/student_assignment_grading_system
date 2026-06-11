<?php

include "../config/database.php";

$result = mysqli_query(
    $conn,
    "SELECT * FROM submissions"
);

?>

<!DOCTYPE html>
<html>
<head>
    <title>View Submissions</title>
</head>
<body>

<h2>Student Submissions</h2>

<table border="1">

<tr>
    <th>ID</th>
    <th>Assignment ID</th>
    <th>Student ID</th>
    <th>File</th>
    <th>Action</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>

<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['assignment_id']; ?></td>
    <td><?php echo $row['student_id']; ?></td>
    <td><?php echo $row['file_path']; ?></td>
    <td>
        <a href="grade_submission.php?id=<?php echo $row['id']; ?>">
            Grade
        </a>
    </td>
</tr>

<?php } ?>

</table>

</body>
</html>