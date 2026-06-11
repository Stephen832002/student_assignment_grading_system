<?php

include "../config/database.php";

$result = mysqli_query(
    $conn,
    "SELECT * FROM grades"
);

?>

<!DOCTYPE html>
<html>
<head>
    <title>View Grades</title>
</head>
<body>

<h2>My Grades</h2>

<table border="1">

<tr>
    <th>Submission ID</th>
    <th>Score</th>
    <th>Feedback</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>

<tr>
    <td><?php echo $row['submission_id']; ?></td>
    <td><?php echo $row['score']; ?></td>
    <td><?php echo $row['feedback']; ?></td>
</tr>

<?php } ?>

</table>

</body>
</html>