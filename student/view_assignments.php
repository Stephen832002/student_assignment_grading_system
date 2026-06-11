<?php

include "../config/database.php";

$result = mysqli_query(
    $conn,
    "SELECT * FROM assignments"
);

?>

<!DOCTYPE html>
<html>
<head>
    <title>View Assignments</title>
</head>
<body>

<h2>Assignments</h2>

<table border="1">
<tr>
    <th>Title</th>
    <th>Description</th>
    <th>Deadline</th>
    <th>Action</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>

<tr>
    <td><?php echo $row['title']; ?></td>
    <td><?php echo $row['description']; ?></td>
    <td><?php echo $row['deadline']; ?></td>
    <td>
        <a href="submit_assignment.php?id=<?php echo $row['id']; ?>">
            Submit
        </a>
    </td>
</tr>

<?php } ?>

</table>

</body>
</html>