<!DOCTYPE html>
<html>
<head>
    <title>Create Assignment</title>
</head>
<body>

<h2>Create Assignment</h2>

<form action="save_assignment.php" method="POST">

    Title:<br>
    <input type="text" name="title"><br><br>

    Description:<br>
    <textarea name="description"></textarea><br><br>

    Deadline:<br>
    <input type="date" name="deadline"><br><br>

    <button type="submit">
        Save Assignment
    </button>

</form>

</body>
</html>
